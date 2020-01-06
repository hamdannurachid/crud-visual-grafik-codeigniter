<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internet extends CI_Controller {

	//constract
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
						
						'isi' => 'admin/buah/v_internet'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$valid= $this->form_validation;
		$valid->set_rules(	'tahun','Tahun','required',
			array(	'required' => '%s harus diisi'));
		$valid->set_rules(	'jumlah','Jumlah','required',
			array(	'required' => '%s harus diisi'));
		
		

		if($valid->run() === FALSE){

			$data = array('title' => 'tambah Buah Data' , 
				'isi' => 'admin/internet/tambah'
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i=$this->input;
			// $slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
			$data = array(	
				'tahun'			=> $i->post('tahun'),
				'jumlah'		=>$i->post('jumlah')


			);
			$this->m_internet->tambah($data);
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
			redirect(base_url('admin/internet'),'refresh');

		}
	}

	public function delete($id) 
	{
		$this->db->delete('internet', array('id' => $id)); 
		$this->session->set_flashdata('sukses', 'Berhasil Dihapus');
		redirect(base_url('admin/internet'),'refresh');
	}


	public function update($id=null){
		// $id = $this->input->post('id');
		$tahun = $this->input->post('tahun');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'tahun' => $tahun,
			'jumlah' => $jumlah,
		);


		$this->db->where('id', $id); 
		$this->db->update('internet', $data); 
		redirect(base_url('admin/internet'),'refresh');
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/admin/Data.php */