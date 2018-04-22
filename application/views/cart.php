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
		<script src="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.min.js"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/cartstyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.min.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo2.png"> 
        <style>
            table{
            border: 1px solid #111; 
        }
            </style>
            
</head>
<body>
	<div class="container">
		<div class="row">
	        <div class="col-md-offset-4 col-lg-offset-4 col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-7 col-md-4 col-lg-4">
				<div id="logo" class="belt_fields cart_head">
					<span id="cart">
				  		<span class="cc animated bounceInDown">C</span>
                    	<span class="ca animated bounceInDown">a</span>
                    	<span class="cr animated bounceInDown">r</span>
                    	<span class="ct animated bounceInDown">t</span>
                	</span>
				</div>
	        </div>
    	</div>
	</div>
	    	<div class="container">
				<table id="example" class="table table-bordered nowrap tab_space" cellspacing="0" width="100%">
				    	
                                            <div class="row">

				        <tr>
			                <th>Product Name</th>
			                <th>Brand</th>
			                <th>Size</th>
			                <th>Discount Price</th>
			                <th>Quantity</th>
			                <th></th>
                                        <th></th>
                                         <th></th>
                                        <th></th>
				        </tr>
			        
			      
			       
                                        
                                     
                                        <?php
                                         $total=0;
                                        if(isset($cart))
                                           
                                       {
                                            $rowID="1";
                                 foreach ($cart as $row)
                                        {
                                     echo "<tr>";
                                     echo '<div class="prod">';
                                     
			                echo "<td>" . $row['prod_name'] . "</td>";
			                echo "<td>" . $row['brand'] . "</td>";
			                echo "<td>" . $row['size'] . "</td>";
			                echo "<td>" . $row['discount_price'] . "</td>";
                                       
			               echo '<td><input type="number" id="quant" value="'.$row['allocate_piece'].'" name="quant" onchange="findtotal('. $row['discount_price'] .',this,'.$row['cart_id'].')" class="no_border"  min="0" max='.$row["quantity"].' style="width: 100%"></td>';
                                       
                                       echo '<td><input type="text" class="carts_total" value="'.$row['allocate_price'].'" name="carts_total" id="carts_total'.$rowID.'" disabled="true"></td>';
                                       echo '<td><input type="hidden" class="cart_id" name="cart_id" id="cart_id" value="'.$row['cart_id'].'" disabled="true"></td>';
                                       echo '<td><input type="hidden" class="stock_id" name="stock_id" id="stock_id" value="'.$row['stock_id'].'" disabled="true"></td>';
                                       
			                echo '<td>
			              
			                <button type="button" class="btn btn-primary btnclss" onclick="deletecart('.$row['cart_id'].')"   id="cartvalue" data-toggle="tooltip" data-placement="right"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			                </td>';
                                        echo '</div>';
			           echo "</tr>";
                                   $rowID=$rowID+1;
                                   $total=$total + $row['allocate_price'] ;
                                   
                                        }
                                   }
                                        else {

       echo '<td colspan=10 style="text-align:center"> Cart is Empty </td>';

                                           }
			        ?>
			    </table>
          
	   		
   		<div class=" tab_space">
                        
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 dual_button">
                        <div class="col-xs-0 col-sm-0 col-md-7 col-lg-7">
                            
                        </div>
                    <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1">
                        <span class="total_class">
                            Total:
                        </span>
                    </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <input type="text" class="form-control" value='<?php echo $total ?>' id="cart_total" disabled="true">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="col-xs-1 col-sm-3 col-md-6 col-lg-8">
                            
                        </div>
   				<div class="col-xs-6 col-sm-3 col-lg-2 col-md-2">
   					<button type="button" class="btn btn-warning btnclss" onclick="location.href='<?php echo base_url("sales/sales_index") ?>';" >Continue Shopping</button>
   				</div>
   				<div class="col-xs-4 col-sm-3 col-lg-2 col-md-2">
   				<?php	echo '<button type="button" id="order" class="btn btn-success btnclss">Place Order</button>'; ?>
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
         <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.css">
         <script src="<?php echo base_url() ?>assets/plugins/HoldOn/HoldOn.min.js"></script>
	<script type="<?php echo base_url() ?>assets/js/"></script>
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
	<script src="<?php echo base_url() ?>assets/js/sweetalert.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/salesscript.js"></script>
          <script src="<?php echo base_url() ?>assets/js/base_url.js"></script>
</body>
</html>