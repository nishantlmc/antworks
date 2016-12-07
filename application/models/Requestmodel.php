<?php 

class Requestmodel extends CI_Model{	
	
    public function __construct(){
		
	    $this->load->database();
	}
	
	public function state_list() {
		
		$this->db->select('*');
		$this->db->from('state_master');
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
	
	public function state_list_statecode($scode) {
		
		$this->db->select('state_name');
		$this->db->from('state_master');
		$this->db->where('state_code',$scode);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->state_name;
		}
		else
		{
			return false;
		}
	}
	
	public function city_list() {
		
		$this->db->select('*');
		$this->db->from('city_master');
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
	
	public function city_list_statcode($scode) {
		
		$this->db->select('*');
		$this->db->from('city_master');
		$this->db->where('state_code',$scode);
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
		
		$this->db->select('history.*,user_info.username,user_info.role');
		$this->db->from('history');
		$this->db->join('user_info', 'user_info.user_id = history.activity_for');
		$this->db->limit(3);
		$query = $this->db->get();
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
	
	public function search_header() {
		
		$borrower_search = "";
		$borrower_search = $this->input->get('s');
		
		$keyword = $borrower_search;
		$this->db->like('username',$keyword, 'after');
		$this->db->or_like('fullname',$keyword, 'after');
			
		$this->db->select('*');
		$this->db->from('user_info');
		
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		if($this->db->affected_rows()>0)
		{
			 return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	
	public function get_loan_name($lcode) {
		
		$this->db->select('name');
		$this->db->from('loan_information_table');
		$this->db->where('id',$lcode);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->name;
		}
		else
		{
			return false;
		}
	}
	
	public function loan_info() {
		
		$this->db->select('*');
		$this->db->from('loan_information_table');
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
	
	public function get_loan_info() {
		
		$lcode = $this->input->post('loan_type');
		$this->db->select('*');
		$this->db->from('loan_information_table');
		$this->db->where('loan_type',$lcode);
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
	
	public function loan_type() {
		
		$this->db->select('*');
		$this->db->from('loan_type');
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
	
	public function get_user_name($uid) {
		
		$this->db->select('fullname');
		$this->db->from('user_info');
		$this->db->where('user_id',$uid);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->fullname;
		}
		else
		{
			return false;
		}
	}
	
	public function get_occupation_details() {
		
		$this->db->select('*');
		$this->db->from('occupation_details_table');
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
	
	public function get_occupation_name($id) {
		
		$this->db->select('name');
		$this->db->from('occupation_details_table');
		$this->db->where('id',$id);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->name;
		}
		else
		{
			return false;
		}
	}
	
	public function count_total_bids($uid) {
		
		$this->db->select('sum(loan_amount) as total_bids');
		$this->db->from('bidding_proposal_details');
		$this->db->where('lenders_id',$uid);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->total_bids;
		}
		else
		{
			return false;
		}
	}
	
	public function count_total_proposals($bid) {
		
		$this->db->select('sum(loan_amount) as total_amount');
		$this->db->from('proposal_details');
		$this->db->where('borrower_id',$bid);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row()->total_amount;
		}
		else
		{
			return false;
		}
	}
	
}