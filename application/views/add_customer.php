<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sree Annai</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png"> 
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="<?php echo base_url ('Home/purchase_type'); ?>">Type</a>
      <a class="active" href="<?php echo base_url ('Home/addcustomer'); ?>">Customer</a>
      <a  href="<?php echo base_url ('Home/addproducts'); ?>">Product</a>
      <a href="<?php echo base_url ('Home/newadd'); ?>">Purchase</a>
      <a href="#">Logout</a>
    </div>
    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Add</span>
        <div class="row">
        	<div class="col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 panel panel-default spacing">
			  	<form>
			  		<div class="belt_fields">
			  			Add Customer
			  		</div>
					<div class="form-group">
					  	<label for="">Customer Name:</label>
					  	<input type="password" class="form-control" id="">
					</div>
					<button type="button" class="btn btn-primary">Submit</button>
  				</form>
        	</div>
        </div>
    </div>
	<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!--<script src="js/moment.min.js"></script>
	<script src="js/moment-with-locales.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.responsive.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/responsive.bootstrap.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script> -->
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
</body>
</html>
