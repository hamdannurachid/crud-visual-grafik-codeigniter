<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_data extends CI_Controller {

	//constract
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{

		$data["products"] = $this->m_data->getAll();
		$this->load->view("admin/lihat2", $data);
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/admin/Data.php */