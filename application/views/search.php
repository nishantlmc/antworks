
 <div class="row inner-main">
  
    <? if($_GET['s']){?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-40">
        <div class="panel panel-default block1">
          <div class="panel-heading">
            <h2>Search for : <?=$_GET['s']?></h2>
          </div>
        </div>
      </div>
    </div>
   <? }?> 
    <? if($search_list){foreach($search_list as $row){?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b-40">
        <div class="panel panel-default block1">
          <div class="panel-heading">
            <h2><?=$row['fullname'];?></h2>
          </div>
          <div class="panel-wrapper collapse in">
            
            <div class="panel-footer"> </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <? }}else
	{?>
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


<script type="text/javascript">

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
	$('li').removeClass('selected');
	$('.bidding').addClass('selected');
});

</script>