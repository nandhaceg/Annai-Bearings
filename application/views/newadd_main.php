<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sree Annai</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/mainstyle.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/newupdatestyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/chosen/chosen.css"> 
    <script src="<?php echo base_url() ?>assets/plugins/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chosen/docsupport/prism.js"></script>

	<!-- Latest compiled and minified CSS -->
    
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png"> 
	<script src="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.min.js"></script> 
        
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.css">
       <style>
table, th, td {
    border: 1px solid black;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 3px;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     
      <a href="<?php echo base_url ('Home/Category'); ?>">Home</a>
      <a class="active" href="<?php echo base_url ('Home/newadd'); ?>">Purchase</a>
      <a  href="<?php echo base_url ('Home/newupdate'); ?>">Update</a>
      
      <a href="<?php echo base_url ('sales/sales_index'); ?>">Sales</a>
      <a class="drop " href="#">Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/purchase_report'); ?>">Purchase Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/sales_report'); ?>">Sales Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/stock_report'); ?>">Stock Report</a>
      <a href="#">Logout</a>
  </div>
    <div id="main">
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Annai Bearings</span>
	<div class="container">
		<div class="update_header">
			Purchase
		</div>
		<div class="row panel panel-default item">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
			
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="form-group">
					      	<label for="sel1">Select ItemType (select one):</label>
				      		<select id="type" name="type"  class="form-control data-required chosen-select" onchange="checktype()" required="true">
                                                    <option disabled="true" selected="true">Select One</option>
				        		<?php
				      		if(isset($prod))
				      		{
				      			foreach ($prod as $row)
				      			{
				      				echo '<option value="'.$row['id'].'">'.$row['prod_name'].'</option>';
				      			}
				      		}

				      		?>
				      		</select>
					    </div>
					</div>
			  	
				   <div id="brandall">
				    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="form-group">
					      	<label for="sel1">Select Type (select one):</label>
					      	<div id="brandonly">
						  		<select id="brand" name="brand" class="form-control chosen-select" required="true">
						    		<option disabled="true" selected="true">Select One</option>
						  		</select>

					  		</div>
					    </div>
					</div>
					</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    <div class="form-group">
					      	<label for="sel1">Select Supplier(select one)</label>
				      		<select class="form-control data-required  chosen-select" id="supplier" name="supplier" required="true">

				      		<?php

				      		if(isset($supplier))
				      		{
				      			foreach ($supplier as $row)
				      			{
				      				echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				      			}
				      		}

				      	   ?>
				        		
				      		</select>

				      	
					    </div>
				    </div>
					
  			
  			</div>
			<div id="belt" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
                            
                                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						
					    <div class="form-group">
						  	<label for="usr">Bill No:</label>
						  	<input type="text" class="form-control data-required" id="billno" name="billno" required="true">
						</div>
					</div>
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="form-group">
						  	<label for="usr">Size:</label>
						  	<input type="text" class="form-control data-required" id="size" name="size" required="true">
						</div>
					</div>
					
				
			</div>
  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
  				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">Quantity:</label>
					<input type="text" class="form-control data-required" id="quantity" name="quantity" required="true">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">M.R.P:</label>
					<input type="text" class="form-control data-required" id="mrp" name="mrp" required="true">
				</div>
  				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">Discount:</label>
					<input type="text" class="form-control data-required" id="discount" name="discount" required="true">
				</div>
  				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">VAT:</label>
					<input type="text" class="form-control data-required" id="vat" name="vat" required="true">
				</div>
  				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">M.R.P Total:</label>
					<input type="text" class="form-control data-required" id="mrptotal" name="mrptotal" required="true">
				</div>
  				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<label for="usr">Sales Rate:</label>
					<input type="text" class="form-control data-required" id="salesrate" name="salesrate" required="true">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					
					<button type="submit" class="btn btn-primary" id="addproduct" name="addproduct">submit</button>
				</div>
			</div>
		</div>
                     <div class="newitem">
                         <div class="container">
                                <div id="menuc">

                                </div>
                               <div id="all">

                               </div>
                         </div>
                         <br><br><br>
                         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group" id="buttonn">
                         
                         </div>
                     </div>
             
	</div>
	</div>
	<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.css">
          <script src="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.js"></script>
         
      
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script> 
	<script src="<?php echo base_url() ?>assets/js/purchasejs.js"></script>
    <script src="<?php echo base_url() ?>assets/js/base_url.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chosen/docsupport/prism.js"></script>  
    <script>
      	$("#type").chosen({no_results_text: "Oops, nothing found!"});    
        $("#brand").chosen({no_results_text: "Oops, nothing found!"});  	     
   	</script>
         <script type="text/javascript">
    	$(document).ready(function(){
			$(".dropdownhide").hide();

			$(".drop").hover(function () {
    			$(".dropdownhide").show();
			},
			function () {
    			$(".dropdownhide").hide();
			});
		});
   	</script>
   	
   	
	
</body>
</html>
