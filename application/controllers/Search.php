<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}

	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$notificationdetails = $this->Requestmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['search_list'] = $this->Requestmodel->search_header();
			//print_r($data['search_list']);exit;
			$data['pageTitle'] = "Search Page";
			$data['pageBreadcrumb'] = "Search List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('search',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
}