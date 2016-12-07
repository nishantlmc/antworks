<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->database();		
	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$pending = $this->Requestmodel->getCountALLPending();
			$success = $this->Requestmodel->getCountALLSuccess();
			$progress = $this->Requestmodel->getCountALLInProgress();
			$canceled = $this->Requestmodel->getCountALLCanceled();
			$data['success']  = $success->total;
			$data['progress'] = $progress->total;
			$data['pending']  = $pending->total;
			$data['canceled'] = $canceled->total;
			
			$Total = $data['success']+$data['progress']+$data['pending']+$data['canceled'];
			
			if($Total)
			{
				$data['success_per']  = ($success->total/$Total)*100;
				$data['progress_per'] = ($progress->total/$Total)*100;
				$data['pending_per']  = ($pending->total/$Total)*100;
				$data['canceled_per'] = ($canceled->total/$Total)*100;
			}
			else
			{
				$data['success_per']=$data['progress_per']=$data['pending_per']=$data['canceled_per']= 0;
			}*/
			$role_id = $this->session->userdata('role');
			$user_id = $this->session->userdata('user_id');
			if($role_id==3)
			{
				$lender_advanced_info = $this->Dashboardmodel->lender_advanced_info($user_id);
				if(empty($lender_advanced_info))
				{
					$this->load->view('lenders-advanced',$data);
					return;
				}
				
			}
			/*if($role_id==4)
			{
				$borrower_advanced_info = $this->Dashboardmodel->borrower_advanced_info($user_id);
				if(empty($borrower_advanced_info))
				{
					$this->load->view('borrower-advanced',$data);
				}
				return;
			}*/
			if($role_id==5)
			{
				$fc_advanced_info = $this->Dashboardmodel->fc_advanced_info($user_id);
				if(empty($fc_advanced_info))
				{
					$this->load->view('fc-advanced',$data);
				}
				return;
			}
			
			$data['pageTitle'] = "Dashboard";
			
			$this->load->view('templates-admin/header',$data);
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('dashboard',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			redirect(base_url().'login/');
		}
	}
	
	public function borrower_advanced_info_updated()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Dashboardmodel->borrower_advanced_info_updated();
			if($status)
			{
				$msg="Information submitted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function fc_advanced_info_updated()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Dashboardmodel->fc_advanced_info_updated();
			if($status)
			{
				$msg="Information submitted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function lender_advanced_info_updated()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Dashboardmodel->lender_advanced_info_updated();
			if($status)
			{
				$msg="Information submitted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'dashboard/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function city_list_statewise()
	{
		$scode = $this->input->post('state');
		$citylist = $this->Requestmodel->city_list_statcode($scode);
		echo '<option value="">Select City</option>';
		foreach($citylist as $row)
		{
			echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login/');
	}
}
