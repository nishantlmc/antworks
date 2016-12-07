function validateName(val){    
    var re = /^[A-Za-z ]+$/;
    if(re.test(val))
      return true;
    else
      return false;     
}

function validateEmail(email) 
{
	var re =  /\S+@\S+\.\S+/;
    $a=re.test(email);
    if($a==false)
    {
    	return true;
    }
    else
    {
    	return false;
    }   
}

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if ((charCode > 46 && charCode < 58) || (charCode == 8)) {
		return true;
	}
	else {
		return false;
	}
}

function isNumberKeyWithDot(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if ((charCode >= 46 && charCode < 58) || (charCode == 8)) {
		return true;
	}
	else {
		return false;
	}
}

function validatePan(s)
{
	var ss = s.toUpperCase();
	var pattern = new RegExp("[A-Z]{5}[0-9]{4}[A-Z]{1}");
	var status = pattern.test(ss);
	if (status) {
	  return true;
	}else
	{
		return false;
	}
}

function getAge(bday){
	var validDOB = false;
	
	var today = new Date(); 
	var nowyear = today.getFullYear();
	
	var bdate = bday.replace(/-/g,"-");
	d = bdate.split("-");
	var byr = parseInt(d[0]); 
	if (byr <1900) {byr = byr + 2000}
	var bmth = parseInt(d[1],10);   // radix 10!
	var bdy = parseInt(d[2],10);   // radix 10!
	
	checkValidDate(byr,bmth,bdy);
	//if (!validDOB) {return false}
	
	var age = nowyear - byr;
	var nowmonth = today.getMonth();  // months are 0-11
	var nowday = today.getDate();
	var nowmonth_new = nowmonth+1;
	
	var new_age = age;
	if (bmth > nowmonth_new)
	{
		var new_age = age;
	}  // next birthday not yet reached
	else if((bmth == nowmonth_new) && (nowday < bdy))
	{
		var new_age = age - 1;
	}  // next birthday not yet reached
	
	//alert('You are ' + new_age + ' years old'); 
	if(new_age >= 18)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function checkValidDate(yr,mmx,dd) {

	var today = new Date(); 
	var nowyear = today.getFullYear();
	if (yr <1910 || yr > nowyear-1) {  // you may want to change this to some other year!
		//alert ("Impossible Year Of Birth!")
		return false;
	}

	mm = mmx-1;  // remember that in Javascript date objects the months are 0-11
	var nd = new Date();
	nd.setFullYear(yr,mm,dd);  // format YYYY,MM(0-11),DD
	
	var ndmm = nd.getMonth();
	if (ndmm != mm)
	{
		//alert (dd + "-" + mmx + "-" + yr  + " is an Invalid Date!");
		validDOB = false; 
		return validDOB;
	}
	else
	{
		//alert (dd + "-" + mmx + "-" + yr  + " is a validDOB Date");
		validDOB = true;
		return validDOB;
	}
}

function add_user_valid()
{
	$(".errors-class").html("");
	//$(".help-block").css('display', 'none');
	
	if($("#username").val()=="")
	{
		$("#username-error").html("Please fill out this field.");
		$("#username").focus();
		$("#username").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#password").val()=="")
	{
		$("#password-error").html("Please fill out this field.");
		$("#password").focus();
		$("#password").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#fullname").val()=="")
	{
		$("#fullname-error").html("Please fill out this field.");
		$("#fullname").focus();
		$("#fullname").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#email").val()=="")
	{
		$("#email-error").html("Please fill out this field.");
		$("#email").focus();
		$("#email").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#email").val()!="") && validateEmail($("#email").val()))
	{
		$("#email-error").html("Please fill valid email ID.");
		$("#email").focus();
		$("#email").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#mobile").val()=="")
	{
		$("#mobile-error").html("Please fill out this field.");
		$("#mobile").focus();
		$("#mobile").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#mobile").val()!="") && $("#mobile").val().length<10)
	{
		$("#mobile-error").html("Phone cann't be less than 10 digits.");
		$("#mobile").focus();
		$("#mobile").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#datepicker-autoclose").val()=="")
	{
		$("#datepicker-autoclose-error").html("Please fill out this field.");
		$("#datepicker-autoclose").focus();
		$("#datepicker-autoclose").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#datepicker-autoclose").val()!="") && (getAge($("#datepicker-autoclose").val())==false))
	{
		$("#datepicker-autoclose-error").html("Please check your DOB.");
		$("#datepicker-autoclose").focus();
		$("#datepicker-autoclose").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#gender").val()=="")
	{
		$("#gender-error").html("Please fill out this field.");
		$("#gender").focus();
		$("#gender").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#state").val()=="")
	{
		$("#state-error").html("Please fill out this field.");
		$("#state").focus();
		$("#state").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#city").val()=="")
	{
		$("#city-error").html("Please fill out this field.");
		$("#city").focus();
		$("#city").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#address").val()=="")
	{
		$("#address-error").html("Please fill out this field.");
		$("#address").focus();
		$("#address").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#profilepic").val()=="")
	{
		$("#profilepic-error").html("Please fill out this field.");
		$("#profilepic").focus();
		$("#profilepic").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	
	
	else
	{
		return true;
	}
}

function add_role_valid()
{
	$(".errors-class").html("");
	//$(".help-block").css('display', 'none');
	
	if($("#role").val()=="")
	{
		$("#role-error").html("Please fill out this field.");
		$("#role").focus();
		$("#role").css('border-color', 'red');
		return false;
	}
	
	
	else
	{
		return true;
	}
}

function edit_user_valid()
{
	$(".errors-class").html("");
	//$(".help-block").css('display', 'none');
	
	if($("#username").val()=="")
	{
		$("#username-error").html("Please fill out this field.");
		$("#username").focus();
		$("#username").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}/*
	else if($("#password").val()=="")
	{
		$("#password-error").html("Please fill out this field.");
		$("#password").focus();
		$("#password").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}*/
	else if($("#fullname").val()=="")
	{
		$("#fullname-error").html("Please fill out this field.");
		$("#fullname").focus();
		$("#fullname").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#email").val()=="")
	{
		$("#email-error").html("Please fill out this field.");
		$("#email").focus();
		$("#email").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#email").val()!="") && validateEmail($("#email").val()))
	{
		$("#email-error").html("Please fill valid email ID.");
		$("#email").focus();
		$("#email").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#mobile").val()=="")
	{
		$("#mobile-error").html("Please fill out this field.");
		$("#mobile").focus();
		$("#mobile").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#mobile").val()!="") && $("#mobile").val().length<10)
	{
		$("#mobile-error").html("Phone cann't be less than 10 digits.");
		$("#mobile").focus();
		$("#mobile").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#datepicker-autoclose").val()=="")
	{
		$("#datepicker-autoclose-error").html("Please fill out this field.");
		$("#datepicker-autoclose").focus();
		$("#datepicker-autoclose").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if(($("#datepicker-autoclose").val()!="") && (getAge($("#datepicker-autoclose").val())==false))
	{
		$("#datepicker-autoclose-error").html("Please check your DOB.");
		$("#datepicker-autoclose").focus();
		$("#datepicker-autoclose").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#gender").val()=="")
	{
		$("#gender-error").html("Please fill out this field.");
		$("#gender").focus();
		$("#gender").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#city").val()=="")
	{
		$("#city-error").html("Please fill out this field.");
		$("#city").focus();
		$("#city").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}
	else if($("#address").val()=="")
	{
		$("#address-error").html("Please fill out this field.");
		$("#address").focus();
		$("#address").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}/*
	else if($("#profilepic").val()=="")
	{
		$("#profilepic-error").html("Please fill out this field.");
		$("#profilepic").focus();
		$("#profilepic").css('background-image','linear-gradient(#e34539, #e34539),linear-gradient(rgba(120,130,140,0.13), rgba(120,130,140,0.13)');
		return false;
	}*/
	
	
	else
	{
		return true;
	}
}


//validation advanced form borrower

function validate_advanced1()
{
	$(".errors-class").html("");
	if(($("#pan").val()!="") && validatePan($("#pan").val())==false)
	{
		$("#pan-error").html("Please fill valid PAN Number.");
		$("#pan").focus();
		return false;
	}
	else if(($("#aadhaar").val()!="") && $("#aadhaar").val().length<12)
	{
		$("#aadhaar-error").html("Aadhaar can't be less than 12 digits.");
		$("#aadhaar").focus();
		return false;
	}
	
	else
	{
		$('.div1').removeClass('current');
		$('.div2').addClass('current');
		$('.div1').addClass('done');
		$("#div1").hide();
		$("#div2").show();
		return true
	}
}
function previous1()
{
	$('.div2').removeClass('current');
	$('.div1').removeClass('done');
	$('.div1').addClass('current');
	$("#div2").hide();
	$("#div1").show();
}
function validate_finish()
{
	$(".errors-class").html("");
	if($("#occupation").val()=="")
	{
		$("#occupation-error").html("Please fill out this field.");
		$("#occupation").focus();
		return false;
	}
	else if($("#investments").val()=="")
	{
		$("#investments-error").html("Please select this field.");
		$("#investments").focus();
		return false;
	}
	else if($("#min_loan_preference").val()=="")
	{
		$("#min_loan_preference-error").html("Please fill out this field.");
		$("#min_loan_preference").focus();
		return false;
	}
	else if(($("#min_loan_preference").val()!="") && (($("#min_loan_preference").val())<100000))
	{
		$("#min_loan_preference-error").html("Loan Amounnt is not less than 1 Lac");
		$("#min_loan_preference").focus();
		return false;
	}
	else if(($("#min_loan_preference").val()!="") && (($("#min_loan_preference").val())>20000000))
	{
		$("#min_loan_preference-error").html("Loan Amounnt is not greater than 2 Crore");
		$("#min_loan_preference").focus();
		return false;
	}
	else if($("#max_loan_preference").val()=="")
	{
		$("#max_loan_preference-error").html("Please fill out this field.");
		$("#max_loan_preference").focus();
		return false;
	}
	else if(($("#max_loan_preference").val()!="") && (($("#max_loan_preference").val())<100000))
	{
		$("#max_loan_preference-error").html("Loan Amounnt is not less than 1 Lac");
		$("#max_loan_preference").focus();
		return false;
	}
	else if(($("#max_loan_preference").val()!="") && (($("#max_loan_preference").val())>20000000))
	{
		$("#max_loan_preference-error").html("Loan Amounnt is not greater than 2 Crore");
		$("#max_loan_preference").focus();
		return false;
	}
	else if(($("#min_interest_rate").val()=="") || ($("#max_interest_rate").val()==""))
	{
		$("#min_interest_rate-error").html("Please fill out this field.");
		$("#min_interest_rate").focus();
		return false;
	}
	else if(($("#min_tenor").val()=="") || ($("#max_tenor").val()==""))
	{
		$("#min_tenor-error").html("Please select this field.");
		$("#min_tenor").focus();
		return false;
	}
	else if($("#description").val()=="")
	{
		$("#description-error").html("Please fill out this field.");
		$("#description").focus();
		return false;
	}
	
	else
	{
		$("#validation").submit();
	}
	
}

function validate_lenders_proposal()
{
	$(".errors-class").html("");
	//$(".help-block").css('display', 'none');
	
	if($("#loan_amount").val()=="")
	{
		$("#loan_amount-error").html("Please fill out this field.");
		$("#loan_amount").focus();
		return false;
	}
	else if($("#interest_rate").val()=="")
	{
		$("#interest_rate-error").html("Please fill out this field.");
		$("#interest_rate").focus();
		return false;
	}
	else if($("#proposal_description").val()=="")
	{
		$("#proposal_description-error").html("Please fill out this field.");
		$("#proposal_description").focus();
		return false;
	}	
	
	else
	{
		return true;
	}
}
