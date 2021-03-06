<section class="client-skill-sec has-dot-pattern short-banner">
	<div class="container">
				
	</div><!-- /.container -->
</section>

<section class="service-box-three sec-pad">
  <div class="container">
  <div id="tabs-container">
  <ul class="tabs-menu">
    <li class="current"><a href="#tab-1"><img src="<?=base_url()?>assets/img/Grad_Admissions_Icon.png"><span>Quick Quote</span></a></li>
    <li><a href="#tab-2"><img src="<?=base_url()?>assets/img/Grad_Admissions_Icon.png"><span>View & Compare</span></a></li>
    <li><a href="#tab-3"><img src="<?=base_url()?>assets/img/Grad_Admissions_Icon.png"><span>P2P Lender</span></a></li>
    <li><a href="#tab-4"><img src="<?=base_url()?>assets/img/Grad_Admissions_Icon.png"><span>Bid your proposal</span></a></li>
  </ul>
  <div class="clearfix"></div><br><br><br>
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-wrap="false">

<form action="<?=base_url()?>compare/loanoffers">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">PERSONAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-offset-3 col-md-2">
        <h3 style="border-bottom:none; color:#ccc; padding-top:25px;">Gender</h3>
      </div>
      <div class="col-md-2">
        <div style="text-align:left;">
          <label for="male">
          <div style="width:83px; height:83px; background-color:#e7edef; line-height:83px; border-radius:50%; float:left; position:relative;">
            <img src="<?=base_url()?>assets/img/ico-male.png">
            <input style="position:absolute;top: 28px;width:20px;height:20px;margin-left:0px;left: -10px;opacity:1;" type="radio" name="radio" id="male" value="radio" />
          </div>
          <span style="padding-left:10px; line-height:83px; font-size:18px; color:#4E4D4D;">Male</span>
          </label>
        </div>
      </div>
      <div class="col-md-2">
        <div style="text-align:left;">
          <label for="female">
          <div style="width:83px; height:83px; background-color:#e7edef; line-height:83px; border-radius:50%; float:left; position:relative;">
            <img src="<?=base_url()?>assets/img/ico-female.png">
            <input style="position:absolute;top: 28px;width:20px;height:20px;margin-left:0px;left: -10px;opacity:1;" type="radio" name="radio" id="female" value="radio" />
          </div>
          <span style="padding-left:10px; line-height:83px; font-size:18px; color:#4E4D4D;">Female</span>
          </label>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
  
    <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">PERSONAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-offset-3 col-md-3">
        <h3 style="border-bottom:none; color:#ccc; padding-top:15px;"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;&nbsp;Date of Birth</h3>
      </div>
      <div class="col-md-3">
        <input data-date-format="Y-m-d" data-form-control="date" data-lang="en" id="id_date_of_birth" name="date_of_birth" type="text">
      </div>
    </div>
      </div>
    </div>
    </div>
  
  <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">PERSONAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h5 class="text-left" style="border-bottom:none; color:#ccc;">Highest Qualification</h5>
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="Undergraduate">Undergraduate</option>
          <option value="Graduate">Graduate</option>
          <option value="Post Graduate">Post Graduate</option>
          <option value="Professional">Professional</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <h5 class="text-left" style="border-bottom:none; color:#ccc;">Marital Status</h5>
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="">Single</option>
          <option value="">Married</option>
          <option value="">Divorced</option>
          <option value="">Widow</option>
        </select>
      </div>
      <div class="col-md-6">
        <h5 class="text-left" style="border-bottom:none; color:#ccc;">Nationality</h5>
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="">Indian</option>
          <option value="">NRI</option>
          <option value="">Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <h5 class="text-left" style="border-bottom:none; color:#ccc;">Religion</h5>
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="">Hindu</option>
          <option value="">Muslim</option>
          <option value="">Christian</option>
          <option value="">Sikh</option>
          <option value="">Jain</option>
          <option value="">Others</option>
        </select>
      </div>
    </div>
      </div>
    </div>
    </div>
  
  <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">PERSONAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h3 style="border-bottom:none; color:#ccc; padding-top:20px;">Residential Address</h3>
      </div>
      <div class="col-md-4">
        <div class="input-field col s12 required" id="id_email_container">
          <input id="id_email" name="email" type="email">
          <label for="id_email">City</label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-field col s12 required" id="id_email_container">
          <input id="id_email" name="email" type="email">
          <label for="id_email">State</label>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
  
  <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">OCCUPATION AND FINANCIAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-offset-2 col-md-3">
        <h3 style="border-bottom:none; color:#ccc; padding-top:15px;">Occupation</h3>
      </div>
      <div class="col-md-4">
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="">Salaried</option>
          <option value="">Self employed Business</option>
          <option value="">Self Employed Professional</option>
          <option value="">Retired</option>
          <option value="">Student</option>
          <option value="">Home Maker</option>
          <option value="">Others</option>
        </select>
      </div>
    </div>
      </div>
    </div>
    </div>
  
  <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">OCCUPATION AND FINANCIAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-offset-2 col-md-4">
        <h5 class="text-left" style="border-bottom:none; color:#ccc; margin-bottom:22px;">Type of company employed with</h5>
        <select id="id_person_title" name="person_title">
          <option value="0">Select</option>
          <option value="">Government</option>
          <option value="">PSUs</option>
          <option value="">MNC</option>
          <option value="">Public Limited Company</option>
          <option value="">Private Limited company</option>
          <option value="">Partnership</option>
          <option value="">Proprietorship</option>
          <option value="">Others</option>
        </select>
      </div>
      <div class="col-md-4">
        <h5 class="text-left" style="border-bottom:none; color:#ccc;">Name of company</h5>
        <div class="input-field col s12 required" id="id_email_container">
          <input id="id_email" name="email" type="email">
          <label for="id_email"></label>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
  
  <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">OCCUPATION AND FINANCIAL INFORMATION</h3>
    <hr>
    <div class="row">
      <div class="col-md-offset-2 col-md-4">
        <div class="input-field col s12 required" id="id_email_container">
          <input id="id_email" name="email" type="email">
          <label for="id_email">Net Monthly Income in INR</label>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-field col s12 required" id="id_email_container">
          <input id="id_email" name="email" type="email">
          <label for="id_email">Current EMIs in INR</label>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
  
   <div class="item">
      <div class="formsblock">
    <div class="formsblock-inner">
        <h3 style="margin-bottom:30px; border-bottom:none;">View Loan Offers</h3>
    <hr>
    <div class="row">
      <div class="col-md-8">
        <div class="input-field col s12 required" id="id_email_container">
          <input id="" name="View Loan Offers" type="submit" class="btn btn-success">
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>


  </div>
  </form>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  
    <i class="fa fa-angle-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br>
  </div>
  <!-- /.container --> 
</section>

<!-- /.sec-pad -->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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



