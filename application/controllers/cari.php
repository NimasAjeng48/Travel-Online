<?php
class Cari extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cari_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['cari'] = $this->cari_model->get_form();
		$data['title'] = 'Form Pendaftaran Mahasiswa Baru';

		$this->load->view('templates/header', $data);
		$this->load->view('cari/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id_penumpang = NULL)
	{
		$data['cari_item'] = $this->cari_model->get_form($id_penumpang);

		if (empty($data['cari_item'])) 
		{
			show_404();
		}

		$data['id_penumpang'] = $data['id_penumpang'];

		$this->load->view('templates/header', $data);
		$this->load->view('cari/view', $data);
		$this->load->view('templates/footer');
	}
}