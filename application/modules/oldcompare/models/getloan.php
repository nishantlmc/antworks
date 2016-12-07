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
	$searchquery="SELECT * FROM bank_loan ";
	if(isset($_GET['min_int_rate'])){
		$max_int_rate=$_GET['max_int_rate'];
		$min_int_rate=$_GET['min_int_rate'];
		$searchquery=$searchquery.'WHERE min_int_rate >='.$min_int_rate.' AND max_int_rate <='.$max_int_rate;
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
