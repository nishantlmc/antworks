<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/collapse-nav');
		$this->load->view('compare',$data);
		$this->load->view('templates/footer');
	}
		public function LoanOffers()
	{	
		$this->load->model('getloan');
		$data['bankdata']=$this->getloan->loan_details();
		$data['banklist']=$this->getloan->getbanks();
	//	$this->load->view('show_banks',$data);
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/collapse-nav');
		$this->load->view('loanoffers',$data);
		$this->load->view('templates/footer');
	}
	
}
