<?php
class Customer extends MY_Controller{

 public function __construct(){
  parent::__construct();

  //memanggil function dari controller MY_Controller
  $this->cekLogin();

  //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "admin") {
      redirect('customer/customer/index');
 }
}

  public function index()
  {
    $this->load->view('customer/Dashboard');
  }
}
?>