<div class="row">
  <div class="col-md-9 ">
   <div class="white-box">
 <h3>Proposal Listing</h3>
    <? if($proposal_list){
		$i=1;
		foreach($proposal_list as $row){
			if($row['bidding_status']==0)
			{
				$bidding_status = "Proposal Listed";
			}
			else if($row['bidding_status']==1)
			{
				$bidding_status = "Bidding";
			}
			else if($row['bidding_status']==2)
			{
				$bidding_status = "Bidding Open";
			}
			else if($row['bidding_status']==3)
			{
				$bidding_status = "Loan Approved";
			}
			
			if($row['profilepic'])
			{
				$user_image = "uploads/users/".$row['profilepic'];
			}
			else
			{
				$user_image = "assets/img/team/team-8.png";
			}
   ?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-40">
        <div class="panel panel-default block1"> <a>
          <div class="panel-heading">
            <h2>
            <?=$this->Requestmodel->get_loan_name($row['loan_purpose'])?>
            </h2>
          </div>
          </a>
          <div class="sl-left"> <span class="col-md-2 col-xs-12 m-t-10"><img src="<?=base_url().$user_image;?>" alt="user" class="img-responsive" />
            <div class="el-card-content">
             <h5> <strong><?=ucwords($row['username']);?></strong></h5>
            </div>
            </span></div>
          <div class="panel-wrapper collapse in sl-right">
            <div class="sl-right">
              <div class="m-l-40">
                <div class="m-t-20 row">
                  <div class="col-md-9 col-xs-12">
                    <ul class="info-text">
                      <li class="text-muted m-b-40"><i class="ti-check-box"></i> Loan Amount <span class="text-info">
                        <?=$row['loan_amount'];?>
                        </span></li>
                      <li class="text-muted m-b-40"><i class="ti-check-box"></i> Interest Range <span class="text-info">
                        <?=$row['min_interest_rate']."-".$row['max_interest_rate']." %";?>
                        </span></li>
                      <li class="text-muted m-b-40"><i class="ti-check-box"></i> Tenor <span class="text-info">
                        <?=$row['tenor_months']." months";?>
                        </span></li>
                      <li class="text-muted m-b-40 pull-right"><a href="<?=base_url();?>bidding/proposal_listing_apply/<?=$row['proposal_id'];?>/" class="btn btn-success">Express Interest</a></li>
                    </ul>
                    <p>
                      <?=ucwords($row['loan_description']);?>
                    </p>
                    <div class="row m-t-40 m-b-40">
                      <div class="col-md-3 col-xs-6 b-r"> <strong>Borrower ID</strong> <br>
                        <p class="text-muted">
                          <?=$row['borrower_id'];?>
                        </p>
                      </div>
                      <div class="col-md-3 col-xs-6 b-r"> <strong>City</strong> <br>
                        <p class="text-muted">
                          <?=$row['r_city'];?>
                        </p>
                      </div>
                      <div class="col-md-3 col-xs-6 b-r"> <strong>Occupation</strong> <br>
                        <p class="text-muted">
                          <?=$this->Requestmodel->get_occupation_name($row['occupation']);?>
                        </p>
                      </div>
                      <!--<div class="col-md-3 col-xs-6"> <strong>Location</strong> <br>
                        <p class="text-muted">
                          <?=$row['r_address'];?>
                        </p>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer"> </div>
        </div>
      </div>
      <hr>
    </div>
    <? }}else{?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-40">
        <div class="panel panel-default block1">
          <div class="panel-body">
            <p>No Records found!</p>
          </div>
        </div>
      </div>
    </div>
    <? }?>
    <!-- /.row --> 
  </div>
  </div>
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 m-b-40 " style="position:relative">
    <div class="panel panel-default block1 right-panel ">
      <div class="panel-wrapper collapse in">
      <form action="<?=base_url();?>bidding/proposal_listing/" method="post">
        <div class="panel-body">
          <h3 class="box-title">Filter</h3>
          	<? 	$loan_type = $this->Requestmodel->loan_type();
				foreach($loan_type as $row){?>
                    <div class="checkbox checkbox-success">
                    <input id="checkbox3" name="loan[]" type="checkbox" value="<?=$row['id'];?>">
                    <label for="checkbox3"> <?=$row['loan_name'];?> </label>
                    </div>
		  	<? }?>
          	<h5 class="m-t-30">Loan Type</h5>
                <select class="form-control" name="loan_type" >
                  <option value="">Select Loan Type</option>
                   	<? $loan_details = $this->Requestmodel->loan_info();
						foreach($loan_details as $row){
							echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
						}
					?>
                </select>
            <hr>
            <div class="form-group ">
              <h5 class="m-t-12">Loan Range</h5>
              <div id="slider-range" class="col-sm-12 m-b-10 "></div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="" class="control-label">Min</label>
                  <input type="text" name="min_loan" class="form-control" id="min" placeholder="100000" >
                </div>
                <div class="col-sm-6">
                  <label for="" class="control-label">Max</label>
                  <input type="text" name="max_loan" class="form-control" placeholder="20000000" id="max">
                </div>
              </div>
            </div>
            <div class="form-group ">
              <h5 class="m-t-12">Interest Range</h5>
              <div id="slider-range2" class="col-sm-12 m-b-10 "></div>
              <div class="row">
                <div class="col-sm-6">
                  <label for="" class="control-label">Min</label>
                  <input type="text"  class="form-control" id="min2" name="min_interest_rate" placeholder="12" >
                </div>
                <div class="col-sm-6">
                  <label for="" class="control-label">Max</label>
                  <input type="text" class="form-control" placeholder="24" id="max2" name="max_interest_rate">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="m-t-10">State Name</h5>
                <input type="text" class="form-control" placeholder="State Name" id="state" name="state">
              </div>
              <div class="col-md-12">
                <h5 class="m-t-10">City Name</h5>
                <input type="text" class="form-control" placeholder="City Name" id="city" name="city">
              </div>
              <div class="col-md-12">
                <h5 class="m-t-30">Occupation</h5>
                <select class="form-control" name="occupation" id="occupation" >
                  <option value="">Select Occupation</option>
                   	<? $occupation_details = $this->Requestmodel->get_occupation_details();
						foreach($occupation_details as $row){
							echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
						}
					?>
                </select>
              </div>
            </div>
            <hr>
            <div class="form-group ">
              <div class="col-md-12">
               	<button type="submit" class="btn btn-success">Search</button>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
 $("#loan-search-id button").click(function() {
    $(this).addClass('active');

    });
$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.bidding').addClass('selected');
});

</script>