<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sree Annai</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     
      <a href="<?php echo base_url ('Home/Category'); ?>">Home</a>
      <a class="" href="<?php echo base_url ('Home/newadd'); ?>">Purchase</a>
      <a  href="<?php echo base_url ('Home/newupdate'); ?>">Update</a>
      
      <a href="<?php echo base_url ('sales/sales_index'); ?>">Sales</a>
      <a class="drop active" href="#">Report</a>
      <a class="dropdownhide drop " href="<?php echo base_url ('Report/purchase_report'); ?>">Purchase Report</a>
      <a class="dropdownhide drop" href="<?php echo base_url ('Report/sales_report'); ?>">Sales Report</a>
      <a class="dropdownhide drop active" href="<?php echo base_url ('Report/stock_report'); ?>">Stock Report</a>
      <a href="#">Logout</a>
  </div>
   <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;   Annai Bearings</span>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-lg-offset-4">
				<h1>Stock Report</h1>
			</div>
		</div>
		<div class="row">
			<table id="example" class="table table-bordered nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>


                                <th>Product</th>
                                <th>Supplier</th>
                                <th>Brand</th>
                             
                                <th>Size</th>
                                <th>MRP</th>
                                <th>Discount Price</th>
                                <th>Vat</th>
                                <th>MRP Total</th>
                                <th>Sales Rate</th>
                                <th>Quantity</th>
                              
                                <th>Date</th>
                                

		            </tr>
		        </thead>
		        <tbody>
                            <?php
                            if(isset($report))
                                
                            {
                                foreach ($report as $row) {
                                    $nice_date = date('d-m-Y', strtotime($row['created_at'] ));
                                  

		            echo '<tr>';
		                        echo "<td>" . $row['prod_name'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['brand'] . "</td>";
                                      
                                        echo "<td>" . $row['size'] . "</td>";
                                        echo "<td>" . $row['mrp'] . "</td>";
                                        echo "<td>" . $row['discountprice'] . "</td>";
                                        echo "<td>" . $row['vat'] . "</td>";
                                        echo "<td>" . $row['mrp_total'] . "</td>";
                                        echo "<td>" . $row['sales_rate'] . "</td>";
                                        echo "<td>" . $row['quantity'] . "</td>";
                                        
                                        echo "<td>" . $nice_date . "</td>";
                                        

		            echo '</tr>';
                                }
                            }
		            ?>
		        </tbody>
		    </table>
	   	</div>
 	</div>
    </div>
	<script src="<?php echo base_url() ?>assets/js/jquery-3.1.0.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#example').DataTable( {
                        "aoColumnDefs":[
                            {'bSortable':false,'aTargets':[0,1,2,3,4,5,6,7,8,9,10]}
                        ],
                        order:[],
                        columnDefs:[{orderable:false}],
		        responsive: {
		            details: {
		                display: $.fn.dataTable.Responsive.display.modal( {
		                    header: function ( row ) {
		                        var data = row.data();
		                        return 'Details for '+data[0]+' '+data[1];
		                    }
		                } ),
		                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
		                    tableClass: 'table'
		                } )
		            }
		        }
		    } );
		} );
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
