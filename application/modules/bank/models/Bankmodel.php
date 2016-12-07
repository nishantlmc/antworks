<?php 

class Bankmodel extends CI_Model{	
	
    private $u_primary_key='u_id';

	public function __construct(){
		
	    $this->load->database();
	}
	
	public function add_loan() {
		
		$arr = $_POST;
		$arr['status']=1;
		$arr['date_added']=date("Y-m-d h:i:s");
		$arr['date_modified']=date("Y-m-d h:i:s");
		
		$query = $this->db-> insert('bank_loan',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Add";
			$arry['activity_table'] ="bank_loan";
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
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
		$this->db->from('bank_loan');
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
	public function bank_list() {
		
		$this->db->select('*');
		$this->db->from('bank_details');
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
		$this->db->from('bank_loan');
		$this->db->where('status',1);
		$this->db->limit(4);
		$query = $this->db->get();
		$res = $query->result_array();
		return $res;
		
	}
	
	public function delete_user($rid) {
		
		$this->db->where('id',$rid);
		$query = $this->db->delete('bank_loan');
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Delete";
			$arry['activity_table'] ="bank_loan";
			$arry['activity_for'] 	=$rid;
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
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
		$this->db->from('bank_loan');
		$this->db->where('id=',$eid);
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
	
	public function update_loan($uid) {
		
		$arr = $_POST;
		$arr['date_modified']=date("Y-m-d h:i:s");
		
		$this->db->where('id', $uid);
		$this->db->update('bank_loan',$arr);
		
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Update";
			$arry['activity_table'] ="bank_loan";
			$arry['activity_for'] 	=$uid;
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	public function banklist() {
		
		$this->db->select('*');
		$this->db->from('bank_details');
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
	
	public function rolelist() {
		
		$this->db->select('*');
		$this->db->from('bank_loan_type');
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
		
		$this->db->select('count(id) as total_users');
		$this->db->from('bank_loan');
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
		
		$this->db->select('count(id) as total_users');
		$this->db->from('bank_loan');
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
	// add new Bank

	public function add_bank() {
		
		$arr = $_POST;
		
		$query = $this->db-> insert('bank_details',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Add";
			$arry['activity_table'] ="user_role";
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
			$query = $this->db-> insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	// end adding new bank
	public function add_loan_type() {
		
		$arr = $_POST;
		
		$query = $this->db-> insert('bank_loan_type',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Add";
			$arry['activity_table'] ="user_role";
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
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
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Delete";
			$arry['activity_table'] ="user_role";
			$arry['activity_for'] 	=$rid;
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}

		public function delete_bank($rid) {
		
		$this->db->where('bank_id',$rid);
		$query = $this->db->delete('bank_details');
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Delete";
			$arry['activity_table'] ="user_role";
			$arry['activity_for'] 	=$rid;
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}

	// edit bank
		public function edit_bank($eid) {
		
		$this->db->select('*');
		$this->db->from('bank_details');
		$this->db->where('bank_id=',$eid);
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
	// end editing bank
	public function edit_role($eid) {
		
		$this->db->select('*');
		$this->db->from('bank_loan_type');
		$this->db->where('id=',$eid);
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
		
		$this->db->where('id', $uid);
		$this->db->update('bank_loan_type',$arr);
		
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['id'] 		=$this->session->userdata('id');
			$arry['activity'] 		="Update";
			$arry['activity_table'] ="user_role";
			$arry['activity_for'] 	=$uid;
			$arry['datecreated'] 	=date("Y-m-d h:i:s");
			$query = $this->db->insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
}