<?=getNotificationHtml();?>
<div class="row">
        <div class="col-md-12">
          
          <div class="panel panel-info">
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
             <form action="<?=base_url();?>management/update_role/<? echo $editlist['role_id'];?>" method="post">
              <div class="form-body">
                <h3 class="box-title">Edit Role</h3>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Role Name</label>
                      <input id="role" class="form-control" value="<?=$editlist['role'];?>" type="text" readonly="readonly">
                  </div>
                </div>
                <!--/row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Status</label>
                      <select class="form-control" name="status">
                      <? $active = "";$inactive = "";
					  if($editlist['status']==1)
					  {
						  $active = " selected";
					  }
					  else if($editlist['status']==2)
					  {
						  $inactive = " selected";
					  }?>
                        <option value="1" <?=$active;?>>Active</option>
                        <option value=2 <?=$inactive;?>>Inactive</option>
                      </select>
                      </div>
                  </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                <a href="<?=base_url();?>management/list_roles/"><button type="button" class="btn btn-default">Cancel</button></a>
              </div>
            </form>
              </div>
            </div>
          </div>  
        </div>
      </div>
      
<script type="text/javascript">

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.user').addClass('selected');
});

</script>
