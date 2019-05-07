<?php
class Cari_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_form($id_penumpang = FALSE)
	{
		if ($id_penumpang === FALSE) 
		{
			$query = $this->db->get('cari');
			return $query->result_array();
		}

		$query = $this->db->get_where('cari');
		return $query->row_array();
	}

	public function get_form_by_id($id_penumpang = 0)
	{
		if ($id === 0) 
		{
			$query = $this->db->get('cari');
			return $query->result_array();
		}

		$query = $this->db->get_where('cari', array('id_penumpang' => $id_penumpang));
		return $query->row_array();
	}

	public function set_form($id_penumpang = 0)
	{
		$this->load->helper('url');

		$Prodi = url_title($this->input->post('id_penumpang'), 'dash', TRUE);

		$data = array(
			'id_penumpang' => $this->input->post('id_penumpang'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'noHp' => $this->input->post('noHp'),
			'asal' => $this->input->post('asal'),
			'tujuan' => $this->input->post('tujuan'),
			'tanggal' => $this->input->post('tanggal')
		);

		if ($id_penumpang == 0) 
		{
			return $this->db->insert('cari', $data);
		}
		else
		{
			$this->db->where('id_penumpang', $id_penumpang);
			return $this->db->update('cari', $data);
		}
	}

	public function delete_form($id_penumpang)
	{
		$this->db->where('id_penumpang', $id_penumpang);
		return $this->db->delete('cari');
	}
}