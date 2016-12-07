<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets-admin/plugins/images/favicon.png">
<title>Antworks Money Admin - Login</title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url();?>assets-admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=base_url();?>assets-admin/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=base_url();?>assets-admin/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=base_url();?>assets-admin/css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal form-material" id="loginform" action="<?=base_url();?>login/ValidateUser/" method="post">
        <a href="javascript:void(0)" class="text-center db"><img src="<?=base_url();?>assets-admin/plugins/images/admin-logo-dark.png" alt="Home" /></a>  
        
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="user" required placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="pwd" required placeholder="Password">
          </div>
        </div>
        
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="LogIn">Log In</button>
          </div>
        </div>
      </form>
      <?=getNotificationHtml();?>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url();?>assets-admin/bootstrap/dist/js/bootstrap.min.js"></script>


<!--slimscroll JavaScript -->
<script src="<?=base_url();?>assets-admin/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url();?>assets-admin/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url();?>assets-admin/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
