<?php
  class Users_model extends CI_Model {

    //mengambil tabel users
    public $table = 'users';

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      if(!$query) return 1;
      if($query->active == 0) return 2;

      $hash = $query->password;
      if(md5($password) != $hash) return 3;

      return $query;
    }
  }
?>