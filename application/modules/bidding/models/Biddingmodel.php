<?php 

class Biddingmodel extends CI_Model{	
	
    public function __construct(){
		
	    $this->load->database();
	}
	
	public function bidding_list() {
		
		//print_r($_POST);exit;
		if(count($_POST['loan'])==1)
		{
			$this->db->where('b.loan_type = '.$_POST['loan'][0]);
		}
		else if(count($_POST['loan'])==2)
		{
			$this->db->where('(b.loan_type = '.$_POST['loan'][0].' or b.loan_type = '.$_POST['loan'][1].')');
		}
		if($_POST['loan_type'])
		{
			$this->db->where('p.loan_purpose',$_POST['loan_type']);
		}
		if($_POST['min_loan'] && $_POST['max_loan'])
		{
			$this->db->where('p.loan_amount between '.$_POST['min_loan'].' and '.$_POST['max_loan']);
		}
		if($_POST['min_interest_rate'] && $_POST['max_interest_rate'])
		{
			$this->db->where('p.min_interest_rate >= '.$_POST['min_interest_rate'].' and p.max_interest_rate <= '.$_POST['max_interest_rate']);
		}
		if($_POST['state'])
		{
			$this->db->like('b.r_state',$_POST['state'], 'after');
		}
		if($_POST['city'])
		{
			$this->db->like('b.r_city',$_POST['city'], 'after');
		}
					
		$this->db->select('p.*,b.*,b.id');
		$this->db->from('proposal_details p');
		$this->db->join('borrowers_details_table b','p.borrower_id=b.borrower_id');
		//$this->db->where('p.bidding_mode!=',0);
		$this->db->where('p.bidding_status!=',-1);
		$this->db->where('p.bidding_status!=',4);
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
	
	public function proposal_details($pid) {
		
		$this->db->select('b.*,p.*');
		$this->db->from('proposal_details b');
		$this->db->join('borrowers_details_table p','b.borrower_id=p.borrower_id');
		$this->db->where('proposal_id',$pid);
		$query = $this->db->get();
		if($this->db->affected_rows()>0)
		{
			 return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	
	public function submit_proposal($pid,$borrower_id) {
		
		$arr = $_POST;
		unset($arr['Submit_proposal']);
		$arr['proposal_id'] = $pid;
		$arr['borrowers_id']=$borrower_id;
		$arr['lenders_id']=$this->session->userdata('user_id');
		$arr['proposal_added_date']=date("Y-m-d H:i:s");
		$query = $this->db-> insert('bidding_proposal_details',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Proposal Submit";
			$arry['activity_table'] ="bidding_proposal_details";
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db-> insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function save_proposal($pid,$borrower_id) {
		
		$arr = $_POST;
		unset($arr['Save_proposal']);
		$arr['proposal_id'] = $pid;
		$arr['borrowers_id']=$borrower_id;
		$arr['lenders_id']=$this->session->userdata('user_id');
		$arr['proposal_status']=3;
		$arr['proposal_added_date']=date("Y-m-d H:i:s");
		$query = $this->db-> insert('bidding_proposal_details',$arr);
		if($this->db->affected_rows()>0)
		{
			$arry=array();
			$arry['user_id'] 		=$this->session->userdata('user_id');
			$arry['activity'] 		="Proposal Submit";
			$arry['activity_table'] ="bidding_proposal_details";
			$arry['datecreated'] 	=date("Y-m-d H:i:s");
			$query = $this->db-> insert('history',$arry);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function proposal_list() {
		
		//print_r($_POST);exit;
		if(count($_POST['loan'])==1)
		{
			$this->db->where('b.loan_type = '.$_POST['loan'][0]);
		}
		else if(count($_POST['loan'])==2)
		{
			$this->db->where('(b.loan_type = '.$_POST['loan'][0].' or b.loan_type = '.$_POST['loan'][1].')');
		}
		if($_POST['loan_type'])
		{
			$this->db->where('p.loan_purpose',$_POST['loan_type']);
		}
		if($_POST['min_loan'] && $_POST['max_loan'])
		{
			$this->db->where('p.loan_amount between '.$_POST['min_loan'].' and '.$_POST['max_loan']);
		}
		if($_POST['min_interest_rate'] && $_POST['max_interest_rate'])
		{
			$this->db->where('p.min_interest_rate >= '.$_POST['min_interest_rate'].' and p.max_interest_rate <= '.$_POST['max_interest_rate']);
		}
		if($_POST['state'])
		{
			$this->db->like('b.r_state',$_POST['state'], 'after');
		}
		if($_POST['city'])
		{
			$this->db->like('b.r_city',$_POST['city'], 'after');
		}
		
		$this->db->select('b.*,p.*');
		$this->db->from('proposal_details p');
		$this->db->join('borrowers_details_table b','p.borrower_id=b.borrower_id');
		
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
	
	public function bids_listing() {
		
		$lid = $this->session->userdata('user_id');
		$this->db->select('bp.*,bd.name,p.PLRN');
		$this->db->from('bidding_proposal_details bp');
		$this->db->join('proposal_details p','bp.borrowers_id=p.borrower_id');
		$this->db->join('borrowers_details_table bd','bp.borrowers_id=bd.borrower_id');
		$this->db->where('bp.lenders_id',$lid);
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
	
	/*public function similar_proposal_details($amt,$purpose,$bid) {
		
		$this->db->select('b.*,u.fullname,u.state_code,u.city,d.*');
		$this->db->from('proposal_details b');
		$this->db->join('user_info u','b.borrower_id=u.user_id');
		$this->db->join('borrowers_details_table d','d.user_id=u.user_id');
		$this->db->where("((b.loan_amount >".($amt-5)." AND b.loan_amount <".($amt+5).") OR purpose = '".$purpose."')");
		//$this->db->or_where('purpose',$purpose);
		$this->db->where('bidding_id!=',$bid);
		$query = $this->db->get();
		//echo $this->db->last_query();
		if($this->db->affected_rows()>0)
		{
			 return $query->row_array();
		}
		else
		{
			return false;
		}
	}*/
	
}