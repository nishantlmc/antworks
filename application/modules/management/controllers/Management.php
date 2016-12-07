<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Management extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			redirect(base_url().'dashboard/');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
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
			$data['recents'] = $this->Managementmodel->recents();*/
			
			$data['list'] = $this->Managementmodel->user_list();
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Users List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('management-dashboard',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function profile($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			$editlist = $this->Managementmodel->edit_user($uid);
			$data['profiledetails'] = $editlist[0];
			
			$data['pageTitle'] = "My Profile";
			$data['pageBreadcrumb'] = "Profile";
			
			if($data['profiledetails'])
			{
				$this->load->view('templates-admin/header');
				$this->load->view('templates-admin/nav',$data);
				$this->load->view('templates-admin/header-below',$data);
				$this->load->view('profile',$data);
				$this->load->view('templates-admin/footer');
			}
			else
			{
				$msg="Something Wrong!";
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
				redirect(base_url().'management/dashboard/');
			};
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function register_user()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user_info.username]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('fullname', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email|is_unique[user_info.email]');
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('state_code', 'State', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			
			if ($this->form_validation->run() == TRUE)
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
				
				$status = $this->Managementmodel->register_user();
				if($status)
				{
					$msg="User Created Successfully";
					$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
					redirect(base_url().'management/dashboard/');
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
				$errmsg = $this->form_validation->error_array();
				$this->session->set_flashdata('validation_errors',array('error'=>1,'message'=>$errmsg));
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
	
	public function delete_user($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Managementmodel->delete_user($uid);
			if($status)
			{
				$msg="User Deleted Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'management/dashboard/');
			}
			else
			{
				$msg="User not Deleted";
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
	
	public function edit_user($eid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			/*$notificationdetails = $this->Loginmodel->notificationdetails();
			$data['notification'] = $notificationdetails;*/
			
			$editlist = $this->Managementmodel->edit_user($eid);
			$data['editlist'] = $editlist[0];
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Edit User";
			
			if($data['editlist'])
			{
				$this->load->view('templates-admin/header');
				$this->load->view('templates-admin/nav',$data);
				$this->load->view('templates-admin/header-below',$data);
				$this->load->view('management-edit',$data);
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
	
	public function update_user($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			//$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user_info.username]');
			$this->form_validation->set_rules('fullname', 'Name', 'required');
			//$this->form_validation->set_rules('email', 'Email', 'required|email|is_unique[user_info.email]');
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('state_code', 'State', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			
			if ($this->form_validation->run() == TRUE)
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
				
				$status = $this->Managementmodel->update_user($uid);
				if($status)
				{
					if($this->session->userdata('role')==1)
					{
						$msg="User Updated Successfully";
						$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
						redirect(base_url().'management/dashboard/');
					}
					else
					{
						$msg="Profile Updated Successfully";
						$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
						redirect(base_url().'management/edit_user/'.$uid);
					}
				}
				else
				{
					$msg="User not Updated";
					$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
					redirect(base_url().'management/dashboard/');
				}
			}
			else
			{
				$errmsg = $this->form_validation->error_array();
				$this->session->set_flashdata('validation_errors',array('error'=>1,'message'=>$errmsg));
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
	
	public function add_role()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$this->form_validation->set_rules('role', 'Role', 'required');
			
			if ($this->form_validation->run() == TRUE)
			{
				$status = $this->Managementmodel->add_role();
				if($status)
				{
					$msg="Role Created Successfully";
					$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
					redirect(base_url().'management/dashboard/');
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
				$errmsg = $this->form_validation->error_array();
				$this->session->set_flashdata('validation_errors',array('error'=>1,'message'=>$errmsg));
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
	
	public function list_roles()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			
			$data['rolelist'] = $this->Managementmodel->rolelist();
			
			$data['pageTitle'] = "User Management";
			$data['pageBreadcrumb'] = "Roles List";
			
			$this->load->view('templates-admin/header');
			$this->load->view('templates-admin/nav',$data);
			$this->load->view('templates-admin/header-below',$data);
			$this->load->view('roles-list',$data);
			$this->load->view('templates-admin/footer');
		}
		else
		{
			$msg="Login Failed, Try Again!";
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>$msg));
			redirect(base_url().'login/');
		}
	}
	
	public function delete_role($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Managementmodel->delete_role($uid);
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
	
	public function edit_role($eid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$editlist = $this->Managementmodel->edit_role($eid);
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
	
	public function update_role($uid)
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{
			$status = $this->Managementmodel->update_role($uid);
			if($status)
			{
				$msg="Role Updated Successfully";
				$this->session->set_flashdata('notification',array('error'=>0,'message'=>$msg));
				redirect(base_url().'management/list_roles/');
			}
			else
			{
				$msg="Role not Updated";
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
	
}