<br>  <br>  <br>
<section>
        <div class="container">  
          <div class="row">
            <div class="col-md-12">
            <h3>Application id: #<?=date('YmdHi');?></h3>
              <h4>Thank you for your Application. You will hear from us soon regarding your loan application. If you have any question or suggestions write to us info@antworksmoney.com or call us on our number: 0124-18011-2211</h4>
            </div>
          </div>
        </div>

</section>
           <br>  
<section>
  <dir class="container">
  <dir class="row">
                      <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                <div class="col-md-3"><a href="#"  class="link-btn ">Check out your loan prediction </a></div>
                                <div class="col-md-3"><a href="#" class="link-btn ">Compare rates and Apply</a></div>
                                <div class="col-md-3"><a href="#" class="link-btn ">List proposal on P2P network</a></div>
                                <div class="col-md-3"><a href="#" class="link-btn ">Talk to experts</a></div>
                      </div> 
  </dir>
    
  </dir>
             
</section>
<section>
  <dir class="container">
  <dir class="row">
  <?php
    echo "<h2>Application Details</h2>Name : ".$_POST['name']."<br>";
    echo "Mobile : ".$_POST['mobile']."<br>";
    echo "Email : ".$_POST['email']."<br>";
    echo "Street Address : ".$_POST['street']."<br>";
    echo "Pin Code : ".$_POST['pin']."<br>";
    echo "Loan Type: ".$_POST['loantype']."<br>";
    //echo "Loan Amount Rs.: ".$this->session->userdata('loanamount')."<br>";

if(isset($_POST['loanamount'])){
  echo "Loan Amount: Rs.".$_POST['loanamount']."<br>";
}
if(isset($_POST['carmake'])){
  echo "Car Make:". $_POST['carmake']."<br>";
}
if(isset($_POST['registrationcity'])){
  echo "Registration City:" .$_POST['registrationcity']."<br>";
}
if(isset($_POST['loanfor'])){
  echo "Loan for :".$_POST['loanfor']."<br>";
}
if(isset($_POST['Propertydetails'])){
  echo "Property Details :".$_POST['Propertydetails']."<br>";
}
if(isset($_POST['costofconstruction'])){
  echo "Cost Of construction :".$_POST['costofconstruction']."<br>";
}
if(isset($_POST['nameoflistedshare'])){
  echo "Name of listed Share :". $_POST['nameoflistedshare']."<br>";
}



    echo "City: ".$this->session->userdata('city')."<br>";
    echo "State: ".$this->session->userdata('state')."<br>";
    echo "Gender: ".$this->session->userdata('gender')."<br>";
    echo "Qualification: ".$this->session->userdata('qualification')."<br>";
    echo "Marital status: ".$this->session->userdata('maritalstatus')."<br>";
    echo "Nationality: ".$this->session->userdata('nationality')."<br>";
    echo "religion: ".$this->session->userdata('religion')."<br>";
    echo "occupation: ".$this->session->userdata('occupation')."<br>";
    echo "typeofcompany: ".$this->session->userdata('typeofcompany')."<br>";
    echo "company_name: ".$this->session->userdata('company_name')."<br>";
    echo "netincome: ".$this->session->userdata('netincome')."<br>";
    echo "residencetype: ".$this->session->userdata('residencetype')."<br>";
    echo "currentEMI: ".$this->session->userdata('currentEMI')."<br>";
    echo "DOB: ".$this->session->userdata('dob')."<br>";
    ?>

     </dir>
    
  </dir>
             
</section>