<section class="client-skill-sec has-dot-pattern short-banner">
	<div class="container">
				
	</div><!-- /.container -->
</section>

<section class="service-box-three sec-pad">
  <div class="container">
  <div id="tabs-container">
  <ul class="tabs-menu">
    <li class="current"><a href="#tab-1"><img src="<?=base_url();?>assets/img/Grad_Admissions_Icon.png"><span>Quick Quote</span></a></li>
    <li><a href="#tab-2"><img src="<?=base_url();?>assets/img/Grad_Admissions_Icon.png"><span>View & Compare</span></a></li>
    <li><a href="#tab-3"><img src="<?=base_url();?>assets/img/Grad_Admissions_Icon.png"><span>P2P Lender</span></a></li>
    <li><a href="#tab-4"><img src="<?=base_url();?>assets/img/Grad_Admissions_Icon.png"><span>Bid your proposal</span></a></li>
  </ul>
  <div class="filter">
   <ul>
      <li> Filter by :</li>
      <li>&nbsp;<i class="fa fa-university"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup1">Interest Rate</a> </li>
     <!--  <li>&nbsp;<i class="fa fa-line-chart"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup2">Bank</a></li> -->
    </ul>
    
    
    <div id="popup2" class="modal-box">
 
  <div class="modal-body col-md-6" style="background:#FBFBFB; margin-top: 14px;">
    <footer> <a  class="js-modal-close">X</a> </footer>
  <div class="sec-title medium">
   <h2>Bank Name</h2>
     <hr>
   </div>
   <?php 
   if(isset($_GET['bank_id'])){

   // $checked='checked';
   }
   else{
    $checked='checked';
   }
   ?>
       <?php 
          if(isset($_GET['bank_id'])){
          $lol=$_GET['bank_id'];
          //echo sizeof($lol);
          for ($i=0; $i < sizeof($lol); $i++) { 
            echo $lol[$i];
            echo "<br>";
          }
          
          // echo $lol[1];
          // echo $lol[2]; 
           } 
        ?>
       <?php  foreach ($banklist as $banklist) { ?>
       <div class="checkbox checkbox-inline checkbox-success ">
                        <input type="checkbox" class="styled" id="<?php echo $banklist->bank_id; ?>" value="option1" <?php echo $checked; ?>>
                        <label for="inlineCheckbox1">  <?php echo $banklist->name; ?> </label>
       </div>
       <?php } ?>
  
                 
                   
  </div>
 
</div>
    
    
    
    
    <div id="popup1" class="modal-box">
 
  <div class="modal-body col-md-6" style="background:#FBFBFB;margin-top: 14px;">
  <footer> <a  class="js-modal-close">X</a> </footer>
              <div class="single-sidebar col-md-12">
                    <div class="price-filter">
                        <div class="sec-title medium">
                            <h2>Filter By Interest Rate</h2>
                            <hr>
                        </div><!-- /.sec-title -->
                        <div class="range-slider-price" id="range-slider-price"></div>

                        <div class="form-group clearfix">
                            <button type="button" id="interestrate_filter">Filter</button>                           
                            <p>Rate: <span id="min-value-rangeslider"></span>-%<span id="max-value-rangeslider"></span></p>
                        </div>

                    </div><!-- /.categories-widget -->
                </div>
                 
  </div>

