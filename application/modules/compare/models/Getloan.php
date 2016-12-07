<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getloan extends CI_model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function loan_details()
	{
		
	$this->load->database();
	$searchquery="SELECT * FROM bank_loan WHERE status=1  ";
	if(isset($_GET['min_int_rate']) ){
		$max_int_rate=$_GET['max_int_rate'];
		$min_int_rate=$_GET['min_int_rate'];
		if($min_int_rate=='' OR $max_int_rate==''){}
		else{
		$searchquery=$searchquery.' AND min_int_rate >='.$min_int_rate.' AND max_int_rate <='.$max_int_rate;
		}
	}
 // filter by processing fee
 if(isset($_GET['max_processing_fee']) ){
		$max_processing_fee=$_GET['max_processing_fee'];
		$min_processing_fee=$_GET['min_processing_fee'];
		if($min_processing_fee=='' OR $max_processing_fee==''){}
		else{
		$searchquery=$searchquery.' AND min_processing_fee >='.$min_processing_fee.' AND max_processing_fee <='.$max_processing_fee;
		}
	}

	// Filter By Tenure
	 if(isset($_GET['min_tenure']) ){
		$max_tenure=$_GET['max_tenure'];
		$min_tenure=$_GET['min_tenure'];
		if($min_tenure=='' OR $max_tenure==''){}
		else{
		$searchquery=$searchquery.' AND tenure_month_start >='.$min_tenure.' AND tenure_month_end <='.$max_tenure;
		}
	}
// Filter By MIN Loan Amount
	 if(isset($_GET['max_loan_amount']) ){
		$max_loan_amount=$_GET['max_loan_amount'];
		if($max_loan_amount==''){}
		else{
		$searchquery=$searchquery.' AND min_loan_amount <='.$max_loan_amount;
		}
	}
	// Filter By User applied Amount
	 if(isset($_GET['loanamount']) ){
		$min_loan_amount=$_GET['loanamount'];
		if($min_loan_amount==''){}
		else{
		$searchquery=$searchquery.' AND min_loan_amount <='.$min_loan_amount;
		}
	}


	 $searchquery=$searchquery.' ORDER BY min_int_rate';
	
	$q=$this->db->query($searchquery);
	return($q->result());
		
	}
	public function getbanks()
	{
		
	$this->load->database();
	$q=$this->db->query("SELECT * FROM bank_details");
	return($q->result());
		
	}

	
}
