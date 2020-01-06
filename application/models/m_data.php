<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {
	private $_table = "tabelchart";

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

}