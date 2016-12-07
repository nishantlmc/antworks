<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Antworks Money</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url();?>assets/css/build.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/mystyle.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/jquery-ui.css">

<? if($p2p=='P2P')
{?>

<link href="<?=base_url();?>assets/css/materialize.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/materialize.forms.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/jquery.datetimepicker.css" rel="stylesheet">
<? }?>

<script src="<?=base_url();?>assets/js/jquery-latest.min.js"></script>
</head>
<body>
<header class="header header-fixed header-1">
<div class="header-top">
  <div class="container">
    <div class="right-info pull-right">
      <ul class="list-inline">
        <li> <span> <i class="fa fa-envelope"></i> connect@antworksmoney.com </span> </li>
        <? if($this->session->userdata('borrower_state')){?>
        <li><span> <i class="fa fa-dashboard"></i><a href="<?=base_url();?>Home/borrower_dashboard/">Borrower Profile</a></span></li>
        <li> <span> <i class="fa fa-user"></i> Logged in as <b><?=ucwords($this->session->userdata('username'));?></b> | <a href="<?=base_url();?>Home/Logout/">Logout</a> </span> </li>
		<? }?>
        
      </ul>
    </div>
    <!-- /.right-info --> 
  </div>
</div>
<!-- /.header-top --> 