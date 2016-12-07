<footer class="footer has-dot-pattern sec-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="single-footer-widget link-widget">
          <div class="menu-footer-menu-container">
            <ul id="menu-footer-menu" class="menu">
              <li><a href="#">Home</a></li>
              <li><a href="http://blog.antworksmoney.com/blog/">Blog</a></li>
              <li><a href="http://blog.antworksmoney.com/news/">News</a></li>
              <li><a href="http://blog.antworksmoney.com/forums/">Forums</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- /.container --> 
  
</footer>
<!-- /.footer -->

<section class="footer-bottom">
  <div class="container">
    <div class="copyright pull-left">
      <p>Copyrights © 2016 All Rights Reserved.</p>
    </div>
    <!-- /.copyright pull-left -->
    <div class="social pull-right">
      <ul class="list-inline">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      <!-- /.list-inline --> 
    </div>
    <!-- /.social pull-right --> 
  </div>
  <!-- /.container --> 
</section>
<!-- /.footer-bottom --> 

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="<?=base_url();?>assets/js/jquery-ui.js"></script> 
<script src="<?=base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?=base_url();?>assets/assets/bootstrap-select/dist/js/bootstrap-select.min.js"></script>--> 
<!-- revolution slider js --> 
<script>
    
$(function() {
	 	
  $('#companytype').change(function(){
   $('.occup_form').hide();
    $('#' + $(this).val()).show();
  });
});
    

$("#slider").slider({
    range: "min",
    value: 100000,
    step: 1000,
    min: 100000,
    max: 20000000,
    slide: function( event, ui ) {
        $( "#loan" ).val(ui.value );
    }
});


$("#loan").change(function () {
    var value = this.value;
    //console.log(value);
    $("#slider").slider("value", parseInt(value));
});


$("#min").slider({
    range: "min",
   value: 12,
    step: 1,
    min: 12,
    max: 24,
    slide: function( event, ui ) {
        $( "#min-range" ).val(ui.value );
    }
});


$("#min-range").change(function () {
    var value = this.value;
    //console.log(value);
    $("#min").slider("value", parseInt(value));
});


$("#max").slider({
    range: "min",
    value: 12,
    step: 1,
    min: 12,
    max: 24,
    slide: function( event, ui ) {
        $( "#max-range" ).val(ui.value );
    }
});


$("#max-range").change(function () {
    var value = this.value;
    //console.log(value);
    $("#max").slider("value", parseInt(value));
});


$("#tenor").slider({
    range: "min",
    value: 6,
    step: 6,
    min: 6,
    max: 72,
    slide: function( event, ui ) {
        $( "#tenor-range" ).val(ui.value );
    }
});


$("#tenor-range").change(function () {
    var value = this.value;
    //console.log(value);
    $("#tenor").slider("value", parseInt(value));
});

</script>

<script src="<?=base_url();?>assets/assets/jquery-validation/dist/jquery.validate.min.js"></script> 
<script src="<?=base_url();?>assets/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js"></script> 
<script src="<?=base_url();?>assets/assets/isotope.js"></script> 
<script src="<?=base_url();?>assets/assets/morris.js-master/morris.min.js"></script> 
<script src="<?=base_url();?>assets/assets/raphael-master/raphael.min.js"></script> 
<script src="<?=base_url();?>assets/assets/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script> 
<script src="<?=base_url();?>assets/assets/waypoints.min.js"></script> 
<script src="<?=base_url();?>assets/assets/jquery.counterup.min.js"></script> 
<script src="<?=base_url();?>assets/assets/wow.min.js"></script> 
<script src="<?=base_url();?>assets/assets/owl.carousel-2/owl.carousel.min.js"></script>
<script src="<?=base_url();?>assets/js/custom.js"></script>
<? if($p2p=='P2P')
        {?>
<script src="<?=base_url();?>assets/js/jquery.datetimepicker.js"></script> 
<script src="<?=base_url();?>assets/js/jquery.formset.js"></script> 
<script src="<?=base_url();?>assets/js/materialize.js"></script> 
<script src="<?=base_url();?>assets/js/materialize.forms.js"></script>
<? }?>
<script src="<?=base_url();?>assets/js/validate.js"></script>
<script src="<?=base_url();?>assets/nouislider/nouislider.js"></script>
<script>
$(document).ready(
  function () {
	$( "#datepicker" ).datepicker({
	  changeMonth: true,//this option for allowing user to select month
	  changeYear: true, //this option for allowing user to select from year range
	  dateFormat: 'yy-mm-dd',
	  yearRange: '1950:<?=(date('Y')-17);?>'
	});
  }

);
</script>
</body></html>