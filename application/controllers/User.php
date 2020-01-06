<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('buah_model');
	// }


	// public function index()
	// {

	// 	$data = array('title' => 'Data Produk Perbulan', 
	// 					'isi' => 'user2'
	// 			);
	// 	$this->load->view('front', $data, FALSE);

	// 	// $this->load->view('user');
	// }


// public function index()
// 	{
// 		$buah = $this->buah_model->listing();
// 		$buah1= $this->buah_model->listing();

// 		$data = array('title' => 'Data Produk Perbulan' , 
// 						'buah' => $buah ,
// 						'buah1' => $buah1,
// 						'isi' => 'user2'
// 				);
// 		$this->load->view('front', $data, FALSE);
// 	}

// }

public function __construct()
	{
		parent::__construct();
		$this->load->model('m_internet');
	}

	public function index()
	{
		$internet = $this->m_internet->listing();
		$internet1 = $this->m_internet->listing();
		

		$data = array('title' => 'Data Produk Perbulan' , 
						'internet' => $internet,
						'internet1' => $internet1,
						
						'isi' => 'user2',
				);
		$this->load->view('front', $data, FALSE);
	}}