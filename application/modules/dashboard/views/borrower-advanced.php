<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets-admin/plugins/images/favicon.png">
<title>Antworks Money</title>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url();?>assets-admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Wizard CSS -->
<link href="<?=base_url();?>assets-admin/plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=base_url();?>assets-admin/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=base_url();?>assets-admin/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=base_url();?>assets-admin/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <nav class="navbar navbar-default navbar-static-top m-b-0">
  <div class="navbar-header"> 
    
    <!-- .Logo -->
    <ul class="nav navbar-top-links navbar-left hidden-xs">
      <li><a href="<?=base_url();?>login/" class="logotext"><!--This is logo text--><img src="<?=base_url();?>assets-admin/plugins/images/admin-logo.png" alt="home" class="light-logo" alt="home" /></a></li>
    </ul>
    <!-- /.Logo --> 
    
    <!-- top right panel -->
    <ul class="nav navbar-top-links navbar-right pull-right">
      
      <!-- .dropdown -->
      <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
        <ul class="dropdown-menu mailbox animated bounceInDown">
          <li>
            <div class="drop-title">You have 4 new messages</div>
          </li>
          <li>
            <div class="message-center"> <a href="#">
              <div class="user-img"> <img src="<?=base_url();?>assets-admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Pavan kumar</h5>
                <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
              </a> <a href="#">
              <div class="user-img"> <img src="<?=base_url();?>assets-admin/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Sonu Nigam</h5>
                <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
              </a> <a href="#">
              <div class="user-img"> <img src="<?=base_url();?>assets-admin/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Arijit Sinh</h5>
                <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
              </a> <a href="#">
              <div class="user-img"> <img src="<?=base_url();?>assets-admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
              <div class="mail-contnet">
                <h5>Pavan kumar</h5>
                <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
              </a> </div>
          </li>
          <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
        </ul>
        <!-- /.dropdown-messages --> 
      </li>
      <!-- /.dropdown --> 
      
      <!-- .dropdown -->
      <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?=base_url();?>uploads/users/john.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('user_name');?></b> </a>
        <ul class="dropdown-menu dropdown-user animated flipInY">
          <!--<li><a href="#"><i class="ti-user"></i> My Profile</a></li>
          <li role="separator" class="divider"></li>-->
          <li><a href="<?=base_url();?>login/logout/"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
        <!-- /.dropdown-user --> 
      </li>
      <!-- /.dropdown --> 
    </ul>
    <!-- top right panel --> 
    
  </div>
</nav>
  <!-- Page Content -->
  <div id="page-wrapper" style="margin:0px">
    <div class="container-fluid">
      <!-- .row -->
      <div class="row bg-title" style="background:url(<?=base_url();?>assets-admin/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
          <h4 class="page-title">Borrower Details</h4>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
            <h3 class="box-title m-b-0">Advanced Information</h3>
            <p class="text-muted m-b-30 font-13"> Please fill the following information correctly to switch to your dashboard.</p>
                 <div id="exampleValidator" class="wizard">
                    <ul class="wizard-steps" role="tablist">
                        <li class="div1 active current">
                            <h4><span><i class="ti-user"></i></span>Personal Details</h4>
                        </li>
                        <li class="div2 disabled">
                            <h4><span><i class="ti-credit-card"></i></span>Residental Details</h4>
                        </li>
                        <li class="div3 disabled">
                            <h4><span><i class="ti-check"></i></span>Employment Details</h4>
                        </li>
                    </ul>
                   
                    <form id="validation" class="form-horizontal" method="post" action="<?=base_url();?>dashboard/borrower_advanced_info_updated/">
                        <div class="wizard-content">
                            <div id="div1">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Full Name</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="fullname" value="<?=$userdetails['fullname']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Username</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" value="<?=$userdetails['username']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Email</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="email" value="<?=$userdetails['email']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Mobile</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="mobile" value="<?=$userdetails['mobile']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Date of Birth</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="dob" value="<?=$userdetails['dob']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Gender</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="gender" id="gender" />
                                        	<option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    
                                    <span class="help-block with-errors"><ul class="list-unstyled"><li id="gender-error" class="errors-class"></li></ul></span> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">PAN Number</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="pan" id="pan" maxlength="10" style="text-transform:uppercase" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="pan-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Aadhaar Number</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="aadhaar" id="aadhaar" maxlength="12" onkeypress="return isNumberKey(event);" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="aadhaar-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="wizard-buttons">
                                    <a id="next1" onClick="return validate_advanced1()">Next</a>
                                </div>
                            </div>
                            <div id="div2">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Residence Type</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="residence_type" id="residence_type" />
                                        	<option value="">Select</option>
                                            <option value="Rented">Rented</option>
                                            <option value="Own">Own</option>
                                        </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="residence_type-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">City</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="city" value="<?=$userdetails['city']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">State</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="state" id="state" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="state-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Address</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="address" id="address" value="<?=$userdetails['address']?>" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="address-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Pincode</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="pincode" id="pincode" maxlength="6" onkeypress="return isNumberKey(event);" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="pincode-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="wizard-buttons">
                                	<a id="pre1" onClick="return previous1()">Back</a>
                                    <a id="next2" onClick="return validate_advanced2()">Next</a>
                                </div>
                            </div>
                            <div id="div3">
                               <div class="form-group">
                                    <label class="col-xs-3 control-label">Educational Quaification</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="educational_quaification" id="educational_quaification" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="educational_quaification-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Employment Type</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="employment_type" id="employment_type" />
                                        	<option value="">Select</option>
                                            <option value="1">Self Employed</option>
                                            <option value="2">Salaried</option>
                                        </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="employment_type-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Company Name</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="company_name" id="company_name"/>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="company_name-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Designation</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="designation" id="designation" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="designation-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Income Range</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="income_range" id="income_range" />
                                        	<option value="">Select</option>
                                            <option value="1">Below 1Lacs</option>
                                            <option value="2">1L-5L</option>
                                            <option value="3">5L-10L</option>
                                            <option value="4">10L-20L</option>
                                            <option value="5">20L-50L</option>
                                            <option value="6">Above 50Lacs</option>
                                        </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="income_range-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Company Join Year</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="company_join_year" id="company_join_year" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="company_join_year-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-xs-3 control-label">Company Join Month</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="company_join_month" id="company_join_month" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="company_join_month-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-xs-3 control-label">Current EMIs</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="current_emis" id="current_emis" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="current_emis-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                 <div class="wizard-buttons">
                                	<a id="pre2" onClick="return previous2()">Back</a>
                                    <a id="finish" onClick="return validate_finish()">Finish</a>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
        
          </div>
        </div>
      </div>
      
      </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2016 &copy; Antworks Money Admin </footer>
  </div>
  <!-- /#page-wrapper -->
</div>

<!-- jQuery -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url();?>assets-admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#div2").hide();
	$("#div3").hide();		
</script>
<!-- Form Wizard JavaScript -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url();?>assets-admin/js/custom.min.js"></script>

<!--Style Switcher -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?=base_url();?>assets-admin/js/validate.js"></script>
</body>
</html>