</div>
    
  </div>

  <ul class="filter-tags">
  <?php if(isset($_GET['min_int_rate'])){ ?>
    <li id="clearintrestfilter">X&nbsp; Interest Rate: <?=$_GET['min_int_rate']; ?> - <?=$_GET['max_int_rate']; ?>%</li>
    <?php  } ?>
   <!--  <li>X&nbsp; HDFC Bank</li>
    <li>X&nbsp; IndusInd Bank</li>
    -->
  </ul>

  <div class="tab">
    <div id="tab-1" class="tab-content">
    <h3>Loan Offers</h3>

      <div class="filter-data">
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th>Bank</th>
              <th> Interest Rate Range </th>
              <th>Processing Fee Range</th>
                <th>Loan Amount </th>
                <th>Tenure Range </th>
                <th></th>
            </tr>
          </thead>
          <tbody>
          <?php  foreach ($bankdata as $bankdata) { ?>
            <tr>
             <td id="name_<?=$bankdata->id; ?>"> <!-- <img src="<?php echo $bankdata->bank_img; ?>" alt="<?php echo $bankdata->name; ?>"> --><?php echo $bankdata->name; ?></td>
              <td><span id="interest_<?=$bankdata->id; ?>"><?php echo $bankdata->min_int_rate; ?> - <?php echo $bankdata->max_int_rate; ?> %</span><br>
              <span>Fixed</span>
              </td>
              <td><span id="processing_<?=$bankdata->id; ?>"><?php echo $bankdata->min_processing_fee; ?> - <?php echo $bankdata->max_processing_fee; ?> %</span></td>
              <td><span id="loanamnt_<?=$bankdata->id; ?>"><i class="fa fa-rupee"></i><?php echo $bankdata->max_loan_amount; ?> - <?=$bankdata->max_loan_amount; ?></span></td>
              <td><span id="tenure_<?=$bankdata->id; ?>"><?php echo $bankdata->tenure_month_start; ?> - <?php echo $bankdata->tenure_month_end;?> Months</span></td>
              <td id="description_<?=$bankdata->id; ?>" style="display:none"><?php echo $bankdata->loan_description; ?></td>
               <td><a href="#" data-toggle="modal" data-target="#loanApply" class="thm-btn" onclick="fillapplyform('<?=$bankdata->id; ?>')" >Apply</a></td>
              
            </tr>
             <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div id="tab-2" class="tab-content"> <div class="filter-data">
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
                <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>Username</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div></div>
    <div id="tab-3" class="tab-content"> <div class="filter-data">
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
                <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>Username</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div> </div>
    <div id="tab-4" class="tab-content"> <div class="filter-data">
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
                <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>Username</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div> </div>
  </div>
  <!-- /.container --> 
</section>

<!-- /.sec-pad -->

<!-- Loan Apply Modal -->
<div id="loanApply" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apply for this Loan</h4>
      </div>
      <div class="modal-body">
    
    <table class="table table-bordered">
          <thead>
            <tr>
              <th>Bank</th>
              <th > Interest Rate Range </th>
              <th >Processing Fee Range</th>
                <th >Loan Amount </th>
                <th >Tenure Range </th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td  id="apply_name">Bank Name</td>
              <td id="apply_interest"><span>0% - 25%</span><br>
              <span >Fixed</span>  </td>
              <td id="apply_processing"><span>0% to 25%</span></td>
              <td><span id="apply_amount"><i class="fa fa-rupee"></i> 30L Max</span></td>
              <td><span id="apply_tenure">1-5 Years</span></td>
            </tr> 
          </tbody>
        </table>
    
    <p id="apply_desc">Loan Description goes here!!</p>
    
    <h2>Apply Now</h2>
    
    <form>
<div>Name <input type="text" class="form-control" placeholder="Name"><br>
Mobile<input type="text" class="form-control" placeholder="Mobile"><br>
Email<input type="text" class="form-control" placeholder="Email"><br>
Pan Card<input type="text" class="form-control" placeholder="PAN Number"><br>
Address<input type="text" class="form-control" placeholder="Address"><br>
Gender <select  class="form-control" placeholder="Gender ">
<option>Male</option>
<option>Female</option>
</select><br>
<input class="btn btn-success" type="submit">
</div>
    </form>
    
      </div>
    </div>

  </div>
</div>



<section class="footer-cta">

    <div class="container">

        <div class="left-text pull-left">

            <h2>We provide full and specific solution for every clients & Get lifetime support from us.</h2>

        </div><!-- /.left-text pull-left -->

        <div class="right-button pull-right">

            <a href="#" class="thm-btn">Ask Consultancy</a>

        </div><!-- /.right-button -->

    </div><!-- /.container -->

</section>

<script src="<?=base_url();?>assets/assets/nouislider/nouislider.js"></script>
<script>

$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
</script>

<script>
$(function(){
$('#popup1,#popup2,#popup3').hide();
var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

    $('a[data-modal-id]').click(function(e) {
        e.preventDefault();
        $('.modal-box').hide();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
        var modalBox = $(this).attr('data-modal-id');
        $('#'+modalBox).fadeIn($(this).data());
    });  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) /2 ,
        left: ($(window).width() - $(".modal-box").outerWidth()) /2
    });
});
 
$(window).resize();
 
});


function priceFilter() {
  <?php if(isset($_GET['max_int_rate'])){ ?>
var int1=<?php echo $_GET['min_int_rate'];  ?>;
var int2=<?php echo $_GET['max_int_rate']; ?>;
 <?php } 
else { ?>
var int1=0;
var int2=25;
 <?php } ?>
    if ($('.range-slider-price').length) {

        var priceRange = document.getElementById('range-slider-price');

        noUiSlider.create(priceRange, {
            start: [int1,int2],
            limit: 200,
            behaviour: 'drag',
            connect: true,
            range: {
                'min': 0.05,
                'max': 25
            },
      pips: { 
    mode: 'steps',
    stepped: true,
    density: 4
  }
        });

        var limitFieldMin = document.getElementById('min-value-rangeslider');
        var limitFieldMax = document.getElementById('max-value-rangeslider');

        priceRange.noUiSlider.on('update', function(values, handle) {
            (handle ? $(limitFieldMax) : $(limitFieldMin)).text(values[handle]);
        });
    };
}
</script>