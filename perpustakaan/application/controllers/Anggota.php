<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Anggota_model');
		$this->load->model('Petugas_model');
		if($this->session->userdata('logged_in') == false){
			redirect('welcome');
		}
	}

	public function index(){
		$data['title'] = 'Anggota';
		$data['list'] = $this->Anggota_model->getList();
		$data['primary_view'] = 'anggota/anggota_view';
		$data['total'] = $this->Anggota_model->getCount();
		$this->load->view('template_view', $data);
	}

	public function detail(){
		$data['title'] = 'Detail Anggota';

		//GET : Detail data
		$id = $this->input->get('idtf');
		$data['row'] = $this->Anggota_model->getDetail($id);
		//CHECK : Data Availability
		if($this->Anggota_model->checkAvailability($id) == true){
			$data['primary_view'] = 'anggota/detail_anggota_view';
		}else{
			$data['primary_view'] = '404_view';
		}
		$this->load->view('template_view', $data);
	}

	public function add(){
		$data['title'] = 'Tambah Anggota';
		$data['primary_view'] = 'anggota/add_anggota_view';
		$this->load->view('template_view', $data);
	}

	public function submit(){
		if($this->input->post('t')){
			$this->form_validation->set_rules('perihal', 'Perihal', 'trim|required');
			$this->form_validation->set_rules('pengguna', 'Pengguna', 'trim|required');
			$this->form_validation->set_rules('periode', 'Periode', 'trim|required');
			$this->form_validation->set_rules('volume', 'Volume', 'trim|required|numeric');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

			if ($this->form_validation->run() == true) {
				$config['upload_path'] = './assets/images/upload/anggota/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';
				
				$this->load->library('upload', $config);

				//GET : Petugas ID
				$username = $this->session->userdata('username');
				$id_petugas = $this->Petugas_model->getID($username);

				if ($this->upload->do_upload('struk')){
					if($this->Anggota_model->insert($id_petugas, $this->upload->data()) == true){
						$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
						redirect('anggota/add');
					}else{
						$this->session->set_flashdata('announce', 'Gagal menyimpan data');
						redirect('anggota/add');
					}
				}else{
					$this->session->set_flashdata('announce', $this->upload->display_errors());
					redirect('anggota/add');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('anggota/add');
			}
		}
	}

	public function delete(){
		$id = $this->input->get('rcgn');
		if($this->Anggota_model->delete($id) == true){
			$this->session->set_flashdata('announce', 'Berhasil menghapus data');
			redirect('anggota');
		}else{
			$this->session->set_flashdata('announce', 'Gagal menghapus data');
			redirect('anggota');
		}
	}
}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */