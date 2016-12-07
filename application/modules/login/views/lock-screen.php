
<div class="wrapper-page">
<? echo getNotificationHtml();?>
  <div class="text-center"> <a class="logo logo-lg"><i class="md md-equalizer"></i> <span>CabsNCR</span> </a> </div>
  <form method="post" action="<? echo base_url().'login/lockscreenlogin/'.$userdetails['id'];?>" role="form" class="text-center m-t-20">
    <div class="user-thumb"> <img src="<? echo base_url().'uploads/'.$userdetails['avatar'];?>" class="img-responsive img-circle img-thumbnail"
                         alt="thumbnail"> </div>
    <div class="form-group">
      <h3><? echo $userdetails['firstname']." ".$userdetails['lastname'];?></h3>
      <p class="text-muted">Enter your password to access the admin.</p>
      <div class="input-group m-t-30">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <i class="md md-vpn-key form-control-feedback l-h-34" style="left:6px;"></i> <span class="input-group-btn">
        <button type="submit" class="btn btn-email btn-primary waves-effect waves-light"> Log In </button>
        </span> </div>
    </div>
    <div class="text-right"> <a href="<? echo base_url();?>admin/" class="text-muted">Not <? echo $userdetails['firstname']." ".$userdetails['lastname'];?> ?</a> </div>
  </form>
</div>
