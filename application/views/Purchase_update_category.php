<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sree Annai</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/mainanimation.css">
<!--<link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
    <style>

    </style>
</head>
<body>
    <div id="space">
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
        <div class="stars"></div>
    </div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="<?php echo base_url ('Home/Purchase_type'); ?>">Add New</a>
      <a class="active" href="<?php echo base_url ('Home/Category'); ?>">Home</a>
      <a href="<?php echo base_url ('Home/Belt_update'); ?>">Belt</a>
      <a href="<?php echo base_url ('Home/Bearings_update'); ?>">Baring</a>
      <a href="<?php echo base_url ('Home/Pully_update'); ?>">Pully</a>
      <a href="<?php echo base_url ('Home/index'); ?>">Logout</a>
    </div>
    <div id="main">
        <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Update</span>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header_space">
                Welcome to Sree Annai Bearings
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 second_header">
                Pollachi
            </div>
        </div>
    </div>
	<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/responsive.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.backstretch.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/mainscript.js"></script>
</body>
</html>
