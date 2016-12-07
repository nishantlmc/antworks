<div class="wrapper">
  <div class="container"> 
    
    <!-- Page-Title -->
    <div class="row">
    <? echo getNotificationHtml();?>
      <div class="col-sm-12">
        <h4 class="page-title">Add New Member</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box">
          <div class="row">
            <div class="col-lg-12">
              <h5><b>All fields are required!</b></h5>
              <form class="form-horizontal group-border-dashed" action="<? echo base_url();?>management/register/" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Full Name</label>
                  <div class="col-sm-3">
                    <input type="text" name="firstname" class="form-control" required placeholder="First Name" />
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="lastname" class="form-control" required placeholder="Last Name" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-6">
                    <input type="text" name="username" class="form-control" required data-parsley-type="alphanum" placeholder="Unique Username" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-3">
                    <input type="password" id="pass" name="password" class="form-control" required placeholder="Password" />
                  </div>
                  <div class="col-sm-3">
                    <input type="password" class="form-control" required data-parsley-equalto="#pass" placeholder="Re-Type Password" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">E-Mail</label>
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mobile</label>
                  <div class="col-sm-6">
                    <input data-parsley-type="number" name="mobile" type="text" class="form-control" required placeholder="Enter only numbers" maxlength="10" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Role</label>
                  <div class="col-sm-6">
                    <select name="access" required class="form-control">
                    	<option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Image Upload</label>
                  <div class="col-sm-6">
                    <input name="image" type="file" class="form-control" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                    <button type="reset" class="btn btn-default waves-effect m-l-5"> Cancel </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.bank').addClass('selected');
});

</script>