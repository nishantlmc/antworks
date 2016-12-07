<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('Bankmodel','login/Loginmodel'));
		
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$data['list'] = $this->Bankmodel->user_list();
			$data['pageTitle'] = "Loan Management";
			//$data['pageBreadcrumb'] = "Users List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('loandashboard',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			redirect(base_url().'login/');
		}
	}
	
	public function dashboard()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$data['records'] = $this->Managementmodel->recordcount();
			$data['recents'] = $this->Managementmodel->recents();*/
			
			$data['list'] = $this->Bankmodel->user_list();
			
			$data['pageTitle'] = "Loan Management";
			$data['pageBreadcrumb'] = "Loan List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('loandashboard',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function profile()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;
			
			$this->load->view('header');
			$this->load->view('nav',$data);
			$this->load->view('profile',$data);
			$this->load->view('footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function add_loan()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			
			$status = $this->Bankmodel->add_loan();
			if($status)
			{
				$msg="Loan Created Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/dashboard/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/dashboard/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function delete_user($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->delete_user($uid);
			if($status)
			{
				$msg="User Deleted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/dashboard/');
			}
			else
			{
				$msg="User not Deleted";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				//redirect(base_url().'bank/dashboard/?');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function edit_user($eid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;*/
			
			$editlist = $this->Bankmodel->edit_user($eid);
			$data['editlist'] = $editlist[0];
			
			$data['pageTitle'] = "Loan Management";
			$data['pageBreadcrumb'] = "Edit Loan";
			
			if($data['editlist'])
			{
				$this->load->view('templates-admin/header');
				$this->load->view('templates-admin/nav',$data);
				$this->load->view('templates-admin/header-below',$data);
				$this->load->view('loanedit',$data);
				$this->load->view('templates-admin/footer');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'management/dashboard/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function update_loan($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			if($_FILES['profilepic']['name'])
			{
				$config['upload_path'] = './uploads/users/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$config['max_size']	= '20000';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['overwrite']  = TRUE;
				
				if(!empty($_FILES['profilepic']['name']))
				{
					$this->upload->initialize($config);
					$this->load->library('upload', $config);
		
					if (!$this->upload->do_upload('profilepic'))
					{
						$error = array('error' => $this->upload->display_errors());
						print_r($error);exit;
						//$this->session->set_flashdata('validation_errors',array('error'=>1,'message'=>$error));
						//redirect(base_url().'management/add');
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
					}
				}
			}
			
			$status = $this->Bankmodel->update_loan($uid);
			if($status)
			{
				$msg="User Updated Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/edit_user/'.$uid);
			}
			else
			{
				$msg="User not Updated";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/edit_user/'.$uid);
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
// ADD BANK START
	public function add_banks()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->add_bank();
			if($status)
			{
				$msg="Role Created Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/list_banks/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_banks/?wrong');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	//ADD BANK END

	public function add_loan_type()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->add_loan_type();
			if($status)
			{
				$msg="Role Created Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/list_loan_types/');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_loan_types/?wrong');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function list_banks()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			
			$data['rolelist'] = $this->Bankmodel->banklist();
			
			$data['pageTitle'] = "Bank Management";
			$data['pageBreadcrumb'] = "Bank List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('list_banklist',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}

	public function list_loan_types()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			
			$data['rolelist'] = $this->Bankmodel->rolelist();
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Roles List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('list_loan_types-list',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	// Delete Bank
		public function delete_bank($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->delete_bank($uid);
			if($status)
			{
				$msg="Role Deleted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/list_banks/');
			}
			else
			{
				$msg="Role not Deleted";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_banks/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	// End deleting Bank
	public function delete_role($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->delete_role($uid);
			if($status)
			{
				$msg="Role Deleted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'management/list_roles/');
			}
			else
			{
				$msg="Role not Deleted";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'management/list_roles/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	// edit bank
		public function edit_bank($eid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{			
			$editlist = $this->Bankmodel->edit_bank($eid);
			$data['editlist'] = $editlist[0];
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Edit Role";
			
			if($data['editlist'])
			{
				$this->load->view('templates-admin/header');
				$this->load->view('templates-admin/nav',$data);
				$this->load->view('templates-admin/header-below',$data);
				$this->load->view('bank-edit',$data);
				$this->load->view('templates-admin/footer');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_banklist/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	//end adding bank
	
	public function edit_role($eid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			//$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			//$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;*/
			
			$editlist = $this->Bankmodel->edit_role($eid);
			$data['editlist'] = $editlist[0];
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Edit Role";
			
			if($data['editlist'])
			{
				$this->load->view('templates-admin/header');
				$this->load->view('templates-admin/nav',$data);
				$this->load->view('templates-admin/header-below',$data);
				$this->load->view('role-edit',$data);
				$this->load->view('templates-admin/footer');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_roles/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function update_role($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Bankmodel->update_role($uid);
			if($status)
			{
				$msg="Role Updated Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'bank/list_loan_types/');
			}
			else
			{
				$msg="Role not Updated";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'bank/list_loan_types/');
			}
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}


	
}