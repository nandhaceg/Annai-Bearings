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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/addmoreitems.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.css">
	<script src="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.min.js"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.css">
</head>
<body>
    <div class="container top_spacing">
        <div class="col-sm-11 row">
        	<div class="col-sm-offset-3 col-sm-7 panel panel-default">
			  	
			  		<div class="header">
			  			Add More
			  		</div>
			  		<div class="supplier">
			  			Add Supplier
			  		</div>
                     <form role="form" action="<?php echo base_url ('Purchaseajax/addsupplier'); ?>" method="POST" class="login-form">
	  				<div class="form-group">
						<label for="supplier">Supplier Name:</label>
						<input type="text" class="form-control" id="supplier_name" name="supplier_name" >
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Supplier</button>
					</div>
                     </form> 
					<hr/>
                                        
                                        
                                      
                                        
					<div class="brand">
			  			Add Brand
			  		</div>
				       
                                <form role="form" action="<?php echo base_url ('Purchaseajax/addbrand'); ?>" method="POST" class="login-form">
                                    <div class="form-group">
				      	<label for="sel1">Item Type (select one):</label>
                                            <select id="type" name="type" class="form-control data-required" required="true">
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
				      	<br>
				    </div>
					<div class="form-group">
					  	<label for="usr">Brand:</label>
                                                <input type="text" class="form-control" id="brand" name="brand" required="true">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Brand</button>
                                       
					</div>
                                  </form>
  				</form>
        	</div>
        </div>
    </div>
         <script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	
         <script src="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.js"></script>
	 <script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
	 <script src="<?php echo base_url() ?>assets/js/addmoreitems.js"></script>
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
