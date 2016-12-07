<?php 

class Managementmodel extends CI_Model{	
	
    private $u_primary_key='u_id';

	public function __construct(){
		
	    $this->load->database();
	}
	
	public function register_user() {
		
		$arr = $_POST;
		unset($arr['password']);
		$pwd =md5($_REQUEST['password']);
		$arr['password'] = $pwd;
		$arr['profilepic'] = $_FILES['profilepic']['name'];
		$arr['date_added']=date("Y-m-d H:i:s");
		$arr['date_modified']=date("Y-m-d H:i:s");
		
		$query = $this->db-> insert('user_info',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Add";
			$arry['activity_table'] ="user_info";
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db-> insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function user_list() {
		
		$this->db->select('*');
		$this->db->from('user_info');
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
	
	public function recents() {
		
		$this->db->select('*');
		$this->db->from('user_info');
		$this->db->where('status',1);
		$this->db->limit(4);
		$query = $this->db->get();
		$res = $query->result_array();
		return $res;
		
	}
	
	public function delete_user($rid) {
		
		$this->db->where('user_id',$rid);
		$query = $this->db->delete('user_info');
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Delete";
			$arry['activity_table'] ="user_info";
			$arry['activity_for'] 	=$rid;
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function edit_user($eid) {
		
		$this->db->select('*');
		$this->db->from('user_info');
		$this->db->where('user_id=',$eid);
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
	
	public function update_user($uid) {
		
		$arr = $_POST;
		unset($arr['password']);
		if($_REQUEST['password'])
		{
			$pwd =md5($_REQUEST['password']);
			$arr['password'] = $pwd;
		}
		if($_FILES['profilepic']['name'])
		{
			$arr['profilepic'] = $_FILES['profilepic']['name'];
		}
		$arr['date_modified']=date("Y-m-d H:i:s");
		
		$this->db->where('user_id', $uid);
		$this->db->update('user_info',$arr);
		
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Update";
			$arry['activity_table'] ="user_info";
			$arry['activity_for'] 	=$uid;
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function rolelist() {
		
		$this->db->select('*');
		$this->db->from('user_role');
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
	
	public function rolebyid($roleid) {
		
		$this->db->select('role');
		$this->db->from('user_role');
		$this->db->where('role_id',$roleid);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->role;
		}
		else
		{
			return false;
		}
	}
	
	public function countusers() {
		
		$this->db->select('count(user_id) as total_users');
		$this->db->from('user_info');
		//$this->db->group_by('role');
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->total_users;
		}
		else
		{
			return 0;
		}
	}
	
	public function countusersbyrole($role) {
		
		$this->db->select('count(user_id) as total_users');
		$this->db->from('user_info');
		$this->db->where('role',$role);
		//$this->db->group_by('role');
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->total_users;
		}
		else
		{
			return 0;
		}
	}
	
	public function add_role() {
		
		$arr = $_POST;
		
		$query = $this->db-> insert('user_role',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Add";
			$arry['activity_table'] ="user_role";
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db-> insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function countroles() {
		
		$this->db->select('count(role_id) as total_roles');
		$this->db->from('user_role');
		//$this->db->group_by('role');
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->total_roles;
		}
		else
		{
			return 0;
		}
	}
	
	public function delete_role($rid) {
		
		$this->db->where('role_id',$rid);
		$query = $this->db->delete('user_role');
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Delete";
			$arry['activity_table'] ="user_role";
			$arry['activity_for'] 	=$rid;
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function edit_role($eid) {
		
		$this->db->select('*');
		$this->db->from('user_role');
		$this->db->where('role_id=',$eid);
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
	
	public function update_role($uid) {
		
		$arr = $_POST;
		
		$this->db->where('role_id', $uid);
		$this->db->update('user_role',$arr);
		
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Update";
			$arry['activity_table'] ="user_role";
			$arry['activity_for'] 	=$uid;
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
}