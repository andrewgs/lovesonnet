<?php
class Units extends CI_Model {

	var $id 	= 0;
	var $dress 	= 0;
	var $title	= '';
	var $note	= '';
	var $model	= 0;
	var $image	= '';
	var $simage	= '';
	var $bimage	= '';
	
	function __construct(){
    
		parent::__construct();
	}
	
	function read_record($dress,$id){
		
		$this->db->where('id',$id);
		$this->db->where('dress',$dress);
		$query = $this->db->get('units',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records($dress){
		
		$this->db->select('id,title,note,model');
		$this->db->where('dress',$dress);
		$query = $this->db->get('units');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}

	function get_image($id){
		
		$this->db->where('id',$id);
		$this->db->select('image');
		$query = $this->db->get('units');
		$data = $query->result_array();
		return $data[0]['image'];
	}
	
	function get_simage($id){
		
		$this->db->where('id',$id);
		$this->db->select('simage');
		$query = $this->db->get('units');
		$data = $query->result_array();
		return $data[0]['simage'];
	}
	
	function get_bimage($id){
		
		$this->db->where('id',$id);
		$this->db->select('bimage');
		$query = $this->db->get('units');
		$data = $query->result_array();
		return $data[0]['bimage'];
	}

	function insert_record($data){
	
		$this->dress	= $data['dress'];
		$this->title	= $data['title'];
		$this->note		= $data['note'];
		$this->model	= $data['model'];
		if($data['image']):
			$this->image = $data['image'];
			$this->simage = $data['simage'];
			$this->bimage = $data['bimage'];
		endif;
		$this->db->insert('units',$this);
	}
	
	function update_record($data){
	
		$this->db->set('title',$data['title']);
		$this->db->set('note',$data['note']);
		$this->db->set('model',$data['model']);
		if($data['image']):
			$this->db->set('image',$data['image']);
			$this->db->set('simage',$data['simage']);
			$this->db->set('bimage',$data['bimage']);
		endif;
		$this->db->where('dress',$data['dress']);
		$this->db->where('id',$data['id']);
		$this->db->update('units');
	}

	function delete_record($dress,$id){
	
		$this->db->where('id',$id);
		$this->db->where('dress',$dress);
		$this->db->delete('units');
	}

	function count_records($dress){
		
		$this->db->select('count(*) as cnt');
		$this->db->where('dress',$dress);
		$query = $this->db->get('units');
		$data = $query->result_array();
		return $data[0]['cnt'];
	}
	
	function read_limit_records($dress,$count,$from){
		
		$this->db->where('dress',$dress);
		$this->db->limit($count,$from);
		$this->db->order_by('id desc');
		$query = $this->db->get('units');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_limit($dress,$count){
		
		$this->db->where('dress',$dress);
		$this->db->limit($count);
		$this->db->order_by('id desc');
		$query = $this->db->get('units');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
}