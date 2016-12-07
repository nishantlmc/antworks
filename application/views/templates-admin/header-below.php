<? 	
if(empty($pageTitle)){
$pageTitle = "";
}
if(empty($pageBreadcrumb)){
$pageBreadcrumb = "";
}
?>
<div class="row bg-title" style="background:url(<?=base_url();?>assets-admin/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
  <div class="col-lg-12">
    <h4 class="page-title"><?=$pageTitle;?></h4>
  </div>
  <div class="col-sm-6 col-md-6 col-xs-12">
    <ol class="breadcrumb pull-left">
      <li><a href="#">Dashboard</a></li>
      <? if($pageBreadcrumb){?>
      <li class="active"><?=$pageBreadcrumb;?></li>
      <? }?>
    </ol>
  </div>
  <div class="col-sm-6 col-md-6 col-xs-12">
    <!--<form role="search" class="app-search hidden-xs pull-right" method="get" action="<?=base_url();?>search/">
    <form role="search" class="app-search hidden-xs pull-right" method="post" action="#">
      <input type="text" name="s" placeholder="Search..." class="form-control">
      <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
    </form>-->
  </div>
  <!-- /.col-lg-12 --> 
</div>
