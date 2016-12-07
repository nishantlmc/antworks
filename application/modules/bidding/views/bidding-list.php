<?=getNotificationHtml();?>
<div class="row">
  <div class="col-sm-12">
          <div class="white-box">
          <div class="pull-right">
              <input type="text" id="demo-input-search2" placeholder="search here" class="form-control">
            </div>
            <h3>Bids Listing</h3>
            <div class="table-responsive">
              <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                <? if($bid_list){?>
				<thead>
                  <tr>
                    <th>No</th>
                    <th>Borrower Name</th>
                    <th>Borrowers Id</th>
                    <th>PLRN</th>
                    <th>Loan Amount</th>
                    <th>Interest Rate</th>
                    <th>Proposal Status</th>
                    <th>Proposal Added Date</th>
                  </tr>
                </thead>
                <tbody>
				   <?	$i=1;
                      	foreach($bid_list as $row){
							if($row['proposal_status']==0)
							{
								$proposal_status = "Open";
							}
							else if($row['proposal_status']==1)
							{
								$proposal_status = "Accepted";
							}
							else if($row['proposal_status']==2)
							{
								$proposal_status = "Rejected";
							}
							else if($row['proposal_status']==3)
							{
								$proposal_status = "Saved";
							}
                  ?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=ucwords($row['name']);?></td>
                    <td><?=$row['borrowers_id'];?></td>
                    <td><?=$row['PLRN'];?></td>
                    <td><?=$row['loan_amount']." %";?></td>
                    <td><?=$row['interest_rate']." %";?></td>
                    <td><?=$proposal_status;?></td>
                    <td><?=$row['proposal_added_date'];?></td>
                  </tr>
                  <? $i++;}?>
                </tbody>
                <? }else {?>
                <tbody>
                  <tr>
                  	<td colspan="9">No Records Found!</td>
                  </tr>
                </tbody>
                <? }?>
              </table>
            </div>
          </div>
        
      </div>
      <!-- /.left-right-aside-column--> 
    </div>
  </div>
</div>
<script type="text/javascript">

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	//$('a').removeClass('active');
	$('li').removeClass('selected');
	$('.bidding').addClass('selected');
});

</script>
