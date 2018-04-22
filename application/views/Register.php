<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/form-elements.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<!--<link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
</head>
<body>
<!-- Top content -->
    <div class="top-content">	
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Registration Form</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Register to our site</h3>
                        		<p>Enter your details to register</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="fa fa-user-plus"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
		                    <form role="form" action="" method="post" class="register-form">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="form-username">Username</label>
		                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-password">Password</label>
		                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
		                        </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-cpassword">Confirm Password</label>
                                    <input type="password" name="form-cpassword" placeholder="Confirm Password..." class="form-password form-control" id="form-cpassword">
                                </div>
		                        <button type="submit" class="btn" id="rbtn">Sign Up!</button>
		                    </form>
	                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>Already a Member ?? Go Back</h3>
                    	<div class="social-login-buttons">
<!--                        <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                        		<i class="fa fa-facebook"></i> Facebook
                        	</a>
                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
                        		<i class="fa fa-twitter"></i> Twitter
                        	</a>
                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                        		<i class="fa fa-google-plus"></i> Google Plus
                        	</a> -->
                            <a class="btn btn-link-1 btn-link-1-facebook" href="index.html">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                    	</div>
                    </div>
                </div>
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
	<script src="<?php echo base_url() ?>assets/js/scriptregister.js"></script>
</body>
</html>
