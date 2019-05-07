<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model{
	public function __construct() {
			parent::__construct();
		}	

	public function insert_booking($data)
	{
		$this->db->insert('cari',$data);
	}	

	public function cetak_mobil($kode)
	{
		$query = $this->db->where('id_penumpang');
		$query = $this->db->get('cari');
		return $query->row();
	}
	
	public function tampil_data()
	{
	    $sql = "SELECT * FROM cari";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function get_data()
	{
		$query = $this->db->order_by('id_penumpang')->get('cari');
		return $query->result();
	}
	

	public function hapus($id_penumpang) {
			$this->db->where('id_penumpang', $id_penumpang);
			$this->db->delete('cari');
		}
		
	public function getById($id_penumpang) {
			return $this->db->get_where('cari', array('id_penumpang' => $id_penumpang))->row();
		}
	public function update($id_penumpang) {
			$id_penumpang = $this->input->post('id_penumpang');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$noHp = $this->input->post('noHp');
			$asal = $this->input->post('asal');
			$tujuan = $this->input->post('tujuan');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'id_penumpang' => $id_penumpang,
				'nama' => $nama,
				'alamat' => $alamat,
				'noHp' => $noHp,
				'asal' => $asal,
				'tujuan' => $tujuan,
				'tanggal' => $tanggal
			);
				
			$this->db->where('id_penumpang', $id_penumpang);
			$this->db->update('cari', $data);
		}

	public function get_cari_list($limit, $start){
		$query = $this->db->get('cari', $limit, $start);
		return $query;
	}

	public function tambah_data($id_penumpang, $nama, $alamat, $noHp, $asal, $tujuan, $tanggal){
		$id_penumpang = $this->input->post('id_penumpang');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$noHp = $this->input->post('noHp');
			$asal = $this->input->post('asal');
			$tujuan = $this->input->post('tujuan');
			$tanggal = $this->input->post('tanggal');
	$data = array(
				'id_penumpang' => $id_penumpang,
				'nama' => $nama,
				'alamat' => $alamat,
				'noHp' => $noHp,
				'asal' => $asal,
				'tujuan' => $tujuan,
				'tanggal' => $tanggal
			);
				
			$this->db->insert('cari', $data);
		}
}