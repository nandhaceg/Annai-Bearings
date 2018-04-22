<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sree Annai</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/homestyle.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/offside.css">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/newupdatestyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css"> -->
<!--<link rel="stylesheet" type="text/css" href="css/mainstyle.css"> -->
<!--<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css"> -->
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     
      <a class="active" href="<?php echo base_url ('Home/Category'); ?>">Home</a>
      <a class="" href="<?php echo base_url ('Home/newadd'); ?>">Purchase</a>
      <a  href="<?php echo base_url ('Home/newupdate'); ?>">Update</a>
      
      <a href="<?php echo base_url ('sales/sales_index'); ?>">Sales</a>
      <a class="drop " href="#">Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/purchase_report'); ?>">Purchase Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/sales_report'); ?>">Sales Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/stock_report'); ?>">Stock Report</a>
      <a href="#">Logout</a>
  </div>
    <div class="container-fluid">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;   Annai Bearings</span>
<!--    <div class="row">
            <div class="çol-xs-12 col-sm-12 col-md-12 col-lg-12 text-center total_colour">
                <div class="row header_colour">
                    Sree Annai Bearings
                </div>
                <div class="row header_below_colour">
                    Pollachi
                </div>
            </div>
        </div> -->
       <!-- <div id="space">
            <div class="stars"></div>
            <div class="stars"></div>
            <div class="stars"></div>
            <div class="stars"></div>
            <div class="stars"></div>
        </div>-->
        <div class="çol-xs-12 col-sm-12 col-md-12 col-lg-12 text-center spacing">
            <div id="logo">
                <span id="sel">
                    <span class="ss animated bounceInDown">S</span>
                    <span class="se animated bounceInDown">e</span>
                    <span class="sl animated bounceInDown">l</span>
                    <span class="se animated bounceInDown">e</span>
                    <span class="sc animated bounceInDown">c</span>
                    <span class="st animated bounceInDown">t</span>
                </span>
                <span id="cat">
                    <span class="cc animated bounceInDown">C</span>
                    <span class="ca animated bounceInDown">a</span>
                    <span class="ct animated bounceInDown">t</span>
                    <span class="ce animated bounceInDown">e</span>
                    <span class="cg animated bounceInDown">g</span>
                    <span class="co animated bounceInDown">o</span>
                    <span class="cr animated bounceInDown">r</span>
                    <span class="cy animated bounceInDown">y</span>
                </span>
            </div>
        </div>
        <div class="çol-xs-12 col-sm-12 col-md-12 col-lg-12 crctspace">
            <div class="çol-xs-3 col-sm-3 col-md-3 col-lg-3 animated bounceInRight test fading" onclick="location.href='<?php echo base_url ('Home/Purchase_type'); ?>';">
                <div class="card">
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 card-image">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/shopping.png">
                        <!-- <span class="card-title">Stock</span> -->
                    </div>
                    <div class="card-content text-center">
                        <h4>Purchase</h4>
                        <p>Select this to enter to the stocks page.</p>
                    </div>
                    <div class="card-action text-center">
                      <a>Purchase</a>
                    </div>
                </div>
            </div>
            
            <div class="çol-xs-3 col-sm-3 col-md-3 col-lg-3 animated bounceInUp test fading" onclick="location.href='<?php echo base_url ('sales/sales_index'); ?>';">
                <div class="card">
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 card-image">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/customer.png">
                    </div>
                    <div class="card-content text-center">
                        <h4>Sales</h4>
                        <p>Select this to enter to the Sales page.</p>
                    </div>
                    <div class="card-action text-center">
                        <a>Sales</a>
                    </div>
                </div>
            </div>
            <div class="çol-xs-3 col-sm-3 col-md-3 col-lg-3 animated bounceInDown test fading" onclick="location.href='<?php echo base_url ('Report/purchase_report'); ?>';">
                <div class="card">
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 card-image">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/stock.png">
                    </div>
                    <div class="card-content text-center">
                        <h4>Report</h4>
                        <p>Select This To See Report.</p>
                    </div>
                    <div class="card-action text-center">
                        <a>Report</a>
                    </div>
                </div>
            </div>
            <div class="çol-xs-3 col-sm-3 col-md-3 col-lg-3 animated bounceInLeft test fading" onclick="location.href='<?php echo base_url ('Purchaseajax/addmore'); ?>';">
                <div class="card">
                    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 card-image">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/dealer.png">
                    </div>
                    <div class="card-content text-center">
                        <h4>Add More</h4>
                        <p>Add More.</p>
                    </div>
                    <div class="card-action text-center">
                        <a href="#" target="new_blank">Add New Items</a>
                    </div>
                </div>
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
	<script src="js/responsive.bootstrap.min.js"></script> -->
<!--<script src="js/jquery.backstretch.min.js"></script> -->
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
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
