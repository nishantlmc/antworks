<div class="wrapper">
  <div class="container"> 
    
    <!-- Page-Title -->
    <div class="row">
    <? echo getNotificationHtml();?>
      <div class="col-sm-12">
        <h4 class="page-title">Members List</h4>
      </div>
    </div>
    <div class="panel">
      <div class="panel-body">
        <div class="">
          <table class="table table-striped" id="datatable-editable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <? if($list!="")
				{
					$i=1;
					foreach($list as $listt){?>
              <tr>
              	<td><? echo $listt['firstname']." ".$listt['lastname'];?></td>
                <td><? echo $listt['email'];?></td>
                <td><? echo $listt['access'];?></td>
                <td class="actions"><a href="<? echo base_url();?>management/edit/<? echo $listt['id'];?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a> <a href="#" id="<? echo $listt['id'];?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              <? $i++;}}?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- end: page --> 
      
    </div>
  </div>
</div>

<!-- MODAL -->
<div id="dialog" class="modal-block mfp-hide">
  <section class="panel panel-info panel-color">
    <header class="panel-heading">
      <h2 class="panel-title">Are you sure?</h2>
    </header>
    <div class="panel-body">
      <div class="modal-wrapper">
        <div class="modal-text">
          <p>Are you sure that you want to delete this row?</p>
        </div>
      </div>
      <div class="row m-t-20">
        <div class="col-md-12 text-right">
          <form action="<? echo base_url();?>management/delete/" method="post">
          	<input type="hidden" name="hiddenid" id="hiddenid" />
          	<button type="submit" id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
          	<button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<script type="text/javascript">

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.bank').addClass('selected');
});

</script>