<?=getNotificationHtml();?>

<div class="row inner-main">
  <div class="col-md-9 ">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-40">
        <div class="panel panel-default block1">
          <div class="panel-heading">
            <h2>Loan for
              <?=$this->Requestmodel->get_loan_name($proposal_details['loan_purpose']);?>
            </h2>
          </div>
          <div class="panel-wrapper collapse in">
            <div class="panel-body">
              <p>
                <?=$proposal_details['loan_description'];?>
              </p>
              <hr>
              <div class="col-lg-3 col-sm-3 col-xs-6 m-t-40">
                <dl>
                  <dt>Borrower name</dt>
                  <dd>
                    <?=$proposal_details['name'];?>
                  </dd>
                  <dt>Resident of</dt>
                  <dd>
                    <?=$proposal_details['r_city'];?>
                  </dd>
                  <dt> Education</dt>
                  <dd>
                    <?=$proposal_details['highest_qualification'];?>
                  </dd>
                  <dt>Occupation</dt>
                  <dd>
                    <?=$this->Requestmodel->get_occupation_name($proposal_details['occupation']);?>
                  </dd>
                  <dt>Net Montly Income</dt>
                  <dd>
                    <?=$proposal_details['net_monthly_income'.$proposal_details['occupation']];?>
                  </dd>
                  <dt>Existing loans</dt>
                  <dd>
                    <?=$proposal_details['current_emis'.$proposal_details['occupation']];?>
                  </dd>
                </dl>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-6 m-t-40">
                <dl>
                  <dt>Antworks Money Rating for Individual Borrowers</dt>
                  <dd>
                    <? if($proposal_details['antworks_rating']==0){echo "NA";}else{ echo $proposal_details['antworks_rating'];};?>
                  </dd>
                  <dt>Loan amount</dt>
                  <dd>
                    <?=$proposal_details['loan_amount'];?>
                  </dd>
                  <dt>Purpose</dt>
                  <dd>
                    <?=$this->Requestmodel->get_loan_name($proposal_details['loan_purpose']);?>
                  </dd>
                  <dt>Interest Range</dt>
                  <dd>
                    <?=$proposal_details['min_interest_rate']."-".$proposal_details['max_interest_rate'];?>
                    %</dd>
                  <dt>Tenor in months</dt>
                  <dd>
                    <?=$proposal_details['tenor_months'];?>
                    Months</dd>
                  <dt>Whether any collateral is offered</dt>
                  <dd>
                    <?=$proposal_details['collateral_flag'];?>
                  </dd>
                </dl>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-6 m-t-40">
                <dl>
                  <dt>Standard Description List</dt>
                  <dd>-------</dd>
                  <dt>Bidding Status</dt>
                  <dd>
                  	<? if($proposal_details['bidding_status']==0)
							{
								$bidding_status = "Proposal Listed";
							}
							else if($proposal_details['bidding_status']==1)
							{
								$bidding_status = "Bidding";
							}
							else if($proposal_details['bidding_status']==2)
							{
								$bidding_status = "Bidding Open";
							}
							else if($proposal_details['bidding_status']==3)
							{
								$bidding_status = "Loan Approved";
							}
                    echo $bidding_status;?>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="panel-footer">
              <button class="btn btn-outline btn-default waves-effect waves-light"> <i class=" fa fa-file-text-o m-r-5"></i> <span>Open Attachment</span></button>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 m-b-40 ">
    <div class="panel panel-default block1 right-panel ">
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div class="col-lg-12 col-sm-12 col-xs-12 m-b-40">
            <button name="Submit_proposal" class="btn btn-block btn-primary" onclick="open_proposal_form()">Submit A Bid</button>
          </div>
          <div class="col-lg-12 col-sm-12 col-xs-12 m-b-40" id="proposal_form_div" style="display:none">
            <form action="<?=base_url();?>bidding/submit_proposal/<?=$proposal_details['proposal_id'];?>/<?=$proposal_details['borrower_id'];?>/" method="post" onsubmit="return validate_lenders_proposal()">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Loan Amount Offer(in %)</label>
                      <select id="loan_amount" class="form-control" name="loan_amount" onchange="total_amount()">
                        <? for($a=20;$a<=100;$a=$a+5){?>
                        <option value="<?=$a;?>">
                        <?=$a;?>
                        %</option>
                        <? }?>
                      </select>
                      <span class="help-block with-errors" id="amt-rs" style="display:none">gfg</span> </div>
                  </div>
                  <!--/row-->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">Interest Rate Offer(in %)</label>
                        <select id="interest_rate" class="form-control" name="interest_rate">
                          <? for($b=$proposal_details['min_interest_rate'];$b<=$proposal_details['max_interest_rate'];$b=$b+0.25){?>
                          <option value="<?=$b;?>">
                          <?=$b;?>
                          %</option>
                          <? }?>
                        </select>
                        <span class="help-block with-errors">
                        <ul class="list-unstyled">
                          <li id="interest_rate-error" class="errors-class"></li>
                        </ul>
                        </span> </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea id="proposal_description" class="form-control" name="proposal_description" type="text" placeholder="A short description ..."></textarea>
                        <span class="help-block with-errors">
                        <ul class="list-unstyled">
                          <li id="proposal_description-error" class="errors-class"></li>
                        </ul>
                        </span> </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" name="Submit_proposal" class="btn btn-success"> <i class="fa fa-check"></i> Submit Bid</button>
                    <button type="submit" name="Save_proposal" class="btn btn-success"> Save Bid</button>
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

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.bidding').addClass('selected');
});

function open_proposal_form()
{
	$("#proposal_form_div").toggle();
}

function total_amount()
{
	var amt_per = $("#loan_amount").val();
	var amt = <?=$proposal_details['loan_amount'];?>;
	var total_pay = (amt*amt_per/100);
	
	$("#amt-rs").html("Amount = "+total_pay+"in Lacs");
	$("#amt-rs").show();
}
</script>