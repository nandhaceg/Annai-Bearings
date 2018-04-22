<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
        function purchase_report()
        {
            $query=$this->Purchase->purchase_report();
            $purchase=array();
            foreach ($query as $row)
            {
                $data=array(
                    'prod_name'=>$row->prod_name,
                    'name'=>$row->name,
                    'brand'=>$row->brand,
                    'billno'=>$row->billno,
                    'size'=>$row->size,
                    'mrp'=>$row->mrp,
                    'discountprice'=>$row->discountprice,
                    'vat'=>$row->vat,
                    'mrp_total'=>$row->mrp_total,
                    'sales_rate'=>$row->sales_rate,
                    'quantity'=>$row->quantity,
                    'created_at'=>$row->created_at
                   
                );
                $purchase['report'][]=$data;
            }
            
            $this->load->view("Purchase_report",$purchase);
            
        }
        function sales_report()
        {
            $query=$this->Purchase->sales_report();
            $purchase=array();
            foreach ($query as $row)
            {
                $data=array(
                    'prod_name'=>$row->prod_name,
                    'name'=>$row->name,
                    'brand'=>$row->brand,
                    
                    'size'=>$row->size,
                    'mrp'=>$row->mrp,
                    'discountprice'=>$row->discount_price,
                    'vat'=>$row->vat,
                    'mrp_total'=>$row->mrp_total,
                    'sales_rate'=>$row->sales_rate,
                    'quantity'=>$row->quantity,
                      'rate'=>$row->rate,
                    'created_at'=>$row->created_at
                   
                );
                $purchase['report'][]=$data;
            }
            
            $this->load->view("Sales_report",$purchase);
            
        }
        function stock_report()
        {
            $query=$this->Purchase->stock_report();
            $purchase=array();
            foreach ($query as $row)
            {
                $data=array(
                    'prod_name'=>$row->prod_name,
                    'name'=>$row->name,
                    'brand'=>$row->brand,
                   
                    'size'=>$row->size,
                    'mrp'=>$row->mrp,
                    'discountprice'=>$row->discountprice,
                    'vat'=>$row->vat,
                    'mrp_total'=>$row->mrp_total,
                    'sales_rate'=>$row->sales_rate,
                    'quantity'=>$row->quantity,
                   
                    'created_at'=>$row->created_at
                   
                );
                $purchase['report'][]=$data;
            }
            
            $this->load->view("Stock_report",$purchase);
            
        }
}