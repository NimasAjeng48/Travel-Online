<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    //memanggil function dari MY_Controller
    $this->cekLogin();
    $this->load->model('Model1');
    //validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
    if ($this->session->userdata('level') == "customer") {
      redirect('admin/admin/index');
    }
}

  public function index()
  {
    $data['data'] = $this->Model1->get_data();
     $this->load->view('admin/Dashboard',$data);
  }
}