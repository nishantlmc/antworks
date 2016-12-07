<?php 

class Loginmodel extends CI_Model{	
	
    private $u_primary_key='u_id';

	public function __construct(){
		
	    $this->load->database();
	}
	
	
    public function validateuser() {
		
		$username=$this->input->post('user');
		$password=md5($this->input->post('pwd'));
		$this->db-> select('*');
		$this->db-> from('user_info');
		$this->db-> where('username', $username);
		$this->db-> where('password', $password);
		$this->db-> where('status', 1);
		$this->db-> limit(1);
		$query = $this->db->get();
	
		if($this->db->affected_rows()>0)
		{
			/*$cookie_name = 'siteAuth';
			$cookie_time = (3600 * 24 * 30); // 30 days
			// Autologin Requested?
			$post_autologin = $this->input->post('autologin');
			if($post_autologin == 1)
			{
				$cookie = array(
					'name'   => $cookie_name,
					'value'  => 'user='.$username.'&hash='.$password,
					'expire' => time()+$cookie_time
					);
				set_cookie($cookie);
				//print_r(get_cookie($cookie_name));exit;
			}*/
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	
	 public function validatecookie() {
		
		// Check if the cookie exists
		if(isSet($_COOKIE['Array']))
		{
			parse_str($_COOKIE['Array']);
		
			$this->db-> select('*');
			$this->db-> from('user_info');
			$this->db-> where('username', $user);
			$this->db-> where('password', $hash);
			$this->db-> limit(1);
			$query = $this->db->get();
		
			if($query->num_rows() == 1)
			{
				return $query->row();
			}
			else
			{
				return false;
			}
		}
	}
	
	public function userdetails($username) {
		
		$this->db-> select('*');
		$this->db-> from('user_info');
		$this->db-> where('username', $username);
		$this->db-> limit(1);
		$query = $this->db->get();

		if($this->db->affected_rows()>0)
		{
			 return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	
	public function notificationdetails() {
		
		$cdate = date("Y-m-d",strtotime('-3 days'));
		$this->db->select('history.*,user_info.username,user_info.access');
		$this->db->from('history');
		$this->db->join('user_info', 'user_info.id = history.activity_for');
		$this->db->where('datecreated>',$cdate);
		$this->db->limit(3);
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		$res = $query->result_array();
		
		if($this->db->affected_rows()>0)
		{
			 return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	
	function lockscreenlogin()
	{
		$password=md5($this->input->post('password'));
		$this->db-> select('*');
		$this->db-> from('user_info');
		$this->db-> where('password', $password);
		$this->db-> limit(1);
		$query = $this->db->get();
	
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function recoverpasswordsubmit($email)
	{
		$this->db-> select('password');
		$this->db-> from('user_info');
		$this->db-> where('email', $email);
		$this->db-> limit(1);
		$query = $this->db->get();
		$row = $query->row()->password;
		print_r(md5($row));exit;
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}