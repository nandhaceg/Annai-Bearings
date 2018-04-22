
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
         <link rel="shortcut icon" href="../favicon.ico"> 
       
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icon.css">
	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.css">-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/form-elements.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
        <script src="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/sweetalert2-master/dist/sweetalert2.css">
         
        
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
                        <h1><strong>Sree Annai Bearings</strong></h1>
                        <div class="description">
                        	<p>
                            	Pollachi. 
                        	</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Login to our site</h3>
                        		<p>Enter your username and password to log on:</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="fa fa-sign-in"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
		                    <form role="form" action="<?php echo base_url ('Home/Category'); ?>" method="post" onsubmit="return(validate());" class="login-form">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="form-username">Username</label>
                                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" required="true">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-password">Password</label>
                                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" required="true">
		                        </div>
		                        <button type="submit" class="btn" id="sbtn">Sign in!</button>
		                    </form>
	                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                    
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
                           
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo base_url() ?>assets/js/jquery-1.12.3.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<!--<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/moment-with-locales.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>-->
	<!--<script src="<?php echo base_url() ?>assets/js/responsive.bootstrap.min.js"></script>-->
	<script src="<?php echo base_url() ?>assets/js/jquery.backstretch.min.js"></script>
	<!--<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>-->
        <script src="<?php echo base_url() ?>assets/js/Sweetvalidation.js" type="text/javascript"></script> 
         <script type="text/javascript">
        history.pushState(null, null, '<?php echo $_SERVER["REQUEST_URI"]; ?>');
        window.addEventListener('popstate', function(event) {
            window.location.assign("<?php echo base_url() ?>Home/index");
        });
    </script>
</body>
</html>
