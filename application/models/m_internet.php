<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_internet extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('internet');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	//tambah data
	public function tambah($data)
	{
		$this->db->insert('internet', $data);
	}


}

/* End of file m_internet.php */
/* Location: ./application/models/m_internet.php */