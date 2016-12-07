
<!-- .Side panel -->
<div class="side-mini-panel">
  <ul class="mini-nav">
    <div class="togglediv"><a href="javascript:void(0)" id="togglebtn"><i class="ti-menu"></i></a></div>
    
    <!-- .Dashboard -->
    <li class="dashboard selected"> <a href="javascript:void(0"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
      <div class="sidebarmenu"> 
        <!-- Left navbar-header -->
        <h3 class="menu-title">Dashboard</h3>
        <ul class="sidebar-menu">
          <li><a href="<?=base_url();?>dashboard/">Home</a></li>
        </ul>
      </div>
    </li>
    <!-- /.Dashboard --> 
    
    <!-- .User Management -->
    <li class="user"><a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
      <div class="sidebarmenu"> 
        <!-- Left navbar-header -->
        <h3 class="menu-title">My Profile</h3>
        <ul class="sidebar-menu">
          <li><a href="<?=base_url().'management/profile/'.$userdetails['user_id'];?>">Profile</a></li>
        </ul>
        <!-- Left navbar-header end --> 
      </div>
    </li>
    <!-- /.User Management -->
    <? if($userdetails['role']==1){?>
    <!-- .User Management -->
    <li class="user"><a href="javascript:void(0)"><i class="fa fa-users" aria-hidden="true"></i></a>
      <div class="sidebarmenu"> 
        <!-- Left navbar-header -->
        <h3 class="menu-title">User Management</h3>
        <ul class="sidebar-menu">
          <li><a href="<?=base_url();?>management/dashboard">List Users</a></li>
          <li><a href="<?=base_url();?>management/list_roles">List Roles</a></li>
        </ul>
        <!-- Left navbar-header end --> 
      </div>
    </li>
    <!-- /.User Management -->
    <? }if($userdetails['role']==3){?>
    <!-- .Bidding -->
    <li class="bidding"> <a href="javascript:void(0"><i class="fa fa-gavel" aria-hidden="true"></i></a>
      <div class="sidebarmenu"> 
        <!-- Left navbar-header -->
        <h3 class="menu-title">Bidding</h3>
        <ul class="sidebar-menu">
          <li><a href="<?=base_url();?>bidding/">Home</a></li>
          <li><a href="<?=base_url();?>bidding/proposal_listing/">Proposal Listing</a></li>
          <li><a href="<?=base_url();?>bidding/bids_listing/">My Bids</a></li>
        </ul>
      </div>
    </li>
    <!-- /.Bidding -->
    <? }//if($userdetails['role']==6){?>
    <li class="bank"> <a href="javascript:void(0"><i class="fa fa-bank" aria-hidden="true"></i></a>
      <div class="sidebarmenu"> 
        <!-- Left navbar-header -->
        <h3 class="menu-title">Banks</h3>
        <ul class="sidebar-menu">
          <li><a href="<?=base_url();?>bank/list_banks/">Home</a></li>
          <li><a href="<?=base_url();?>bank/list_loan_types/">Loan Types</a></li>
      </div>
    </li>
    <? //}?>
  </ul>
</div>
<!-- /.Side panel --> 
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">