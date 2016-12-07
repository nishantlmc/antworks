<div class="row">
  <div class="col-sm-12">
          <div class="white-box">
          <div class="pull-right">
              <input type="text" id="demo-input-search2" placeholder="search roles" class="form-control">
            </div>
            <h3>Loan Type  List</h3>
            <div class="table-responsive">
              <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				   <?	if($rolelist){
					  	$i=1;
                      	foreach($rolelist as $row){
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
                    <td><?=ucwords($row['loan_type']);?></td>
                    <td><?=$status;?></td>
                    <td><a href="<?=base_url();?>bank/edit_role/<?=$row['id'];?>" class="" style="background-position: 0 -118px;"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" title="Edit"><i class="ti-edit" aria-hidden="true"></i>Edit</button></a> | <a href="<?=base_url();?>bank/delete_role/<?=$row['id'];?>" class="" onclick="return confirm_delete()" style="background-position: 0 -78px;"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" title="Delete">Delete</button></a></td>
                  </tr>
                  <? $i++;}}else
				  { ?>
                  <tr>
                  	<td colspan="9">No Loan types Found!</td>
                  </tr>
                  <? }?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2"><button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#myModal">Create New Role</button></td>
                      <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <form action="<?=base_url();?>bank/add_loan_type/" method="post" novalidate="novalidate" onsubmit="return add_role_valid()">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 class="modal-title" id="myModalLabel">Add Role</h4>
                            </div>
                            <div class="modal-body">
                              <from class="form-horizontal">
                                <div class="form-group">
                                  <label class="col-md-12">Name of Role</label>
                                  <div class="col-md-12">
                                    <input type="text" name="loan_type" id="role" class="form-control" placeholder="type name">
                                    <span class="help-block with-errors"><ul class="list-unstyled"><li id="role-error" class="errors-class"></li></ul></span>
                                  </div>
                                </div>
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
                   
                    <td colspan="7"><div class="text-right">
                         <? if($this->Bankmodel->countroles()>10){?><ul class="pagination">
                        </ul><? }?>
                      </div></td>
                    
                  </tr>
                </tfoot>
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
	$('li').removeClass('selected');
	$('.bank').addClass('selected');
});

</script>