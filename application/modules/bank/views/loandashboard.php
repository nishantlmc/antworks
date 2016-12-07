<div class="row">
  <div class="col-md-12">
    <div class="white-box p-0"> 
      <!-- .left-right-aside-column-->
      <div class="page-aside"> 
        <!-- .left-aside-column-->
     
        <!-- /.left-aside-column-->
        <div class="">
          <div class="right-page-header">
            <div class="pull-right">
              <input type="text" id="demo-input-search2" placeholder="search contacts" class="form-control">
            </div>
            <h3>Your Offered Loan List </h3>
          </div>
          <div class="clearfix"></div>
          <div class="scrollable">
            <div class="table-responsive">
              <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                <thead>
                  <tr>
                    <th class="footable-sortable">No<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Amount(Min-Max)<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Interest rate<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Tenure<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Processing Fee<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">(Enquiries/Hits)<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">Action<span class="footable-sort-indicator"></span></th>
                  </tr>
                </thead>
                           <tbody>
          <?  $i=1;
                        foreach($list as $row){
              if($row['status']==1)
              {
                $status = '<span class="label label-success">Active</span>';
              }
              else if($row['status']==2)
              {
                $status = '<span class="label label-danger">In Active</span>';
              }
                  ?>
                  <tr>
                    <td><?=$i;?></td>
                    <td>Rs. <?=$row['min_loan_amount'];?>- <?=$row['max_loan_amount'];?></td>
                    <td><?=$row['min_int_rate'];?> - <?=$row['max_int_rate'];?> %</td>
                   <td><?=$row['tenure_month_start'];?> - <?=$row['tenure_month_end'];?> Months</td>
                    <td><?=$row['min_processing_fee'];?> - <?=$row['max_processing_fee'];?> %</td>
                    <td><?=$ff = date('Y-m-d', strtotime($row['min_int_rate']));?></td>
                    <td><?=$status;?></td>
                    <td><a href="<?=base_url();?>bank/edit_user/<?=$row['id'];?>"><button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline" title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></a></td>
                    <td><a href="<?=base_url();?>bank/delete_user/<?=$row['id'];?>"<button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline" title="Delete"><i class="ti-close" aria-hidden="true"></i></button></a></td>
                  </tr>
                  <? $i++;}?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2"><button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Loan</button></td>
                    
                                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <form action="<?=base_url();?>bank/add_loan/" method="post" enctype="multipart/form-data" novalidate="novalidate" onsubmit="return add_user_valid()">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Add Loan</h4>
                          </div>
                          <div class="modal-body">
                            <from class="form-horizontal form-material">
                              <div class="form-group">
                                <div class="col-md-12 m-b-20">
                                    <select class="form-control form-control-line" name="bank_id" required>
                                    <option>-- Bank Name --</option>
                                    
                                      <?  $rolelist = $this->Bankmodel->bank_list();
                                            foreach($rolelist as $row){
                                                $active="";
                                               // if($row['id']==$editlist['loan_type']){$active=" selected";}
                                         ?>
                                      <option value="<?=$row['bank_id'];?>"  <?=$active;?>><?=ucwords($row['name']); ?></option>
                                      <? } ?> 
                                     
                                    </select>
                                </div>
                                <div class="col-md-12 m-b-20">
                                    <select class="form-control form-control-line" name="loan_type_id">
                                    <option>-- Loan Type --</option>
                                    
                                      <?  $rolelist = $this->Bankmodel->rolelist();
                                            foreach($rolelist as $row){
                                                $active="";
                                                if($row['id']==$editlist['loan_type']){$active=" selected";}
                                                

                                      ?>
                                      <option value="<?=$row['id'];?>"  <?=$active;?>><?=ucwords($row['loan_type']); ?></option>
                                      <? } ?> 
                                     
                                    </select>
                                </div>                             
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_loan_amount" id="min_loan_amount" class="form-control" placeholder="Min Loan Amount">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="username-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="max_loan_amount" id="max_loan_amount" class="form-control" placeholder="Max Loan Amount">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="password-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="minimum_cibil" id="minimum_cibil" class="form-control" placeholder="Minimum CIBIL Required">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="tenure_month_start" id="tenure_month_start" class="form-control" placeholder="Minimum Tenure">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="fullname-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="tenure_month_end" id="tenure_month_end" class="form-control" placeholder="Maximum Tenure">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="email-error" class="errors-class"></li></ul></span>
                                </div>
                             
                                
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_age" id="min_age" class="form-control" placeholder="Minimum Age">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="max_age" id="max_age" class="form-control" placeholder="Maximum Age">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_salary" id="min_salary" class="form-control" placeholder="Minimum Salary">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min-average_income" id="min-average_income" class="form-control" placeholder="Minimum Annual Income" required>
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                               <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_int_rate" id="min_int_rate" class="form-control" placeholder="Minimum Interest Rate in %">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="max_int_rate" id="max_int_rate" class="form-control" placeholder="Maximum Interest Rate in %">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_processing_fee" id="min_processing_fee" class="form-control" placeholder="Minimum Processing Fee in %">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="max_processing_fee" id="max_processing_fee" class="form-control" placeholder="Maximum Processing Fee in %">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_residence_yrs" id="city" class="form-control" placeholder="Minimum Years of residence required">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                  <input type="text" name="min_employement_yrs" id="city" class="form-control" placeholder="Minimum Years of emoployement required">
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div>
                                <div class="col-md-12 m-b-20">
                                 <!-- <input type="text" " id="city" class="form-control" placeholder="Loan Description" required">-->
                                  <textarea name="loan_description" placeholder="Loan Description" class="form-control" required ></textarea>
                                  <span class="help-block with-errors"><ul class="list-unstyled"><li id="city-error" class="errors-class"></li></ul></span>
                                </div

                              ></div>
                            </from>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-info waves-effect">Save</button>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </form>
                        <!-- /.modal-content --> 
                      </div>
                      <!-- /.modal-dialog --> 
                    </div>
                    <? if($this->Bankmodel->countusers()>10){?>
                    <td colspan="7"><div class="text-right">
                        <ul class="pagination">
                        </ul>
                      </div></td>
                    <? }?>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        <!-- .left-aside-column--> 
        
      </div>
      <!-- /.left-right-aside-column--> 
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