<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buah extends CI_Controller {

	//constract
	public function __construct()
	{
		parent::__construct();
		$this->load->model('buah_model');
	}

	public function index()
	{
		$buah = $this->buah_model->listing();
		$buah1= $this->buah_model->listing();

		$data = array('title' => 'Data Produk Perbulan' , 
						'buah' => $buah ,
						'buah1' => $buah1,
						'isi' => 'admin/buah/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$valid= $this->form_validation;
		$valid->set_rules(	'data1','Data 1','required',
					array(	'required' => '%s harus diisi'));
		$valid->set_rules(	'data2','Data 2','required',
					array(	'required' => '%s harus diisi'));
		$valid->set_rules(	'bulan','Bulan','required',
					array(	'required' => '%s harus diisi'));
		

			if($valid->run() === FALSE){

		$data = array('title' => 'tambah Buah Data' , 
						'isi' => 'admin/buah/tambah'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
			$i=$this->input;
			// $slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
			$data = array(	
							'data1'		=>$i->post('data1'),
							'data2'		=> $i->post('data2'),
							'bulan'			=> $i->post('bulan')
							
						);
			$this->buah_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
			redirect(base_url('admin/buah'),'refresh');

		}
	}

	public function delete($id) 
	{
		$this->db->delete('data', array('id' => $id)); 
		$this->session->set_flashdata('sukses', 'Berhasil Dihapus');
		redirect(base_url('admin/buah'),'refresh');
	}

	// public function update()
 //    {
 //        $post = $this->input->post('id');
 //        $this->bulan = $post["bulan"];
 //        $this->data1 = $post["data1"];
 //        $this->data2 = $post["data2"];
 //        $this->db->update($this->buah, $this, array('id' => $post['id']));
 //    }

	public function update($id=null){
		// $id = $this->input->post('id');
		$bulan = $this->input->post('bulan');
		$data1 = $this->input->post('data1');
		$data2 = $this->input->post('data2');

		$data = array(
			'bulan' => $bulan,
			'data1' => $data1,
			'data2' => $data2
		);


		// $this->Buah_model->update($where,$data,'buah');
		$this->db->where('id', $id); 
		$this->db->update('data', $data); 
		// $this->db->update('data', array('id' => $id)); 
		redirect(base_url('admin/buah'),'refresh');
	}

	// public function update() { 
	// 	$id=$this->uri->segment(3); 
	// 	$data=array( "bulan" => $this->input->post('bulan'), "data1" => $this->input->post('data1'),"data2" => $this->input->post('data2'), );
	// 	$this->db->where('id',$id); 
	// 	$this->db->update('data',$data); 
	// 	redirect(base_url('admin/buah'),'refresh'); 
	// }

}

/* End of file Data.php */
/* Location: ./application/controllers/admin/Data.php */