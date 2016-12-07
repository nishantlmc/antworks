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
	{	$this->load->library('session');
						$loansessiondata=array(
		                            'loantype'       => $_GET['type'],
		                            'city'      => $_GET['city'],
		                            'loanamount'      => $_GET['loanamount'],
		                            'state'       => $_GET['state'],
		                            'gender'          =>$_GET['gender'],
		                            'qualification'        => $_GET['highestqualification'],
		                            'maritalstatus'        => $_GET['marital_status'],
		                            'nationality'          => $_GET['nationaility'],
		                            'religion'        => $_GET['religion'],
		                            'occupation'        => $_GET['occupation'],
		                            'typeofcompany'        => $_GET['typeofcompany'],
		                            'company_name'          => $_GET['companyname'],
		                            'netincome'        => $_GET['netincome'],
		                            'currentEMI'        => $_GET['type'],
		                            'residencetype'        => $_GET['residencetype'],
		                            'dob'        => $_GET['dob']
		                    );
		$this->session->set_userdata($loansessiondata);
		//$this->session->set_userdata();
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

	public function LoanRequestSubmit()
	{	
		$this->load->model('getloan');
		$data['bankdata']=$this->getloan->loan_details();
		$data['banklist']=$this->getloan->getbanks();
	//	$this->load->view('show_banks',$data);
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/collapse-nav');
		$this->load->view('loanrequestsubmitform',$data);
		$this->load->view('templates/footer');
	}
		public function LoanRequestSubmitandemail()
	{	$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/collapse-nav');
		$this->load->view('loanrequestmail',$data);
		$this->load->view('templates/footer');

	}
	
}
