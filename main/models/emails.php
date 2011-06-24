<?php
class Emails extends CI_Model {

	var $id 	= 0;
	var $name	= '';
	var $email	= '';
	
	function __construct(){
    
		parent::__construct();
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('emails',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records(){
		
		$query = $this->db->get('emails');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}

	function insert_record($data){
	
		$this->name	 = $data['cm-name'];
		$this->email = $data['cm-email'];
		$this->db->insert('emails',$this);
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('emails');
	}
	
	function exist($email){
	
		$this->db->where('email',$email);
		$query = $this->db->get('emails');
		$data = $query->result_array();
		if(count($data)) return TRUE;
		return FALSE;
	}
}