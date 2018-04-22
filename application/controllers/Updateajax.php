<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateajax extends CI_Controller {

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

           if (isset($_REQUEST["loadtype"])){



            $loadtype=$_REQUEST["loadtype"];

            $type=$loadtype["type_name"];
           // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $type);

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
      // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $size);
       $boots=array();


       $query=$this->Purchase->getall($type,$brand,$size);
       $v=count($query);
       write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $v);
       
     if($v>0)
     {
         
     
      
          
         foreach ($query as $row)
         {
            write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $row->name);
               $boots[]= '<option value="'.$row->id.'">'.$row->name.'</option>';
          

    $boots[]='<table class="table table-bordered nowrap" cellspacing="0" width="100%">
       <tr>
                                <th>Quantity</th>
                                <th>M.R.P</th>
                                 <th>Discountprice</th>
                                <th>M.R.P Total</th>
                                 <th>VAT</th>
                                <th>Sales Rate</th>
                            </tr>

            <tr>
                                <td>'.$row->quantity.'</td>
                                <td>'.$row->mrp.'</td>
                                 <td>'.$row->discountprice.'</td>
                                <td>'.$row->mrp_total.'</td>
                                <td>'.$row->vat.'</td>
                                <td>'.$row->sales_rate.'</td>

                         </tr>
               </table>';


       }
     }     
      
   else
       {
         // $v=$v+5;
          //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $v);
        
				 $boots[]= '<option value=""></option>';
            $boots[]='<table class="table table-bordered nowrap" cellspacing="0" width="100%">
						<tbody>
       <tr>
                                <th>Quantity</th>
                                <th>M.R.P</th>
                                 <th>Discountprice</th>
                                <th>M.R.P Total</th>
                                 <th>VAT</th>
                                <th>Sales Rate</th>
                            </tr>
       <tr><td colspan=6 style="text-align:center"> No Record Found </td></tr>
			 </tbody>
          </table>';
       }
       echo json_encode($boots);
      }
      

         
         }







  function update()
{
  if(isset($_REQUEST["prodall"]))
  {
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
    $purchase=$this->Purchase->purchaseadd($purchaseall);
    if($purchase=="true")
    {
        //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $salesrate_val);
      $updateprod=$this->Purchase->updatestock($purchaseall);
     // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $updateprod);
      if($updateprod=="true")
      {
          $message="success";
      }
      else
      {
          $message="fail";
      }
    }
    else
    {
      $message="fail";
    }


  echo $message;
  }

}


}
