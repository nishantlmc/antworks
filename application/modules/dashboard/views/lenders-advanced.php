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
          <h4 class="page-title">Lender Details</h4>
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
                            <h4><span><i class="ti-credit-card"></i></span>Occupation and Loan Details</h4>
                        </li>
                    </ul>
                   
                    <form id="validation" class="form-horizontal" method="post" action="<?=base_url();?>dashboard/lender_advanced_info_updated/">
                        <div class="wizard-content">
                            <div id="div1">
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Full Name</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" value="<?=$userdetails['fullname']?>" readonly />
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
                                        <input type="text" class="form-control" value="<?=$userdetails['email']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Mobile</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" value="<?=$userdetails['mobile']?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Date of Birth</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" value="<?=$userdetails['dob']?>" readonly />
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
                                    <label class="col-xs-3 control-label">Occupation</label>
                                    <div class="col-xs-5">
                                        <select class="form-control" name="occupation" id="occupation" />
                                        	<option value="">Select Occupation</option>
                                        	<? $occupation_details = $this->Requestmodel->get_occupation_details();
												foreach($occupation_details as $row){
													echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
												}
											?>
                                        </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="occupation-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Investments</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="investments" id="investments"/>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="investments-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-xs-3 control-label">Loan Preference</label>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="col-xs-5">
                                        <input type="text" name="min_loan_preference" id="min_loan_preference" class="form-control" placeholder="Minimum Loan (1 Lac)" maxlength="8" onkeypress="return isNumberKey(event);">
                                        <span class="help-block with-errors">
                                      <ul class="list-unstyled">
                                          <li id="min_loan_preference-error" class="errors-class"></li>
                                        </ul>
                                      </span>
                                      </div>
                                    <div class="col-xs-5">
                                        <input type="text" name="max_loan_preference" id="max_loan_preference" class="form-control" placeholder="Maximum Loan (2 Crore)" maxlength="8" onkeypress="return isNumberKey(event);">
                                        <span class="help-block with-errors">
                                      <ul class="list-unstyled">
                                          <li id="max_loan_preference-error" class="errors-class"></li>
                                        </ul>
                                      </span> </div>
                                  </div>
                                  </div>
                              </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Interest Range Preference</label>
                                    <div class="row">
                                <div class="col-md-6">
                                   
                                    <div class="col-xs-5">
                                    <select name="min_interest_rate" id="min_interest_rate" class="form-control">
                                    	<option value="">Select Minimum Loan</option>
                                        <? for($b=12;$b<=24;$b=$b+0.25){?>
                                          <option value="<?=$b;?>"><?=$b;?> %</option>
                                        <? }?>
                                    </select>
                                    </div>
                                    <div class="col-xs-5">
                                     <select name="max_interest_rate" id="max_interest_rate" class="form-control">
                                    	<option value="">Select Maximum Loan</option>
                                        <? for($b=12;$b<=24;$b=$b+0.25){?>
                                          <option value="<?=$b;?>"><?=$b;?> %</option>
                                        <? }?>
                                    </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="min_interest_rate-error" class="errors-class"></li></ul></span>
                                    </div>
                         </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Tenor Preference Range</label>
                                    <div class="row">
                                <div class="col-md-6">
                                   
                                    <div class="col-xs-5">
                                    <select name="min_tenor" id="min_tenor" class="form-control">
                                    	<option value="">Select Minimum Tenor</option>
                                        <? for($b=6;$b<=72;$b=$b+6){?>
                                          <option value="<?=$b;?>"><?=$b;?> months</option>
                                        <? }?>
                                    </select>
                                    </div>
                                    <div class="col-xs-5">
                                     <select name="max_tenor" id="max_tenor" class="form-control">
                                    	<option value="">Select Maximum Tenor</option>
                                        <? for($b=6;$b<=72;$b=$b+6){?>
                                          <option value="<?=$b;?>"><?=$b;?> months</option>
                                        <? }?>
                                    </select>
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="min_tenor-error" class="errors-class"></li></ul></span>
                                    </div>
                         </div>
                                </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-xs-3 control-label">Description</label>
                                    <div class="col-xs-5">
                                        <input type="text" class="form-control" name="description" id="description" />
                                        <span class="help-block with-errors"><ul class="list-unstyled"><li id="description-error" class="errors-class"></li></ul></span>
                                    </div>
                                </div>
                                <div class="wizard-buttons">
                                	<a id="pre1" onClick="return previous1()">Back</a>
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
function get_city()
{
	var state_code = $("#state").val();
	$.ajax({
	type:"POST",
	url: "<?=base_url();?>dashboard/city_list_statewise/",
	data:"state="+state_code,
	success: function(result){
		$("#city").html(result);
	}});
}
</script>
<!-- Form Wizard JavaScript -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url();?>assets-admin/js/custom.min.js"></script>

<!--Style Switcher -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Validate Plugin -->
<script src="<?=base_url();?>assets-admin/js/validate.js"></script>
<!--Function Plugin -->
</body>
</html>