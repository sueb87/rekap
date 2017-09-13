<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function insert($id_petugas, $struk){
		$data = array(
			'ID_ANGGOTA'	=> $this->input->post('idp'),
			'ID_ADMIN'		=> $id_petugas,
			'TANGGAL'		=> $this->input->post('tanggal'),
			'PERIHAL'		=> $this->input->post('perihal'),
			'PENGGUNA'		=> $this->input->post('pengguna'),
			'PERIODE'		=> $this->input->post('periode'),
			'KETERANGAN'	=> $this->input->post('keterangan'),
			'KEPERLUAN'		=> $this->input->post('keperluan'),
			'VOLUME'		=> $this->input->post('volume'),
			'HARGA'			=> $this->input->post('harga'),
			'NOPOL'			=> $this->input->post('nopol'),
			'USER'			=> $this->input->post('user'),
			'FOTO'			=> $struk['file_name'],
			'D_CREATED'		=> date('Ymd')
			 );

		$this->db->insert('anggota', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getList(){
		return $query = $this->db->order_by('id_anggota','ASC')->get('anggota')->result();
	}

	public function getCount(){
		return $this->db->count_all('anggota');
	}

	public function getDetail($id){
		return $this->db->where('ID_ANGGOTA', $id)->get('anggota')->row();
	}

	public function checkAvailability($id){
		$query = $this->db->where('ID_ANGGOTA', $id)->get('anggota');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('ID_ANGGOTA', $id)->delete('anggota');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */