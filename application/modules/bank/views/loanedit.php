<?=getNotificationHtml();?>
<div class="row">
  <div class="col-md-4 col-xs-12">
    <div class="white-box">
     <!-- <div class="user-bg"> <img width="100%" alt="" src="<?=base_url();?>uploads/bank/<?=$editlist['bank_img'];?>"> </div>-->
      <div class="user-btm-box"> 
        <!-- .row -->
        <div class="row text-center m-t-10">
          <div class="col-md-6 b-r"><strong>Bank</strong>
            <p><?=$editlist['name'];?></p>
          </div>
          <div class="col-md-6 b-r"><strong>Tenure</strong>
            <p><?=$editlist['tenure_month_start'];?> - <?=$editlist['tenure_month_end'];?> Months</p>
          </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- .row -->
        <div class="row text-center m-t-10">

          <div class="col-md-6"><strong>Min CIBIL Required</strong>
            <p><?=$editlist['minimum_cibil'];?></p>
          </div>

          <div class="col-md-6"><strong>Processing Fee</strong>
            <p><?=$editlist['min_processing_fee'];?> - <?=$editlist['max_processing_fee'];?> %</p>
          </div>

        </div>
        <!-- /.row -->
        <hr>
        <!-- .row -->
        <div class="row text-center m-t-10">

        </div>
        <hr>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="white-box"> 
      <!-- .tabs -->
      <ul class="nav nav-tabs tabs customtab">
        <li class="tab active"><a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Edit Detail</span> </a> </li>
      </ul>
      <!-- /.tabs -->
      <div class="tab-content"> 
        <!-- .tabs3 -->
        <div class="tab-pane active" id="settings">
          <form class="form-horizontal form-material" action="<? echo base_url();?>bank/update_loan/<? echo $editlist['id'];?>" method="post" onsubmit="return edit_user_valid()" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-12">Min-Max Loan Amount</label>
              <div class="col-md-12">
                Rs. <input type="text" name="min_loan_amount" id="min_loan_amount" value="<?=$editlist['min_loan_amount'];?>" class="form-control form-control-line">
               Rs.  <input type="text" name="max_loan_amount" id="max_loan_amount" value="<?=$editlist['max_loan_amount'];?>" class="form-control form-control-line">
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="username-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Min-Max Tenure in %</label>
              <div class="col-md-12">
                <input type="text" name="tenure_month_start"  class="form-control form-control-line" value="<?=$editlist['tenure_month_start'];?>" >
                <input type="text" name="tenure_month_end"  class="form-control form-control-line" value="<?=$editlist['tenure_month_end'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Min-Max Processing Fee in %</label>
              <div class="col-md-12">
                <input type="text" name=" min_processing_fee" class="form-control form-control-line" value="<?=$editlist['min_processing_fee'];?>" >
                <input type="text" name=" max_processing_fee" name="tenure_month_end" class="form-control form-control-line" value="<?=$editlist['max_processing_fee'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
           <div class="form-group">
              <label class="col-md-12">Min-Max Interest Rate in months </label>
              <div class="col-md-12">
                <input type="text" name="min_int_rate"  class="form-control form-control-line" value="<?=$editlist['min_int_rate'];?>" >
                <input type="text" name="max_int_rate" class="form-control form-control-line" value="<?=$editlist['max_int_rate'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-12">Min-Max Age in Years</label>
              <div class="col-md-12">
                <input type="text" name="min_age"  class="form-control form-control-line" value="<?=$editlist['min_age'];?>" >
                <input type="text" name="max_age" class="form-control form-control-line" value="<?=$editlist['max_age'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-12">Minimum CIBIL</label>
              <div class="col-md-12">
                <input type="text" name="minimum_cibil"  class="form-control form-control-line" value="<?=$editlist['minimum_cibil'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-12">Minimum Years of residence</label>
              <div class="col-md-12">
                <input type="text" name="min_residence_yrs"  class="form-control form-control-line" value="<?=$editlist['min_residence_yrs'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Minimum Years of Employement</label>
              <div class="col-md-12">
                <input type="text" name="min_employement_yrs"  class="form-control form-control-line" value="<?=$editlist['min_employement_yrs'];?>" >
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
      <div class="form-group">
              <label class="col-sm-12">Select Loan Type</label>
              <div class="col-sm-12">
                <select class="form-control form-control-line" name="loan_type_id">
				  <?	$rolelist = $this->Bankmodel->rolelist();
                  		foreach($rolelist as $row){
							$active="";
							if($row['id']==$editlist['loan_type_id']){$active=" selected";}
                  ?>
                  <option value="<?=$row['id'];?>" <?=$active;?>><?=ucwords($row['loan_type']);?></option>
                  <? }?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Loan Details</label>
              <div class="col-md-12">
              <textarea name="loan_description" placeholder="Loan Description" class="form-control"  required ><?=$editlist['loan_description'];?></textarea>
                
                <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
              </div>
            </div>
        
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.tabs3 --> 
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