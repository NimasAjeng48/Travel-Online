<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller 
{
		public function __construct()
	{
		parent::__construct();
		$this->load->model('model1');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('index');

	}

	public function about()
	{
		$this->load->view('about');
	}

	public function about2()
	{
		$this->load->view('about2');
	}

	public function book()
	{
		$this->load->view('book');
	}

	public function book2()
	{
		$this->load->view('book2');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function cetak($kode)
	{
		$data['id_penumpang'] = $row->id_penumpang;
		$data['nama'] = $row->nama;
		$data['alamat'] = $row->alamat;
		$data['noHp'] = $row->noHp;
		$data['asal'] = $row->asal;
		$data['tujuan'] = $row->tujuan;
		$data['tanggal'] = $row->tanggal;
		$this->load->view('cetak',$data);
	}

	public function contact2()
	{
		$this->load->view('contact2');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function authentication()
	{
		$this->load->view('authentication/login');
	}

	public function insert_data()
	{
		$data = array(
					'id_penumpang'	=> $this->input->post('id'),
					'nama'		=> $this->input->post('nama'),
					'alamat'	=> $this->input->post('alamat'),
					'noHp'	=> $this->input->post('noHp'),
					'asal'			=> $this->input->post('asal'),
					'tujuan'		=> $this->input->post('tujuan'),
					'tanggal'=> $this->input->post('departure')
			);
			$this->model1->insert_booking($data);
	}

	public function Logout()
	{
		$this->load->view('indexLogout');
	}

	public function home()
	{
		$this->load->view('halaman/index');
	}

	public function cari()
	{
		$config['base_url'] = site_url('welcome/index'); // site url
		$config['total_rows'] = $this->db->count_all('cari'); // total row
		$config['per_page'] = 5; //show record per halaman
		$config["uri_segment"] = 3; //uti parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		//Membuat Style pagination untuk BootStrap v4
		$config['first_link']				= 'First';
		$config['last_link']				= 'Last';
		$config['next_link']				= 'Next';
		$config['prev_link']				= 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
	    $config['full_tag_close']   = '</ul></nav></div>';
	    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	    $config['num_tag_close']    = '</span></li>';
	    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
	    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['prev_tag_close']  	= '</span></li>';
	    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	    $config['first_tag_close'] 	= '</span></li>';
	    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['last_tag_close']  	= '</span></li>';

		$this->pagination->initialize($config);
		$data['page']	= ($this->uri->segment(3) ? $this->uri->segment(3) : 0);

		$data['data']	= $this->model1->get_mahasiswa_list($config["per_page"], $data['page']);
		$data['pagination']	= $this->pagination->create_links();

		//load view mahasiswa view
		$this->load->view('list_data', $data);
	}
	
	public function tambah()
	{
		
		$this->load->view('halaman/tambah_data');
	}
	
	function tambah_data(){
			$id_penumpang = $this->input->post('id_penumpang');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$noHp = $this->input->post('noHp');
			$asal = $this->input->post('asal');
			$tujuan = $this->input->post('tujuan');
			$tanggal = $this->input->post('tanggal');
			
			
			$this->Model1->tambah_data($id_penumpang,$nama, $alamat, $noHp, $asal, $tujuan, $tanggal);
			redirect('admin/admin/index');	
	}
	
	public function hapus_data($id_penumpang) {
			$this->Model1->hapus($id_penumpang);
			redirect('admin/admin/index');
		}
		
	function ubah_data($id_penumpang) {
			if($this->input->post('submit')) {
				$this->Model1->update($id_penumpang);
				redirect('admin/admin/index');
			}
			$data['hasil'] = $this->Model1->getById($id_penumpang);
			$this->load->view('v_update_data', $data);
		}

	
}