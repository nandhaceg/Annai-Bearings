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
	<!-- <link rel="stylesheet" type="text/css" href="css/mainstyle.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/newupdatestyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png">
	<script src="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.min.js"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/salesstyle.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     
      <a href="<?php echo base_url ('Home/Category'); ?>">Home</a>
      <a class="" href="<?php echo base_url ('Home/newadd'); ?>">Purchase</a>
      <a  href="<?php echo base_url ('Home/newupdate'); ?>">Update</a>
      
      <a class="active" href="<?php echo base_url ('sales/sales_index'); ?>">Sales</a>
      <a class="drop " href="#">Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/purchase_report'); ?>">Purchase Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/sales_report'); ?>">Sales Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/stock_report'); ?>">Stock Report</a>
      <a href="#">Logout</a>
  </div>
    <div id="main">
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Annai Bearings</span>
	<div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-offset-7 col-sm-offset-9 col-md-offset-9 col-lg-offset-9 col-xs-1 col-sm-1 col-md-1 col-lg-1 cart_size ">
                Cart: <?php echo $count ?>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2" onclick="location.href='<?php echo base_url ('sales/cart'); ?>';">
	             <img class="cartimgclass img-responsive" src="<?php echo base_url() ?>assets/images/shopping_cart.png">
                    
	    </div>
        </div>
		<div class="update_header">
			Sales Form
		</div>
		<div class="row panel panel-default item">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">
                                     
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="form-group">
					      	<label for="sel1">Select ItemType (select one):</label>
				      		<select id="type" name="type" class="form-control data-required" onchange="checktype()" required="true">
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
					  		<select id="brand" name="brand" class="form-control" required="true">

					  		</select>
					    </div>
					</div>
					</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                                                    <div class="form-group">
						  	<label for="usr">Size:</label>
						  	<select  class="form-control data-required" id="size" name="size" required="true" onchange="getall()">
                                                        </select>
						</div>
				    </div>


  			</div>
			<div id="belt" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item">

					
					

			</div>
  		
			</div>


		</div>
            <div class="container">
            <div id="getall">



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
	<script src="js/responsive.bootstrap.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script> -->
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
	<script src="<?php echo base_url() ?>assets/js/salesscript.js"></script>
        <script src="<?php echo base_url() ?>assets/js/base_url.js"></script>
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
