</div>

    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2016 &copy; Antworks Money Admin </footer>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url();?>assets-admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
 function confirm_delete()
  {
	  var con = confirm('Are you sure to delete the data?');
	  if(con)
	  {
		  return true;
	  }
	  else
	  {
		  return false;
	  }
  }
</script>
<!--slimscroll JavaScript -->
<script src="<?=base_url();?>assets-admin/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url();?>assets-admin/js/waves.js"></script>
<!--Counter js -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url();?>assets-admin/js/custom.min.js"></script>
<script src="<?=base_url();?>assets-admin/js/dashboard1.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

<!-- Footable -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/footable/js/footable.all.min.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<!--FooTable init-->
<script src="<?=base_url();?>assets-admin/js/footable-init.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<script>
jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
		format: 'yyyy-mm-dd',
		buttonClasses: ['btn', 'btn-sm'],
		applyClass: 'btn-danger',
		cancelClass: 'btn-inverse'
      });
</script>
<? if($this->session->flashdata('init-success')==1){
?>
<script type="text/javascript">
  
  $(document).ready(function() {
      $.toast({
        heading: 'Welcome to Antworks Money Admin',
        text: 'Use the predefined ones, or specify a custom position object.',
        position: 'top-right',
        loaderBg:'#ff6849',
        icon: 'info',
        hideAfter: 3500, 
        
        stack: 6
      });
      $('.vcarousel').carousel({
            interval: 3000
       });
    });
 
</script>
<? }?>

<!-- Sweet-Alert  -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?=base_url();?>assets-admin/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

<!--Style Switcher -->
<script src="<?=base_url();?>assets-admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Validate Plugin -->
<script src="<?=base_url();?>assets-admin/js/validate.js"></script>

<script src="<?=base_url();?>assets-admin/js/jquery-ui.js"></script>
<script src="<?=base_url();?>assets-admin/js/myjs.js"></script>

<!--Function Plugin -->
<? include_once('function.php');?>
</body>
</html>
