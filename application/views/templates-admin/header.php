<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets-admin/plugins/images/favicon.png">
<title>Antworks Money Admin</title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url();?>assets-admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Footable CSS -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
<link href="<?=base_url();?>assets-admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<!-- Dropzone css -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
<!-- toast CSS -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=base_url();?>assets-admin/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=base_url();?>assets-admin/css/style.css" rel="stylesheet">
<link href="<?=base_url();?>assets-admin/css/mystyle.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=base_url();?>assets-admin/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- Date picker plugins css -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<!--alerts CSS -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets-admin/css/jquery-ui.css"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- jQuery -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body class="fix-header">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
  <div class="navbar-header"> 
    
    <!-- .Logo -->
    <ul class="nav navbar-top-links navbar-left hidden-xs">
      <li><a href="<?=base_url();?>login/" class="logotext"><!--This is logo text--><img src="<?=base_url();?>assets-admin/plugins/images/admin-logo.png" alt="home" class="light-logo" alt="home" /></a></li>
    </ul>
    <!-- /.Logo --> 
    
    <!-- top right panel -->
    <ul class="nav navbar-top-links navbar-right pull-right">
      <? //print_r($notification);?>
      <!-- .dropdown -->
      <!--<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu mailbox animated bounceInDown">
          <li>
            <div class="drop-title">You have 4 new messages</div>
          </li>
          <li>
          
            <div class="message-center"> <a href="#">
              
              <? if($notification){foreach($notification as $nf){
					$heading = "";
					if($nf['activity']=="Add"){$heading = "New member added!";}
					if($nf['activity']=="Update"){$heading = "Member details updated!";}
					if($nf['activity']=="Delete"){$heading = "Member deleted!";}?>
              <div class="mail-contnet">
                <h5>Pavan kumar</h5>
                <span class="mail-desc"><?=$heading?></span> <span class="time">9:30 AM</span> </div>
              </a> <a href="#">
              <? }}?></div>
          </li>
          <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
        </ul>
      </li>-->
      <!-- /.dropdown --> 
      
      <!-- .dropdown -->
     	<? 	if($borrowers_details['profilepic'])
			{
				$user_image = "uploads/users/".$this->session->userdata('profilepic');
			}
			else
			{
				$user_image = "assets/img/user.png";
			}
		?>
      <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?=base_url().$user_image;?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('user_name');?></b> </a>
        <ul class="dropdown-menu dropdown-user animated flipInY">
          <li><a href="<?=base_url().'management/profile/'.$this->session->userdata('user_id');?>"><i class="ti-user"></i> My Profile</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="<?=base_url();?>login/logout/"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
        <!-- /.dropdown-user --> 
      </li>
      <!-- /.dropdown --> 
    </ul>
    <!-- top right panel --> 
    
  </div>
</nav>
<!-- End Top Navigation --> 
