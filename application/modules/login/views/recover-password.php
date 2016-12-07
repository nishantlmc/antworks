<div class="wrapper-page bg-diff">
<? echo getNotificationHtml();?>
<div class="text-center"> <a class="logo logo-lg"><i class="md md-equalizer"></i> <span>CabsNCR</span> </a> </div>

<form method="post" action="<? echo base_url().'login/recoverpassword/'?>" role="form" class="text-center m-t-20">
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    Enter your <b>Email</b> and instructions will be sent to you! </div>
  <div class="form-group m-b-0">
    <div class="input-group">
      <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
      <i class="md md-email form-control-feedback l-h-34" style="left:6px;"></i> <span class="input-group-btn">
      <button type="submit" class="btn btn-email btn-primary waves-effect waves-light">Reset</button>
      </span> </div>
  </div>
</form>
</div>