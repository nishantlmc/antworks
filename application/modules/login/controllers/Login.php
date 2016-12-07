<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('Loginmodel'));
		
		header("cache-Control: no-store, no-cache, must-revalidate");
		header("cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		$this->load->database();		
	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE )
		{		
			redirect(base_url().'dashboard/');
		}
		else
		{
			$this->load->view('signin');
		}
	}
	
	public function ValidateUser()
	{
		$result=$this->Loginmodel->validateuser();
		if(!empty($result))
		{
			$newdata = array(
				   'user_id' => $result->user_id,					 
				   'username'  => $result->username,
				   'user_name'  => $result->fullname,
				   'email'  => $result->email,
				   'profilepic'  => $result->profilepic,
				   'role' =>  $result->role,
				   'login_state' => TRUE
			   );
			$this->session->set_userdata($newdata);
			$this->session->set_flashdata('init-success',1);
			redirect(base_url().'dashboard/');
		}
		else
		{ 
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>'Incorrect Credentials! Please try again.'));
			redirect(base_url().'login/');
		}
	}
	
	public function lockscreen()
	{
		if ($this->session->userdata('login_state') == TRUE )
		{
			$userdetails = $this->Loginmodel->userdetails($this->session->userdata('username'));
			$data['userdetails'] = $userdetails[0];
			
			$this->load->view('header');
			$this->load->view('lock-screen',$data);
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'login/');
		}
	}
	
	public function lockscreenlogin($id)
	{
		if ($this->session->userdata('login_state') == TRUE )
		{
			$result=$this->Loginmodel->lockscreenlogin();

			if($result)
			{
				echo "<script>history.go(-2);</script>";
			}
			else
			{ 
				$this->session->set_flashdata('notification',array('error'=>1,'message'=>'Incorrect Password! Please try again.'));
				redirect(base_url().'login/lockscreen/');
			}
		}
		else
		{
			redirect(base_url().'login/');
		}
	}
	
	public function recoverpassword()
	{
		$this->load->view('header');
		$this->load->view('recover-password');
		$this->load->view('footer');
	}
	
	public function recoverpasswordsubmit()
	{
		$email=$this->input->post('email');
		$email="deepak@sahyogsoftware.com";
		$result=$this->Loginmodel->recoverpasswordsubmit($email);

		if($result)
		{
			$result=$this->Requestmodel->sendMail($email);
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>'Please check your Email! Password recovery details has been sent to your email.'));
			redirect(base_url().'login/');
		}
		else
		{ 
			$this->session->set_flashdata('notification',array('error'=>1,'message'=>'Incorrect Email! Please try again.'));
			redirect(base_url().'login/');
		}
	}
	
	public function Logout()
	{
		$this->session->sess_destroy();
		$cookie = array(
			'name'   => 'Array',
			'value'  => '',
			'expire' => '0'
			);
		 
		delete_cookie($cookie);
		redirect(base_url().'login/');
	}
}