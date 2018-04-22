<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchaseajax extends CI_Controller {

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



     function checkbrand()

     {
          
           if (isset($_REQUEST["loadtype"]))
               {
           $loadtype=$_REQUEST["loadtype"];
           $type=$loadtype["type_name"];
           $query=$this->Purchase->getspecifytype($type);
           // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $type);
           
             
             $html='<select id="brand" name="brand" class="form-control chosen-select" required="true">';
             $html.='<option disabled selected>Select Brand</option>';
            
              if(count($query)>0)
              {
                  foreach ($query as $row)
                  {
            
                $html.='<option value="'.$row->type.'" >'.$row->type.'</option>'; 
                  }
                    
              }
              $html.='</select>';
            
             
             
          
          echo $html;
           
     }
}

function purchase()
{
    
                  
  if(isset($_REQUEST["prodall"]))
  {
      
     //HoldOn.close();           
    $prodall=$_REQUEST["prodall"];
    $getprod=$prodall["products"];
    
    //$productsArray=json_decode($prodall,true);
    foreach($getprod as $all)
    {
      $type_val=$all["type_val"];
      $brand_val=$all["brand_val"];
      $supplier_val=$all["supplier_val"];
      $size_val=$all["size_val"];
      $billno_val=$all["billno_val"];
      $quantity_val=$all["quantity_val"];
      $mrp_val=$all["mrp_val"];
      $discount_val=$all["discount_val"];
      $vat_val=$all["vat_val"];
      $mrptotal_val=$all["mrptotal_val"];
      $salesrate_val=$all["salesrate_val"];
    }
    $query=$this->Purchase->checkit($type_val,$brand_val,$size_val);
    //write_file('C:\xampp\htdocs\Annai_Barings\application\log1.txt', $query);
    if($query=="false")
    {
         //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', "false");
        $message="false";
        echo $message;
    }
    else if($query=="true")
    {
         ///write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', "true");
        $message="true";
        echo $message;
    }
 else {
        
    
    $purchaseall=array(
        'product_id'=>$type_val,
       'supplier_id'=>$supplier_val,
      'brand'=>$brand_val,
      'size'=>$size_val,
      'billno'=>$billno_val,
      'quantity'=>$quantity_val,
      'mrp'=>$mrp_val,
      'discountprice'=>$discount_val,
      'vat'=>$vat_val,
      'mrp_total'=>$mrptotal_val,
      'sales_rate'=>$salesrate_val
      );
    $purchase=$this->Purchase->purchaseaddcart($purchaseall);
    
    if($purchase=="true")
    {
      $query=$this->Purchase->selectcart();
      $v=count($query);
      if($v>0)
      {
         
           
            // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt'$row->name);
            $boots[]='<table id="example" class="table table-bordered nowrap tab_space" cellspacing="0" width="100%">
                  
                           <tr>
                                <th width="25%">Product Name</th>
                                <th width="20%">Brand</th>
                                <th width="15%">Size</th>
                                <th width="15%">Sales Rate(one piece)</th>
                                <th width="15%">Quantity</th>
                                <th width="15%"> </th>
                            </tr>
                            </table>';
                      foreach ($query as $row)
         {        
                          $boots[]='<table id="example" class="table table-bordered nowrap tab_space"  width="100%"><tr>
                                <td width="25%">'.$row->prod_name.'</td>
                                <td width="20%">'.$row->brand.'</td>
                                 <td width="15%">'.$row->size.'</td>
                                <td width="15%">'.$row->sales_rate.'</td>
                                <td width="15%">'.$row->quantity.'</td>
                                
                                
                                 <td width="15%">
			         <input type="hidden"  placeholder="Add to cart" class="btn btn-primary stockid" id="stockid" place data-toggle="tooltip" >
                                  <input type="submit" value="Remove"  class="btn btn-primary addcart" id="addcart" place data-toggle="tooltip" onclick="delete_purchase_cart('.$row->id.')"  data-placement="right">
			         </td>

                         </tr>
               </table>';

       }
       $boots[]='<input type="submit" class="btn btn-primary" id="addpurchaseall" name="addproduct" value="Place Order" onclick="update_purchase()">';
      }
      
    }
    $html[]=$boots;
   echo json_encode($html); 
  }
  
  }
  
}
function delete_purchase_cart()
{
    if (isset($_REQUEST["id_value"]))
         {
     $id_value=$_REQUEST['id_value'];
     $id=$id_value['id'];
    $query=$this->Purchase->delete_purchase_cart($id);
     if($query == "true")
     
    {
      $query=$this->Purchase->selectcart();
      $v=count($query);
      if($v>=0)
      {
             
           
            // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $row->name);
             $boots[]='<table id="example" class="table table-bordered nowrap tab_space" cellspacing="0" width="100%">
                  
                          <tr>
                                <th width="25%">Product Name</th>
                                <th width="20%">Brand</th>
                                <th width="15%">Size</th>
                                <th width="15%">Sales Rate(one piece)</th>
                                <th width="15%">Quantity</th>
                                <th width="15%"> </th>
                            </tr>
                            </table>';
                      foreach ($query as $row)
         {        
                          $boots[]='<table id="example" class="table table-bordered nowrap tab_space"  width="100%"><tr>
                                <td width="25%">'.$row->prod_name.'</td>
                                <td width="20%">'.$row->brand.'</td>
                                 <td width="15%">'.$row->size.'</td>
                                <td width="15%">'.$row->sales_rate.'</td>
                                <td width="15%">'.$row->quantity.'</td>
                                
                                
                                 <td width="15%">
			         <input type="hidden"  placeholder="Add to cart" class="btn btn-primary stockid" id="stockid" place data-toggle="tooltip" >
                                  <input type="submit" value="Remove"  class="btn btn-primary addcart" id="addcart" place data-toggle="tooltip" onclick="delete_purchase_cart('.$row->id.')"  data-placement="right">
			         </td>

                         </tr>
               </table>';

       }
       $boots[]='<input type="submit" class="btn btn-primary" id="addpurchaseall" name="addproduct" value="Place Order" onclick="update_purchase()">';
      }
      
      $html[]=$boots;
      echo json_encode($html); 
    }
     
}
}
function update_purchase()
{
    $all=$this->Purchase->purchase_cart_all();
    $insert_purchase=$this->Purchase->add_purchae($all);
    if($insert_purchase == "true")
    {
        $insert_stock=$this->Purchase->add_stock($all);
        if($insert_stock == "true")
        {
             $trun_purchase_cart=$this->Purchase->trunc_cart();
                if($trun_purchase_cart == "true")
                {
                    $msg="true";
                }
        }
    }
    echo $msg;
}
function addmore()
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
    $this->load->view("addnewitems",$product);
}
function addsupplier()
{
    $data=array(
                    'name'=>$this->input->POST('supplier_name')
                );
               $query=$this->Purchase->addsupplier($data);
               if($query=="true")
               {
                redirect('Purchaseajax/addmore');
               }  
}
function addbrand()
{
    $data=array(
                    'product_id'=>$this->input->POST('type'),
                    'type'=>$this->input->POST('brand')
                );
               $query=$this->Purchase->addbrand($data);
               if($query=="true")
               {
                redirect('Purchaseajax/addmore');
               }
}
}