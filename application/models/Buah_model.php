<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buah_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('data');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	//tambah data
	public function tambah($data)
	{
		$this->db->insert('data', $data);
	}


}

/* End of file Buah_model.php */
/* Location: ./application/models/Buah_model.php */