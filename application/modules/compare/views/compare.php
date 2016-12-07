




<section class="checkout-section sec-pad cart-section" style="background: #eef2f2;">
    <div class="container">  
    <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 col-xs-offset-2 column form-column">
                <div class="sec-title">
                    <h2>Get Loan Offers</h2>
                    <span class="decor-line">
                        <span class="decor-line-inner"></span>
                    </span>
                </div><!-- /.sec-title -->
                <div class="default-form billing-info-form">
                                                
                    <form method="GET" action="<?=base_url()?>compare/loanoffers">
                        
                        <div class="row clearfix">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                         <div class="field-label">I am Looking for</div>
                        <select id="loantype" disabled="disabled">
                                            <option value="housing" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='housing') {  echo "selected"; }?>>Housing Loan</option>
                                             <option value="personal" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='personal') {  echo "selected"; }?>>Personal Loan</option>
                                            <option value="car" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='car') {  echo "selected"; }?>>Car & Two wheeler loans</option>
                                            <option value="lap" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='lap') {  echo "selected"; }?>>Loan Against property</option>
                                            <option value="mfs" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='mfs') {  echo "selected"; }?>>Loan Against Shares</option>
                                            <option value="unsecured" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='unsecured') {  echo "selected"; }?>>Unsecured Business loan for self employed</option>
                                            <option value="mudra" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='mudra') {  echo "selected"; }?>>Mudra loan</option>
                                            <option value="creditcard" <?php if(isset($_GET['loantype']) && $_GET['loantype']=='creditcard') {  echo "selected"; }?>>Credit Card</option>
                               
                         </select>
                         </div>
                         </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Current City</div>
                                    <input type="text" name="city" value="" placeholder="Your Current City" required >
                                    <input type="hidden" name="type" value="<?=$_GET['loantype']?>" placeholder="Your Current City" required >
                                    <input type="hidden" name="loanamount" value="<?=$_GET['loanamount']?>" placeholder="Your Current City" required >
                                </div>
                           
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">State</div>
                                    <input type="text" name="state" value="" placeholder="State" required >
                            </div>
                            
                    
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 form-bg" required>
                             <select name="gender" required>
                                <option value="">Gender</option>
                                <option value="1">Male </option>
                                <option value="2">Female</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 form-bg" required>
                           <h5 class="text-left" style="border-bottom:none; color:#ccc;">Highest Qualification</h5>
                            <select id="id_person_title" name="highestqualification">
                                <option value="0">Select</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Post Graduate">Post Graduate</option>
                                <option value="Professional">Professional</option>
                                <option value="Others">Others</option>
                            </select>
                            </div>

                             <div class="form-group col-md-12 col-sm-12 col-xs-12 form-bg">
                                    <h5 class="text-left" style="border-bottom:none; color:#ccc;">Marital Status</h5>
                                    <select id="id_person_title" name="marital_status">
                                        <option value="0">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widow">Widow</option>
                                    </select>
                                </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12 form-bg">
                                <h5 class="text-left" style="border-bottom:none; color:#ccc;">Nationality</h5>
                                <select id="id_person_title" name="nationaility">
                                    <option value="0">Select</option>
                                    <option value="Indian">Indian</option>
                                    <option value="NRI">NRI</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                        <div  class="form-group col-md-12 col-sm-12 col-xs-12 form-bg">
                            <h5 class="text-left" style="border-bottom:none; color:#ccc;">Religion</h5>
                            <select id="id_person_title" name="religion">
                                <option value="0">Select</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Christian">Christian</option>
                                <option value="Sikh">Sikh</option>
                                <option value="Jain">Jain</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                  


                            
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 form-bg" style="padding: 4px;">
                             
                               <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Occupation</div>
                                    <select id="id_person_title" name="occupation">
                                        <option value="0">Select</option>
                                        <option value="Salaried">Salaried</option>
                                        <option value="Self employed Business">Self employed Business</option>
                                        <option value="Self Employed Professional">Self Employed Professional</option>
                                        <option value="Retired">Retired</option>
                                        <option value="Student">Student</option>
                                        <option value="Home Maker">Home Maker</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                           
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <div class="field-label">Type of company employed with</div>
                                    <select id="id_person_title" name="typeofcompany">
                                        <option value="0">Select</option>
                                        <option value="Government">Government</option>
                                        <option value="PSUs">PSUs</option>
                                        <option value="MNC">MNC</option>
                                        <option value="Public Limited Company">Public Limited Company</option>
                                        <option value="Private Limited company">Private Limited company</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Proprietorship">Proprietorship</option>
                                        <option value="Others">Others</option>
                                    </select>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="field-label">Name of company </div>
                                <input name="companyname" value="" placeholder="Name of the Company" type="text" required>
                            </div>

                           
                            


                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input name="netincome" value="" placeholder="Net Monthly Income in INR" type="text" required>
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input name="currentEMI" value="" placeholder="Current EMIs in INR" type="text" required>
                            </div>

                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                             <select name="residencetype" required>
                                <option value="">Residence Type</option>
                                <option value="Own">Own </option>
                                <option value="Rented with Family">Rented with Family</option>
                                <option value="Rented">Rented</option>
                            </select>
                            </div>

                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input name="dob" value="" placeholder="Date of birth" type="date" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                            <button type="submit" class="thm-btn thm-blue-bg">View your offer</button>
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
