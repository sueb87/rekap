 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function insert($id_petugas){
		$data = array(
			'ID_BUKU'		=> $this->input->post('idp'),
			'ID_ADMIN'		=> $id_petugas,
			'ID_REKAP'		=> $this->input->post('rekap'),
			'TANGGAL'		=> $this->input->post('tanggal'),
			'URAIAN'		=> $this->input->post('uraian'),
			'PENERIMA'		=> $this->input->post('penerima'),
			'NILAI'			=> $this->input->post('nilai'),
			'KET'			=> $this->input->post('ket'),
			'APM'			=> $this->input->post('apm')
			 );

		$this->db->insert('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function update($id){
		$data = array(
			'ID_REKAP'		=> $this->input->post('rekap'),
			'TANGGAL'		=> $this->input->post('tanggal'),
			'URAIAN'		=> $this->input->post('uraian'),
			'PENERIMA'		=> $this->input->post('penerima'),
			'NILAI'			=> $this->input->post('nilai'),
			'KET'			=> $this->input->post('ket'),
			'APM'			=> $this->input->post('apm')
			 );

		$this->db->where('ID_BUKU', $id)->update('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getCount(){
		return $this->db->count_all('buku');
	}

	public function getList(){
		return $query = $this->db->order_by('ID_BUKU','ASC')->get('buku')->result();
	}

	public function getDetail($id){
		return $this->db->where('ID_BUKU', $id)->get('buku')->row();
	}

	public function delete($id){
		$this->db->where('ID_BUKU', $id)->delete('buku');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function checkAvailability($id){
		$query = $this->db->where('ID_BUKU', $id)->get('buku');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */