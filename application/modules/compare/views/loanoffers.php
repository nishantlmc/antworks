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

       <li>&nbsp;<i class="fa fa-university"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup2">Processing Fee Rate</a> </li>
          <li>&nbsp;<i class="fa fa-university"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup3">Tenure</a> </li>
          <li>&nbsp;<i class="fa fa-university"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup4">Minimum Loan Amount</a> </li>
     <!--  <li>&nbsp;<i class="fa fa-line-chart"></i> &nbsp; <a class="js-open-modal " href="#" data-modal-id="popup2">Bank</a></li> -->
    </ul>
    
    
   
    
    
    
    
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

    <div id="popup2" class="modal-box">
 
  <div class="modal-body col-md-6" style="background:#FBFBFB;margin-top: 14px;">
  <footer> <a  class="js-modal-close">X</a> </footer>
              <div class="single-sidebar col-md-12">
                    <div class="price-filter">
                        <div class="sec-title medium">
                            <h2>Filter By Processing Fee</h2>
                            <hr>
                        </div><!-- /.sec-title -->
                       
                          <div class="com-md-3">
                          <input type="text" placeholder="Min Processing fee in %" class="form-control" id="min_processing_feee">
                          <input class="form-control" type="text" placeholder="Max Processing fee in %" id="max_processing_feee">
                          </div>
                           <div class="form-group clearfix">
                            <button type="button" id="processingfee_filter">Filter</button>                             
                        </div>

                    </div><!-- /.categories-widget -->
                </div>
                 
  </div>

</div>


    <div id="popup3" class="modal-box">
 
  <div class="modal-body col-md-6" style="background:#FBFBFB;margin-top: 14px;">
  <footer> <a  class="js-modal-close">X</a> </footer>
              <div class="single-sidebar col-md-12">
                    <div class="price-filter">
                        <div class="sec-title medium">
                            <h2>Filter By Tenure</h2>
                            <hr>
                        </div><!-- /.sec-title -->
                       
                          <div class="com-md-3">
                            <input type="text" placeholder="Min tenure in months" class="form-control" id="min_tenure" >
                            <input class="form-control" type="text" placeholder="Max tenure in months" id="max_tenure">
                          </div>
                           <div class="form-group clearfix">
                            <button type="button" id="tenure_filter">Filter</button>                             
                        </div>

                    </div><!-- /.categories-widget -->
                </div>
                 
  </div>

</div>

    <div id="popup4" class="modal-box">
 
  <div class="modal-body col-md-6" style="background:#FBFBFB;margin-top: 14px;">
  <footer> <a  class="js-modal-close">X</a> </footer>
              <div class="single-sidebar col-md-12">
                    <div class="price-filter">
                        <div class="sec-title medium">
                            <h2>Filter By Loan Amount</h2>
                            <hr>
                        </div><!-- /.sec-title -->
                       
                          <div class="com-md-3"><input class="form-control" type="text" placeholder="Minimum Loan Amount in Rupees" id="max_loan">
                          </div>
                           <div class="form-group clearfix">
                            <button type="button" id="maxloan_filter">Filter</button>                             
                        </div>

                    </div><!-- /.categories-widget -->
                </div>
                 
  </div>

</div>

  </div>

  <ul class="filter-tags">
  <?php if(isset($_GET['min_int_rate']) && !$_GET['min_int_rate']==''){ ?>
    <li id="clearintrestfilter">X&nbsp; Interest Rate: <?=$_GET['min_int_rate']; ?> - <?=$_GET['max_int_rate']; ?>%</li>
    <?php  } ?>
     <?php if(isset($_GET['max_processing_fee'])&& !$_GET['max_processing_fee']==''){ ?>
    <li id="clearprocessingfeefilter">X&nbsp; Processing Fee: <?=$_GET['min_processing_fee']; ?> - <?=$_GET['max_processing_fee']; ?>%</li>
    <?php  } ?>
     <?php if(isset($_GET['min_tenure'])&& !$_GET['min_tenure']==''){ ?>
      <li id="cleartenurefilter">X&nbsp; Tenure: <?=$_GET['min_tenure']; ?> - <?=$_GET['max_tenure']; ?> Months</li>
    <?php  } ?>
     <?php if(isset($_GET['max_loan_amount'])&& !$_GET['max_loan_amount']==''){ ?>
      <li id="clearmaxloanfilter">X&nbsp; Minimum Loan Amount in Rs. : <?=$_GET['max_loan_amount']; ?></li>
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
              <td><span id="loanamnt_<?=$bankdata->id; ?>"><i class="fa fa-rupee"></i><?php echo $bankdata->min_loan_amount; ?> - <?=$bankdata->max_loan_amount; ?></span></td>
              <td><span id="tenure_<?=$bankdata->id; ?>"><?php echo $bankdata->tenure_month_start; ?> - <?php echo $bankdata->tenure_month_end;?> Months</span></td>
              <td id="description_<?=$bankdata->id; ?>" style="display:none"><?php echo $bankdata->loan_description; ?></td>
               <td><a href="#" data-toggle="modal" data-target="#loanApply" class="thm-btn" onclick="fillapplyform('<?=$bankdata->id; ?>')" >Apply</a></td>
              
            </tr>
             <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</section>

<!-- /.sec-pad -->




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
$('#popup1,#popup2,#popup3,#popup4').hide();
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

var int1=0;
var int2=25;

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



// auto fill apply now form according to the bank applied
 function fillapplyform(a){
    //alert(a);   
    var name=$("#name_"+a).text();
    var interest=$("#interest_"+a).text();
    var processing=$("#processing_"+a).text();
    var amount=$("#loanamnt_"+a).text();
    var tenure=$("#tenure_"+a).text();
    var description=$("#description_"+a).text();
    $("#apply_name").text(name);
    $("#apply_interest").text(interest);
    $("#apply_processing").text(processing);
    $("#apply_amount").text(amount);
    $("#apply_tenure").text(tenure);
    $("#apply_desc").text(description);
    var s=window.location.href;// get current url
    var newurl='<?=base_url()?>compare/loanrequestsubmit?bnkname='+name+'&type=<?=$this->session->userdata('loantype') ?>';
     window.location.href = newurl;


}
</script>