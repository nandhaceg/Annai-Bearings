<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('Login');
	}
        function Register()
        {
            $this->load->view('Register');
        }
        function Category()
        {
            $this->load->view('Category');
        }
        function Report_category()
        {
            $this->load->view('Report_category');
        }
        function Belt()
        {
            $this->load->view("Belt_purchase");
        }
         function Bearings()
        {
            $this->load->view("Bearings_purchase");
        }
         function Pully()
        {
            $this->load->view("Pully_purchase");
        }
        function Purchase_category()
        {
            $this->load->view('Purchase_category');
        }
          function Purchase_type()
        {
            $this->load->view('Purchase_type');
        }
        function Purchase_update_category()
        {
            $this->load->view('newupdate_main');
        }
        function newadd()
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
            
           $query=$this->Purchase->getsupplier();
           $supdet=array();
           foreach ($query as $row)
           {
            $data=array(
            'id'=>$row->id,
            'name'=>$row->name
            );
            $supdet['supplier'][]=$data;

           }
           $dat=  array_merge($product,$supdet);
            $this->load->view('newadd_main',$dat);
        }
        function newupdate()
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
            
            
            
            $this->load->view("newupdate_main",$product);
        }
        function addcustomer()
        {
          $this->load->view("add_customer");
        }
        function addproducts()
        {
          $this->load->view("add_products");
        }
        function Belt_purchase()
        {
            if(isset($_POST['submit']))
            {

                $data=array(
                    'Belt_type'=>$this->input->POST('type'),
                    'Belt_price'=>$this->input->POST('price'),
                    'Belt_discountprice'=>$this->input->POST('dis_price'),
                    'Belt_quantity'=>$this->input->POST('quantity')
                );
               $query=$this->Purchase->Belt_purchase($data);
               if($query=="true")
               {
                $res="true";
                redirect('Home/Belt/?res='.$res);
               }
               else
               {
                 $res="false";
                redirect('Home/Belt/?res='.$res);
               }
            }
        }
        function Bearings_purchase()
        {
            if(isset($_POST['submit']))
            {
                $type1=$this->input->POST('type1');
                $type2=$this->input->POST('type2');


                $quantity=$this->input->POST('quantity');
                $data=array(
                    'Bearing_type1'=>$type1,
                    'Bearing_type2'=>$type2,
                    'Bearing_size'=>$this->input->POST('size'),
                    'Bearing_price'=>$this->input->POST('price'),
                    'Bearing_discountprice'=>$this->input->POST('dis_price'),
                    'Bearing_quantity'=>$this->input->POST('quantity')
                );
               $query=$this->Purchase->Bearings_purchase($data);
             if($query=="true")
               {
                $res="true";
                redirect('Home/Bearings/?res='.$res);
               }
               else
               {
                 $res="false";
                redirect('Home/Bearings/?res='.$res);
               }

            }
        }

       function Pully_purchase()
        {
            if(isset($_POST['submit']))
            {


                $data=array(
                    'Pully_type'=>$this->input->POST('type'),
                    'Pully_price'=>$this->input->POST('price'),
                    'Pully_discountprice'=>$this->input->POST('dis_price'),
                    'Pully_quantity'=>$this->input->POST('quantity')
                );
               $query=$this->Purchase->Pully_purchase($data);

                if($query=="true")
               {
               $res="true";
               redirect('Home/Pully/?res='.$res);
               }
               else
               {
               $res="false";
               redirect('Home/Pully/?res='.$res);
               }
            }
        }
        function Belt_purchase_report()
        {
            $query=$this->Purchase->Belt_purchase_report();
            $purchase=array();
            foreach ($query as $row)
            {
               $data=array(
                   'Belt_type'=>$row->Belt_type,
                   'Belt_price'=>$row->Belt_price,
                   'Belt_discountprice'=>$row->Belt_discountprice,
                   'Belt_quantity'=>$row->Belt_quantity

                   );
               $purchase['report'][]=$data;
            }


           $this->load->view('Belt_purchase_report',$purchase);
        }
           function Bearings_purchase_report()
        {
            $query=$this->Purchase->Bearings_purchase_report();
            $purchase=array();
            foreach ($query as $row)
            {
               $data=array(
                    'Bearing_type1'=>$row->Bearing_type1,
                    'Bearing_type2'=>$row->Bearing_type2,
                     'Bearing_size'=>$row->Bearing_size,
                    'Bearing_price'=>$row->Bearing_price,
                    'Bearing_discountprice'=>$row->Bearing_discountprice,
                    'Bearing_quantity'=>$row->Bearing_quantity

                   );
               $purchase['report'][]=$data;
            }


           $this->load->view('Bearings_purchase_report',$purchase);
        }
        function Pully_purchase_report()
        {
            $query=$this->Purchase->Pully_purchase_report();
            $purchase=array();
            foreach ($query as $row)
            {
               $data=array(
                   'Pully_type'=>$row->Pully_type,

                   'Pully_price'=>$row->Pully_price,
                   'Pully_discountprice'=>$row->Pully_discountprice,
                   'Pully_quantity'=>$row->Pully_quantity

                   );
               $purchase['report'][]=$data;
            }


           $this->load->view('Pully_purchase_report',$purchase);
        }
        function Belt_update()
        {
            $query=$this->Purchase->Belt_update();
            $Belttype=array();
            foreach ($query as $row)
            {
                $data=  array
                        (
                    'Purchase_id'=>$row->Purchase_id,
                    'Belt_type'=>$row->Belt_type
                        );
                $Belttype['type'][]=$data;
            }

            $this->load->view('Belt_update',$Belttype);
        }
        function Belt_update_find()
        {
             if(isset($_REQUEST["res"]))
            {

               $belttype=$_REQUEST["res"];
            }
            else{

            $belttype=$this->input->POST("Belt_type");
            }
            $query=$this->Purchase->Belt_update();
            $Belttype=array();
            foreach ($query as $row)
            {
                $data=  array
                        (
                    'Purchase_id'=>$row->Purchase_id,
                    'Belt_type'=>$row->Belt_type
                        );
                $Belttype['type'][]=$data;
            }
            $query=$this->Purchase->Belt_update_find($belttype);
            $beltdata=array();
            foreach ($query as $row)
            {
                $data= array
                        (
                    'Purchase_id'=>$row->Purchase_id,
                    'Belt_type'=>$row->Belt_type,
                    'Belt_price'=>$row->Belt_price,
                    'Belt_discountprice'=>$row->Belt_discountprice,
                    'Belt_quantity'=>$row->Belt_quantity

                      );
                $beltdata['detail']=$data;
            }

           $dat = array_merge($Belttype,$beltdata);
           $this->load->view('Belt_update',$dat);
        }
        function Belt_find_updated()
        {
            $beltype=$this->input->POST("pur_id");

            $data=array(
            'belttype'=>$beltype,
            'Belt_price'=>$this->input->POST("price"),
            'Belt_discountprice'=>$this->input->POST("discount_price"),
            'Belt_quantity'=>$this->input->POST("quantity")
            );
            $sql=$this->Purchase->Belt_find_updated($data);
            if($sql=="true")
            {
                //$this->Belt_update_find();
                $res=$beltype;
                 redirect('Home/Belt_update_find/?res='.$res);
            }
        else
            {
            $this->Belt_update();
            }
        }
        function Pully_update()
        {
            $query=$this->Purchase->Pully_update();
            $Pullytype=array();
            foreach ($query as $row)
            {
                $data=  array
                        (
                    'Purchase_id'=>$row->Purchase_id,
                    'Pully_type'=>$row->Pully_type
                        );
                $Pullytype['type'][]=$data;
            }

            $this->load->view('Pully_update',$Pullytype);
        }
        function Pully_update_find()
        {
            if(isset($_REQUEST["res"]))
            {

               $pullytype=$_REQUEST["res"];
            }
            else
            {
            $pullytype=$this->input->POST("Pully_type");
            }
            $query=$this->Purchase->Pully_update();
            $Pullytype=array();
            foreach ($query as $row)
            {
                $data=  array
                        (
                    'Purchase_id'=>$row->Purchase_id,
                    'Pully_type'=>$row->Pully_type
                        );
                $Pullytype['type'][]=$data;
            }
            $query=$this->Purchase->Pully_update_find($pullytype);
            $pullydata=array();
            foreach ($query as $row)
            {
                $data= array
                        (
                            'Purchase_id'=>$row->Purchase_id,
                    'Pully_type'=>$row->Pully_type,
                    'Pully_price'=>$row->Pully_price,
                    'Pully_discountprice'=>$row->Pully_discountprice,
                    'Pully_quantity'=>$row->Pully_quantity

                      );
                $pullydata['detail']=$data;
            }

           $dat = array_merge($Pullytype,$pullydata);
           $this->load->view('Pully_update',$dat);
        }
        function Pully_find_updated()
        {
             $pullytype=$this->input->POST("pur_id");
            $data=array(
            'pullytype'=>$pullytype,
            'Pully_price'=>$this->input->POST("price"),
            'Pully_discountprice'=>$this->input->POST("discount_price"),
            'Pully_quantity'=>$this->input->POST("quantity")
            );
            $sql=$this->Purchase->Pully_find_updated($data);
            if($sql=="true")
            {
                 $res=$pullytype;
                 redirect('Home/Pully_update_find/?res='.$res);
            }
        else
            {
            $this->Pully_update();
            }
        }
        function Bearings_update()
        {
                $query=$this->Purchase->Bearings_update();
                $bearingtype=array();
                foreach ($query as $row)
                {
                    $data=  array
                            (
                        'Bearing_type1'=>$row->Bearing_type1
                            );
                    $bearingtype['type'][]=$data;
                }
                $query=$this->Purchase->Bearings_update_brand();
                $bearingbrand=array();
                foreach ($query as $row)
                {
                    $data=  array
                            (
                        'Bearing_type2'=>$row->Bearing_type2
                            );
                    $bearingbrand['brand'][]=$data;
                }
								$query=$this->Purchase->Bearing_update_size();
                $bearingsize=array();
                foreach ($query as $row)
                {
                    $data=  array
                            (
                        'Bearing_size'=>$row->Bearing_size
                            );
                    $bearingsize['size'][]=$data;
                }
                $dat=array_merge($bearingtype,$bearingbrand,$bearingsize);
                $this->load->view('Bearings_update',$dat);
        }
        function Bearings_update_find()
        {
               if(isset($_REQUEST["res1"],$_REQUEST["res2"],$_REQUEST["res3"]))
               {
                   $type=$_REQUEST["res1"];
                   $brand=$_REQUEST["res2"];
									$size=$_REQUEST["res3"];

               }
            else
                {

                $type=$this->input->post('type');
                $brand=$this->input->post('brand');
								$size=$this->input->post('size');
            }
                $query=$this->Purchase->Bearings_update();
                $bearingtype=array();
                foreach ($query as $row)
                {
                    $data=  array
                            (
                        'Bearing_type1'=>$row->Bearing_type1
                            );
                    $bearingtype['type'][]=$data;
                }
                $query=$this->Purchase->Bearings_update_brand();
                $bearingbrand=array();
                foreach ($query as $row)
                {
                    $data=  array
                            (
                        'Bearing_type2'=>$row->Bearing_type2
                            );
                    $bearingbrand['brand'][]=$data;
                }
								$query=$this->Purchase->Bearing_update_size();
								$bearingsize=array();
								foreach ($query as $row)
								{
										$data=  array
														(
												'Bearing_size'=>$row->Bearing_size
														);
										$bearingsize['size'][]=$data;
								}
               $query=$this->Purchase->Bearings_update_find($type,$brand,$size);
               $bearingdetail=array();
               foreach ($query as $row)
               {
                   $data= array
                           (
                       'Bearing_type1'=>$row->Bearing_type1,
                       'Bearing_type2'=>$row->Bearing_type2,
											 'Bearing_size'=>$row->Bearing_size,
                       'Bearing_price'=>$row->Bearing_price,
                       'Bearing_discountprice'=>$row->Bearing_discountprice,
                       'Bearing_quantity'=>$row->Bearing_quantity

                           );

               $bearingdetail['detail']=$data;
               }
           $dat=array_merge($bearingtype,$bearingbrand,$bearingsize,$bearingdetail);
           $this->load->view('Bearings_update',$dat);
        }
        function Bearings_find_updated()
        {
            $type=$this->input->post('Btype');
            $brand=$this->input->post('Bbrand');
						$size=$this->input->post('Bsize');
            $data= array
                    (
                       'type'=>$type,
                       'brand'=>$brand,
											 'size'=>$size,
                       'Bearing_price'=>$this->input->post('price'),
                       'Bearing_discountprice'=>$this->input->post('discount_price'),
                       'Bearing_quantity'=>$this->input->post('quantity')
                    );
            $sql=$this->Purchase->Bearings_find_updated($data);
            if($sql=="true")
            {
                $res1=$type;
                $res2=$brand;
		$res3=$size;
                redirect('Home/Bearings_update_find/?res1='.$res1.'&res2='.$res2.'&res3='.$res3);

            }
            else
            {
              // redirect('Home/Bearings_update');

            }
        }
}
