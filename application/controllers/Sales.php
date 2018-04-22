<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('Purchase');
        
          $this->load->helper('file');
     }
	public function index()
	{
	      
        }
       function sales_index()
        {
            $query=$this->Purchase->getproduct();
           $product=array();
           foreach ($query as $row)
           {
            $data=array(
            'id'=>$row->id,
            'prod_name'=>$row->prod_name
            );
            $product['prod'][]=$data;

           }
           
           $query=$this->Purchase->cartcount();
           {
           $v=count($query);
           $cart['count']=$v;
           
           $dat=  array_merge($product,$cart);
            $this->load->view('sales',$dat);
        }
        }
       function cart()
        {
             $cartreport=array();
            $query=$this->Purchase->getcartvalue();
            foreach ($query as $row)
            {
             $all=array('prod_name'=>$row->prod_name,
                 'cart_id'=>$row->cart_id,
                 'stock_id'=>$row->stock_id,
                 'product_id'=>$row->product_id,
                 'supplier_id'=>$row->supplier_id,
                 'brand'=>$row->brand,
                 'size'=>$row->size,
                 'mrp'=>$row->mrp,
                 'discount_price'=>$row->discount_price,
                 'mrp_total'=>$row->mrp_total,
                 'sales_rate'=>$row->sales_rate,
                 'quantity'=>$row->quantity ,
                 'allocate_price'=>$row->allocate_price,
                 'allocate_piece'=>$row->allocate_piece
                 );
             $cartreport['cart'][]=$all;
            }
            
            
            $this->load->view('cart',$cartreport);
            
        }
          
function checkbrand()
     {             
    
           if (isset($_REQUEST["loadtype"])){
            $loadtype=$_REQUEST["loadtype"];
            $type=$loadtype["type_name"];
         $html=array();
            $query=$this->Purchase->getspecifytype($type);
           // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $type);
            
              if(count($query)>0)
              {
                 // $html= '<option disabled selected>Select Brand</option>';
                  foreach ($query as $row)
                  {
            
                $all[]='<option value="'.$row->type.'" >'.$row->type.'</option>'; 
                  }
                  $html[]=$all;  
              }
          
 
           else
           {
               $html[]='null';
           }
          
           $size[]='<option disabled selected>Select size</option>';
           $query=$this->Purchase->getsize($type);
           foreach ($query as $row)
           {
           $size[]='
                   <option value="'.$row->size.'">'.$row->size.'</option>';
           }
           $html[]=$size;

           echo json_encode($html);

     }
}
function getall()
{
     if (isset($_REQUEST["loadtype"]))
         {
     $loadtype=$_REQUEST['loadtype'];
     $type=$loadtype['type_val'];
     $brand=$loadtype['brand_val'];
     $size=$loadtype['size_val'];
      //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $size);
      //write_file('C:\xampp\htdocs\Annai_Barings\application\log1.txt', $brand);
      //write_file('C:\xampp\htdocs\Annai_Barings\application\log2.txt', $type);
       $boots=array();


       $query=$this->Purchase->getall($type,$brand,$size);
       //$ty=count($query);
      //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $ty);
      if(count($query)>0)
      {
         foreach ($query as $row)
         {
              


    $boots[]=   '<table class="table table-bordered nowrap" cellspacing="0" width="100%">
       <tr>
                                <th>Quantity(In Stock)</th>
                                
                                <th>Sales Rate</th>
                                <th>Select Quantity</th>
                                <th></th>
                            </tr>

            <tr>
                                <td>'.$row->quantity.'</td>
                                
                                <td>'.$row->sales_rate.'</td>
                                 <td><input type="number" id="quant" value="0" name="quant"  class="no_border"  min="0" max='.$row->quantity.' style="width: 100%"></td>
                                 <td>
			         <input type="hidden" value="'.$row->stock_id.'" placeholder="Add to cart" class="btn btn-primary stockid" id="stockid" place data-toggle="tooltip" >
                                  <input type="submit" value="Add to cart"  class="btn btn-primary addcart" id="addcart" place data-toggle="tooltip" onclick="addcart()" data-placement="right">
			         </td>

                         </tr>
               </table>';


       }
      }
   else
       {
				 
            $boots[]='<table class="table table-bordered nowrap" cellspacing="0" width="100%">
						<tbody>
       <tr>
                                <th>Quantity(In Stock)</th>
                              
                                <th>Sales Rate</th>
                                <th></th>
                            </tr>
       <tr><td colspan=6 style="text-align:center"> No Record Found </td></tr>
			 </tbody>
          </table>';
       }
      }

         echo json_encode($boots);
         }
         function addcart()
         {
              if (isset($_REQUEST["stock_id"])){

            $stock_id=$_REQUEST["stock_id"];

            $stockid=$stock_id["id"];
            $quant=$stock_id["quant"];
            $query=$this->Purchase->check_cart($stockid);
           
            //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt',$quant);
           if ($query=="true")
           {
               $msg="false";
           }
           else 
           {
                $query=$this->Purchase->getstock($stockid);
               foreach ($query as $row)
               {
                   $rate=$quant * $row->discountprice;
                   $data=array(
                       'stock_id'=>$row->id,
                       'product_id'=>$row->product_id,
                       'supplier_id'=>$row->supplier_id,
                       'brand'=>$row->brand,
                       'size'=>$row->size,
                       'mrp'=>$row->mrp,
                       'discount_price'=>$row->discountprice,
                       'vat'=>$row->vat,
                       'mrp_total'=>$row->mrp_total,
                       'sales_rate'=>$row->sales_rate,
                       'quantity'=>$row->quantity,
                       'allocate_piece'=>$quant,
                       'allocate_price'=>$rate
                        
                       
                   );
                  
               }
               if ($data['quantity'] <= 0)
               {
                   $msg="fail";
               }
               else
               {
               $query=$this->Purchase->add_cart($data);          
               
               $msg="true";
               }
           
              }
               echo $msg;
         }
         }
         function deletecart()
         {
             if(isset($_REQUEST['cart_id']))
             {
                 $cart=$_REQUEST['cart_id'];
                 $cart_id=$cart['id'];
                 $query=$this->Purchase->deletecart($cart_id);
                 if($query=="true")
                 {
                     $msg="true";
                 }
                 
                echo $msg;
             }
                             

         }
         function addpiece()
         {
             if(isset($_REQUEST['allocate_data']))
             {
                 $all=$_REQUEST['allocate_data'];
                 $cartid=$all['id'];
                 $allocate_price=$all['allocate_price'];
                 $allocate_pieces=$all['allocate_pieces'];
                 $query=$this->Purchase->addpiece($cartid,$allocate_price,$allocate_pieces);
             }
         }
         function updatecart()
         {
             if (isset($_REQUEST["cart"])){

            $all=$_REQUEST["cart"];
            $cartdet=$all["cart_det"];
            $query=$this->Purchase->update_cart($cartdet); 
            if($query=="true")
            {
                $query=$this->Purchase->update_stock_quantity($cartdet);
                
                if($query=="true")
                {
                    $id_value=$this->Purchase->get_salesid();
                    $all=$this->Purchase->cart_all();
                    $insert_sale=$this->Purchase->sales_insert($all,$id_value);
                  if($insert_sale=="true")
                  {
                      $deletecart=$this->Purchase->delete_cart();
                      if($deletecart=="true")
                      {
                          $msg="true";
                      }
                  }
                    
                }
                echo $msg;
            }
            
             
         }

         }
        
  }
