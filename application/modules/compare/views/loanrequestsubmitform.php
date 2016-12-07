<section class="checkout-section sec-pad cart-section" style="background: #eef2f2;">
    <div class="container">  
    <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 col-xs-offset-2 column form-column">
                <div class="sec-title">
                    <h2>Apply For <?php if(isset($_GET['type'])) { echo $_GET['type']; } ?> Loan  from <?=$_GET['bnkname']?></h2>
                      <span class="decor-line">
                        <span class="decor-line-inner"></span>
                    </span>
                </div><!-- /.sec-title -->

                <div class="default-form billing-info-form">
                 
                    <form method="POST" action="<?=base_url()?>compare/loanrequestsubmitandemail">
                        
                        <div class="row clearfix">
                           <h3>Lookin for </h3>
                                <select id="loantype" name="loantype">
                                             <option value="housing" <?php if(isset($_GET['type']) && $_GET['type']=='housing') {  echo "selected"; }?>>Housing Loan</option>
                                             <option value="personal" <?php if(isset($_GET['type']) && $_GET['type']=='personal') {  echo "selected"; }?>>Personal Loan</option>
                                            <option value="car" <?php if(isset($_GET['type']) && $_GET['type']=='car') {  echo "selected"; }?>>Car & Two wheeler loans</option>
                                            <option value="lap" <?php if(isset($_GET['type']) && $_GET['type']=='lap') {  echo "selected"; }?>>Loan Against property</option>
                                            <option value="mfs" <?php if(isset($_GET['type']) && $_GET['type']=='mfs') {  echo "selected"; }?>>Loan Against Shares</option>
                                            <option value="unsecured" <?php if(isset($_GET['type']) && $_GET['type']=='unsecured') {  echo "selected"; }?>>Unsecured Business loan for self employed</option>
                                            <option value="mudra" <?php if(isset($_GET['type']) && $_GET['type']=='mudra') {  echo "selected"; }?>>Mudra loan</option>
                                            <option value="creditcard" <?php if(isset($_GET['type']) && $_GET['type']=='creditcard') {  echo "selected"; }?>>Credit Card</option>
                               
                                </select>
                                <h4>Personal Information</h4>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Name</div>
                                    <input type="text" name="name" value="<?=$_GET['name']?>" placeholder="Your Name" required >
                                </div>
                           
                            
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="field-label">Email</div>
                                        <input type="email" name="email" value="" placeholder="Your Email Address" required >
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Mobile Number</div>
                                    <input type="text" name="mobile" value="" placeholder="Mobile Number" required >
                                </div>
                           
                            
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="field-label">DOB</div>
                                        <input type="date" name="dob" value="<?=$this->session->userdata('dob') ?>" placeholder="Date Of Birth" required >
                                </div>

                          <h4>Residential address</h4>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Street Name</div>
                                    <input type="text" name="street" value="" placeholder="Street Address" required >
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">City</div>
                                    <input type="text" name="city" value="<?=$this->session->userdata('city') ?>" placeholder="City" required >
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">State</div>
                                    <input type="text" name="state" value="<?=$this->session->userdata('state') ?>" placeholder="State" required >
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">PIN code</div>
                                    <input type="number" name="pin" value="" placeholder="PINCODE" required >
                            </div>
                            <?php if(isset($_GET['type']) && $_GET['type']=='housing') {?>
                            <h3>Loan Information - Housing</h3>
                             <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">I want a housing loan for</div>
                                    <select id="" name="loan_for" >
                                        <option value="">Purchase or Construct house property</option>
                                        <option value="7">Transfer my existing loan</option>
                                        <option value="">Still exploring property options</option>
                                     </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Property details</div>
                                    <select id="" name="property_details" >
                                        <option value="">Completed project</option>
                                        <option value="7">Under construction project</option>
                                        <option value="">Land Plot</option>
                                        <option value="7">Self Construction</option>
                                        <option value="7">Others</option>
                                     </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input name="current_value" value="" placeholder="Current Value / Cost Of Property In Rupees" type="text" required>
                            </div>
                            <?php } else if(isset($_GET['type']) && $_GET['type']=='car'){ ?>
                            <h3>Loan Information -  CAR</h3>
                             <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Car Make and Model</div>
                              <input name="carmake" value="" placeholder="Eg. Maruti 800" type="text" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">City Of Registration</div>
                              <input name="registrationcity" value="" placeholder="Eg. Delhi" type="text" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Value of Car</div>
                              <input name="valueofcar" value="" placeholder="Value of Car in Rupees" type="text" required>
                            </div>
                           
                            <?php } else if(isset($_GET['type']) && $_GET['type']=='personal'){ ?>
                             <h3>Loan Information -  Personal</h3>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Purpose</div>
                                <select name="loanfor" >
                                    <option value="Home improvement">Home improvement</option>
                                    <option value="Take over of existing loan">Take over of existing loan</option>
                                    <option value="Travel">Travel</option>
                                   <option value="Education">Education</option>
                                   <option value="Family function">Family function</option>
                                   <option value="other">other</option>
                                </select>
                            </div>
                            <?php } else if(isset($_GET['type']) && $_GET['type']=='lap'){ ?>
                             <h3>Loan Information - Loan Against Property</h3>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="<?=$this->session->userdata('loanamount')?>" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">I want a Loan Against Property for</div>
                                <select name="loanfor" >
                                    <option value="Purchase or Construct house property">Purchase or Construct house property</option>
                                    <option value="Transfer my existing loan">Transfer my existing loan</option>
                                    <option value="Other Personal Use">Other Personal Use</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Property details</div>
                                <select name="Propertydetails" >
                                    <option value="Completed Residential project">Completed Residential project</option>
                                    <option value="Under construction project">Under construction project</option>
                                    <option value="Land Plot">Land Plot</option>
                                    <option value="Self Construction">Self Construction</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                              <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Poperty value/cost of construction</div>
                                <input name="costofconstruction" value="" placeholder="Poperty value/cost of construction in Rupees" type="text" required>
                            </div>
                            <?php } else if(isset($_GET['type']) && $_GET['type']=='mfs'){ ?>
                             <h3>Loan Information -  Loan Against Shares/MFs</h3>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="<?=$this->session->userdata('loanamount')?>" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">I want a housing loan for</div>
                                <select name="loanfor" >
                                    <option value="Purchase or Construct house property">Purchase or Construct house property</option>
                                    <option value="Transfer my existing loan">Transfer my existing loan</option>
                                    <option value="Other Personal Use">Other Personal Use</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Name of listed share/MFs</div>
                                <input name="nameoflistedshare" value="" placeholder="" type="text" required>
                            </div>
                             <?php } else if(isset($_GET['type']) && $_GET['type']=='unsecured'){ ?>
                             <h3>Loan Information -  UNSECURED BUSINESS LOAN FOR SELF EMPLOYED</h3>
                             <br>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="<?=$this->session->userdata('loanamount')?>" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">I am looking for a business loan for</div>
                                <select name="loanfor" >
                                    <option value="Expansion">Expansion</option>
                                    <option value="setting up of office">setting up of office</option>
                                    <option value="Working Capital">Working Capital</option>
                                </select>
                            </div>
                            <?php } else if(isset($_GET['type']) && $_GET['type']=='mudra'){ ?>
                             <h3>Loan Information -  MUDRA LOAN</h3>
                             <br>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Loan Amount</div>
                                <input name="loanamount" value="<?=$this->session->userdata('loanamount')?>" placeholder="Loan Amount In Rupees" type="text" required>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Purpose</div>
                                <select name="loanfor" >
                                    <option value="Expansion">Expansion</option>
                                    <option value="setting up of office">setting up of office</option>
                                    <option value="Working Capital">Working Capital</option>
                                </select>
                            </div>
                           <?php } else if(isset($_GET['type']) && $_GET['type']=='creditcard'){ ?>
                             <h3>Credit Card</h3>
                             <br>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Limit Required</div>
                                <input name="loanamount" value="<?=$this->session->userdata('loanamount')?>" placeholder="Limit required in Rupees" type="text" required>
                            </div>
                            <?php } ?>
                            <div class="checkbox-field col s12 required" id="id_terms_accepted_container">
                                <input class="filled-in " id="id_terms_accepted" name="terms_accepted" type="checkbox"><label for="id_terms_accepted"><a href="#">Terms And Conditions</a></label>
                                
                            </div>
                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                            <button type="submit" class="thm-btn thm-blue-bg">Apply</button>
                            </div>
                        </div>
                      </div>  
                    </form>
                </div>
            </div>
    </div>      
        <!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.sec-pad -->


<section class="footer-cta">

    <div class="container">

        <div class="left-text pull-left">

            <h2>We provide full and specific solution for every clients & Get lifetime support from us.</h2>

        </div><!-- /.left-text pull-left -->

        <div class="right-button pull-right">

            <a href="#" class="thm-btn">Ask Consultancy</a>

        </div><!-- /.right-button -->

    </div><!-- /.container -->

</section><!-- /.footer-cta -->
<script type="text/javascript">
    $("#loantype").change(function(){
        var loantype=$("#loantype").val();
        var url=window.location.href;// get current url
         var newurl=updateQueryStringParameter(url, 'type', loantype);
         window.location.href = newurl;
        //alert(valuee);
    });
</script>
