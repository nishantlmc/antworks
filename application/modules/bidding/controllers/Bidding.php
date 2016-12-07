<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidding extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		error_reporting(0);
	}

	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$notificationdetails = $this->Requestmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['list'] = $this->Managementmodel->user_list();
			
			$data['proposal_list'] = $this->Biddingmodel->bidding_list();
			//print_r($data['bidding_list']);exit;
			$data['pageTitle'] = "Bidding Home";
			$data['pageBreadcrumb'] = "Bid List";
			
			$this->load->view('templates-admin/header',$data);
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('bidding',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function proposal_details($pid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['records'] = $this->Managementmodel->recordcount();
			$data['recents'] = $this->Managementmodel->recents();*/
			$data['list'] = $this->Managementmodel->user_list();
			
			$data['proposal_details'] = $this->Biddingmodel->proposal_details($pid);
			
			$data['pageTitle'] = "Bidding Home";
			$data['pageBreadcrumb'] = "Bidding Details";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('bidding-details',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function submit_proposal($bid,$borrower_id)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			if(isset($_POST['Submit_proposal']))
			{
				$status = $this->Biddingmodel->submit_proposal($bid,$borrower_id);
				$msg="Proposal Submitted Successfully";
			}
			else if(isset($_POST['Save_proposal']))
			{
				$status = $this->Biddingmodel->save_proposal($bid,$borrower_id);
				$msg="Proposal Saved Successfully";
			}
			
			if($status)
			{
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bidding/proposal_details/'.$bid);
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bidding/proposal_details/'.$bid);
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function proposal_listing()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$notificationdetails = $this->Requestmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['list'] = $this->Managementmodel->user_list();
			
			$data['proposal_list'] = $this->Biddingmodel->proposal_list();
			
			$data['pageTitle'] = "Bidding Home";
			$data['pageBreadcrumb'] = "Proposal List";
			
			$this->load->view('templates-admin/header',$data);
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('proposal-listing',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function proposal_listing_apply($pid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
		}
	}
	
	public function bids_listing()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$notificationdetails = $this->Requestmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['list'] = $this->Managementmodel->user_list();
			
			$data['bid_list'] = $this->Biddingmodel->bids_listing();
			
			$data['pageTitle'] = "Bidding Home";
			$data['pageBreadcrumb'] = "Bid List";
			
			$this->load->view('templates-admin/header',$data);
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('bidding-list',$data);
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
