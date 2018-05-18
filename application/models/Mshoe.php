<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mshoe extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }
  public function validate_admin($data) {
      $this->db->where('username', $data['username']);
      $this->db->where('password',sha1($data['password']));
      //$this->db->where('adm_password',sha1($data['adm_password']));
      return $this->db->get('admin')->row();
  }

  function __destruct() {
      $this->db->close();
  }

}
