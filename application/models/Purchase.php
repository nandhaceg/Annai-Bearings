<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Purchase extends CI_Model

{

     function __construct()

     {

          parent::__construct();

     }

     
     function purchaseadd($purchaseall)
     {
       
        $query= $this->db->insert('purchase', $purchaseall);
        return 'true';
          
          
           
     }
     function purchaseaddcart($purchaseall)
     {
       
        $query= $this->db->insert('purchase_cart', $purchaseall);
        return 'true';
          
          
           
     }
     function selectcart()
     {
          $sql="select p.prod_name,c.id,c.product_id,c.supplier_id,c.brand,c.size,c.mrp,c.discountprice,c.vat,c.mrp_total,c.sales_rate,"
                  . "c.quantity from purchase_cart c inner join product p on c.product_id=p.id ";
      $query=$this->db->query($sql);
      return $query->result();
     }
     function purchaseupdate($purchaseall)
     {
         $query= $this->db->insert('stock', $purchaseall);
         return 'true';
     }

     function getsupplier()
     {
      $sql="select * from supplier";
      $query=$this->db->query($sql);
       return $query->result();

     }
     function getproduct()
     {
         $sql="select * from product";
         $query=$this->db->query($sql);
         return $query->result();
         
     }
     function checkit($type_val,$brand_val,$size_val)
     {
         if($type_val=="3")
         {
              $sql="select * from stock where product_id='".$type_val."' AND size='".$size_val."'";
             $query=$this->db->query($sql);
             
         }
         else
         {
           
              $sql="select * from stock where brand='".$brand_val."' AND size='".$size_val."'";
             $query=$this->db->query($sql);
             
         }
          if ($query->num_rows() == "0")
         {
                        if($type_val=="3")
                    {
                         $sql="select * from purchase_cart where product_id='".$type_val."' AND size='".$size_val."'";
                        $query=$this->db->query($sql);

                    }
                    else
                    {

                         $sql="select * from purchase_cart where brand='".$brand_val."' AND size='".$size_val."'";
                        $query=$this->db->query($sql);

                    }
                    if ($query->num_rows() == "1")
                    {
                        //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', "true");
                        return 'true';
                    }
                    
                   
         }
         else
         {
             //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', "sathish");
             return 'false';
         }
     }
     function getsize($type)
     {
         $sql="select size from stock where product_id='".$type."' group by size";
         $query=$this->db->query($sql);
         return $query->result();
     }
     function getall($type,$brand,$size)
     {
         if($type=="1"||$type=="2")
         {
             $sql="select sup.name,sup.id,s.quantity,s.id AS stock_id,s.mrp,s.discountprice,s.mrp_total,s.vat,s.sales_rate from stock s inner join "
              . "supplier sup on s.supplier_id=sup.id where product_id='".$type."' AND brand='".$brand."' AND size='".$size."'";
         }
         else
         {
             $sql="select sup.name,sup.id,s.quantity,s.id AS stock_id,s.mrp,s.discountprice,s.vat,s.mrp_total,s.sales_rate from stock s inner join "
            . "supplier sup on s.supplier_id=sup.id where product_id='".$type."' AND size='".$size."'";
              
         }
         
         $query=$this->db->query($sql);
        
         return $query->result();
     
     }
    function updatestock($purchaseall)
     {
         
         $type=$purchaseall['product_id'];
         $brand_val=$purchaseall['brand'];
         $size_val=$purchaseall['size'];
        $quant=$purchaseall['quantity'];
         $mrp_rate=$purchaseall['mrp'];
         $discount=$purchaseall['discountprice'];
         $vat_rate=$purchaseall['vat'];
          $mrp_total_rate=$purchaseall['mrp_total'];
         $sales=$purchaseall['sales_rate'];
         
         if($type=="1"||$type=="2")
         {
         //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $sales);
         $sql="UPDATE stock SET quantity=quantity + '".$quant."',mrp='".$mrp_rate."',discountprice='".$discount."',vat='".$vat_rate."',mrp_total='".$mrp_total_rate."',sales_rate='".$sales."' where product_id='".$type."' AND brand='".$brand_val."' AND size='".$size_val."'";
         $query=$this->db->query($sql);
         return 'true';
         }
          else
          {
               $sql="UPDATE stock SET quantity=quantity + '".$quant."',mrp='".$mrp_rate."',discountprice='".$discount."',". "vat='".$vat_rate."',mrp_total='".$mrp_total_rate."',sales_rate='".$sales."' ". "where product_id='".$type."' AND size='".$size_val."'";
               $query=$this->db->query($sql); 
               return 'true';
               
          }
     }
      function check_cart($stockid)
 {
      $sql="select * from cart where stock_id='".$stockid."'";
      $query=$this->db->query($sql);
      if ($query->num_rows()!= "0")
         {
            return 'true';
         }
         else
         {
              
              return 'false';
         }
 }
 function getstock($stockid)
 {
     $sql="select * from stock where id='".$stockid."'";
      $query=$this->db->query($sql);
       return $query->result();
 }
 function add_cart($data)
 {
     $query=$this->db->insert("cart",$data);
     return 'true';
 }
 function cartcount()
 {
     $sql="select * from cart";
     $query=$this->db->query($sql);
     //write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $query);
     return $query->result();
 }
 function getcartvalue()
 {
      $sql="select p.prod_name,c.cart_id,c.stock_id,c.product_id,c.supplier_id,c.brand,c.size,c.mrp,c.discount_price,c.vat,c.mrp_total,c.sales_rate,c.quantity,c.allocate_price,c.allocate_piece from cart c inner join product p "
              . "on c.product_id=p.id ";
      $query=$this->db->query($sql);
      return $query->result();
      
 }
 function deletecart($cart_id)
 {
     $sql="delete from cart where cart_id='".$cart_id."'";
     $query=$this->db->query($sql);
     return 'true';
 }
 function update_cart($cartdet)
 {
     foreach ($cartdet as $row)
               {
          $sql="UPDATE cart SET quantity='".$row['quant']."',rate='".$row['amount']."'where cart_id='".$row['cart_id']."'";
               $query=$this->db->query($sql); 
             }
             return 'true';
 }
    

function update_stock_quantity($cartdet)
{
    foreach ($cartdet as $row)
               {
          $sql="UPDATE stock SET quantity=quantity -'".$row['quant']."' where id='".$row['stock_id']."'";
               $query=$this->db->query($sql); 
             }
             return 'true';
}
function cart_all()
{
    $sql="select * from cart";
    $query=$this->db->query($sql);
    return $query->result();
}
function get_salesid()
{
    $sql="SELECT MAX(sales_id) AS last_id from sales LIMIT 1 ";
    $query=$this->db->query($sql); 
    return $query->row()->last_id;
}
function sales_insert($all,$id_value)
{
    print_r($all, TRUE);
$id_value=$id_value+1;
    foreach ($all as $row)
               {
       // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $row['product_id']);
      $sql="INSERT INTO `sales`(sales_id,product_id,supplier_id,brand,size,mrp,discount_price,vat,mrp_total,sales_rate,quantity,rate) VALUES "
                 . "('$id_value','".$row->product_id."','".$row->supplier_id."','".$row->brand."','".$row->size."','".$row->mrp."','".$row->discount_price."',"
                     . "'".$row->vat."','".$row->mrp_total."','".$row->sales_rate."','".$row->quantity."','".$row->rate."')";
          $query=$this->db->query($sql); 
          $id_value= $this->get_salesid();
             }
             return 'true';
}
function delete_cart()
{
    $sql="truncate cart";
    $query=$this->db->query($sql);
    return 'true';
    
}
function purchase_report()
{
    $sql="select p.prod_name,su.name,c.brand,c.billno,c.size,c.mrp,c.discountprice,c.vat,c.mrp_total,c.sales_rate,c.quantity,c.created_at from purchase c"
            . " inner join product p on c.product_id=p.id inner join supplier su on c.supplier_id=su.id ORDER BY Purchase_id DESC";
    $query=$this->db->query($sql);
    return $query->result();
}
function sales_report()
{
    $sql="select p.prod_name,su.name,c.brand,c.size,c.mrp,c.discount_price,c.vat,c.mrp_total,c.sales_rate,c.quantity,c.rate,c.created_at from sales c"
            . " inner join product p on c.product_id=p.id inner join supplier su on c.supplier_id=su.id ORDER BY c.id DESC ";
    $query=$this->db->query($sql);
    return $query->result();
}
function stock_report()
{
    $sql="select p.prod_name,su.name,c.brand,c.billno,c.size,c.mrp,c.discountprice,c.vat,c.mrp_total,c.sales_rate,c.quantity,c.created_at from stock c"
            . " inner join product p on c.product_id=p.id inner join supplier su on c.supplier_id=su.id
            ORDER BY c.id DESC";
    $query=$this->db->query($sql);
    return $query->result();
}
function addpiece($cartid,$allocate_price,$allocate_pieces)
{
   $sql="UPDATE cart SET allocate_piece='".$allocate_pieces."',allocate_price='".$allocate_price."' where cart_id='".$cartid."'";
               $query=$this->db->query($sql);  
}
function delete_purchase_cart($id)
{
     $sql="delete from purchase_cart where id='".$id."'";
     $query=$this->db->query($sql);
     return 'true';
}
function purchase_cart_all()
{
    $sql="select * from purchase_cart";
    $query=$this->db->query($sql);
    return $query->result();  
}
function add_purchae($all)
{
     print_r($all, TRUE);

    foreach ($all as $row)
               {
       // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $row['product_id']);
      $sql="INSERT INTO `purchase`(product_id,supplier_id,brand,billno,size,mrp,discountprice,vat,mrp_total,sales_rate,quantity) VALUES "
                 . "('".$row->product_id."','".$row->supplier_id."','".$row->brand."','".$row->billno."','".$row->size."','".$row->mrp."','".$row->discountprice."',"
                     . "'".$row->vat."','".$row->mrp_total."','".$row->sales_rate."','".$row->quantity."')";
          $query=$this->db->query($sql); 
         // $id_value= $this->get_salesid();
             }
             return 'true';
}
function add_stock($all)
{
    print_r($all, TRUE);

    foreach ($all as $row)
               {
       // write_file('C:\xampp\htdocs\Annai_Barings\application\log.txt', $row['product_id']);
      $sql="INSERT INTO `stock`(product_id,supplier_id,brand,billno,size,mrp,discountprice,vat,mrp_total,sales_rate,quantity) VALUES "
                 . "('".$row->product_id."','".$row->supplier_id."','".$row->brand."','".$row->billno."','".$row->size."','".$row->mrp."','".$row->discountprice."',"
                     . "'".$row->vat."','".$row->mrp_total."','".$row->sales_rate."','".$row->quantity."')";
          $query=$this->db->query($sql); 
         // $id_value= $this->get_salesid();
             }
             return 'true';
}
function trunc_cart()
{
     $sql="truncate purchase_cart";
     $query=$this->db->query($sql);
     return 'true';
}
function getspecifytype($type)
{
    $sql="select * from product_type where product_id='".$type."'";
    $query=$this->db->query($sql);
    return $query->result();
    
}
function addbrand($data)
{
    $query=$this->db->insert('product_type',$data);
    return 'true';
}
function addsupplier($data)
{
    $query=$this->db->insert('supplier',$data);
    return 'true';
}

}