
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	// Halaman dasbor
	public function index()
	{
		$data = array( 'title' => 'Halaman Dashboard',
						'isi'		=> 'admin/dasbor/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */