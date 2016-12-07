<?=getNotificationHtml();?>
<div class="row">
  <div class="col-md-4 col-xs-12">
    <div class="white-box">
      <div class="user-bg"> <img width="100%" alt="" src="<?=base_url();?>uploads/users/<?=$editlist['profilepic'];?>"> </div>
      <div class="user-btm-box"> 
        <!-- .row -->
        <div class="row text-center m-t-10">
          <div class="col-md-6 b-r"><strong>Name</strong>
            <p><?=$editlist['fullname'];?></p>
          </div>
          <div class="col-md-6"><strong>Username</strong>
            <p><?=ucwords($editlist['username']);?></p>
          </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- .row -->
        <div class="row text-center m-t-10">
          <div class="col-md-6 b-r"><strong>Email ID</strong>
            <p><?=$editlist['email'];?></p>
          </div>
          <div class="col-md-6"><strong>Phone</strong>
            <p><?=$editlist['mobile'];?></p>
          </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- .row -->
        <div class="row text-center m-t-10">
          <div class="col-md-12"><strong>Address</strong>
            <p><?=$editlist['address'];?><br/>
              <?=$editlist['city'];?>, India.</p>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="white-box"> 
      <!-- .tabs -->
      <ul class="nav nav-tabs tabs customtab">
       <li class="active tab"><a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a> </li>
        <li class="tab"><a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Edit Detail</span> </a> </li>
      </ul>
      <!-- /.tabs -->
      <div class="tab-content"> 
        <!-- .tabs2 -->
        <div class="tab-pane active" id="profile">
          <div class="row">
            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
              <p class="text-muted"><?=$editlist['fullname'];?></p>
            </div>
            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
              <p class="text-muted"><?=$editlist['mobile'];?></p>
            </div>
            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong> <br>
              <p class="text-muted"><?=$editlist['email'];?></p>
            </div>
            <div class="col-md-3 col-xs-6"> <strong>Location</strong> <br>
              <p class="text-muted"><?=$editlist['city'];?></p>
            </div>
          </div>
          <hr>
          <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
          <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <h4 class="font-bold m-t-30">Skill Set</h4>
          <hr>
          <h5>Wordpress <span class="pull-right">80%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>HTML 5 <span class="pull-right">90%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>jQuery <span class="pull-right">50%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>Photoshop <span class="pull-right">70%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
        </div>
        <!-- /.tabs2 --> 
        <!-- .tabs3 -->
        <div class="tab-pane" id="settings">
          <form class="form-horizontal form-material" action="<? echo base_url();?>management/update_user/<? echo $editlist['user_id'];?>" method="post" onsubmit="return edit_user_valid()" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-12">Username</label>
              <div class="col-md-12">
                <input type="text" name="username" id="username" value="<?=$editlist['username'];?>" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="username-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Change Password</label>
              <div class="col-md-12">
                <input type="text" name="password" name="password" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Full Name</label>
              <div class="col-md-12">
                <input type="text" name="fullname" id="fullname" value="<?=$editlist['fullname'];?>" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="fullname-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label for="example-email" class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" name="email" id="email" value="<?=$editlist['email'];?>" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="email-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Phone No</label>
              <div class="col-md-12">
                <input type="text" name="mobile" id="mobile" value="<?=$editlist['mobile'];?>" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="mobile-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Date of Birth</label>
              <div class="col-md-12">
                  <input type="text" name="dob" id="datepicker-autoclose" value="<?=$editlist['dob'];?>" class="form-control form-control-line">
                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="datepicker-autoclose-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-12">Select Gender</label>
              <div class="col-sm-12">
                <select class="form-control form-control-line" name="role">
				  <?	$m=$f="";if($editlist['role']=="Male"){$m=" selected";}
				  		if($editlist['role']=="Female"){$f=" selected";}
                  ?>
                  <option value="Male" <?=$m;?>>Male</option>
                  <option value="Female" <?=$f;?>>Female</option>
                  
                </select>
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">State</label>
                <div class="col-md-12">
                    <select class="form-control" name="state_code" id="state" onChange="get_city()" />
                        <option value=""></option>
                        <? $statelist = $this->Requestmodel->state_list();
                        foreach($statelist as $row)
                        {
							$sel = "";
							if($row['state_code'] == $editlist['state_code'])
							{
								$sel = " selected";
							}
                            echo '<option value="'.$row['state_code'].'" '.$sel.'>'.$row['state_name'].'</option>';
                        }
                        ?>
                    </select>
                    <span class="help-block with-errors"><ul class="list-unstyled"><li id="state-error" class="errors-class"></li></ul></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">City</label>
                <div class="col-md-12">
                     <select class="form-control" name="city" id="city" />
                        <option value="<?=$editlist['city'];?>"><?=$editlist['city'];?></option>
                    </select>
                    <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Address</label>
              <div class="col-md-12">
                   <input type="text" name="address" id="address" class="form-control form-control-line" placeholder="Address" value="<?=$editlist['address'];?>">
                   <span class="help-block with-errors"><ul class="list-unstyled"><li id="address-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-12">Select Role</label>
              <div class="col-sm-12">
                <select class="form-control form-control-line" name="role">
				  <?	$rolelist = $this->Managementmodel->rolelist();
                  		foreach($rolelist as $row){
							$active="";
							if($row['role_id']==$editlist['role']){$active=" selected";}
                  ?>
                  <option value="<?=$row['role_id'];?>" <?=$active;?>><?=ucwords($row['role']);?></option>
                  <? }?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Status</label>
              <select class="form-control" name="status">
				  <? $active = "";$inactive = "";
                  if($editlist['status']==1)
                  {
                      $active = " selected";
                  }
                  else if($editlist['status']==0)
                  {
                      $inactive = " selected";
                  }?>
                <option value=1 <?=$active;?>>Verify</option>
                <option value=0 <?=$inactive;?>>NonVerify</option>
              </select>
            </div>
            <div class="form-group">
              <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Change Contact Image</span>
                <input type="file" name="profilepic" id="profilepic" class="upload">
              </div>
              <span class="help-block with-errors"><ul class="list-unstyled"><li id="profilepic-error" class="errors-class"></li></ul></span>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Update Lender</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.tabs3 --> 
      </div>
    </div>
  </div>
</div>