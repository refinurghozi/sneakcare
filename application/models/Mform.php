<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mform extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  public function add($data)
  {
      $this->db->insert('orderan', $data);
  }
  public function tampildata()
	{
		$query = $this->db->get('orderan');
  //$query = $this->db->query('SELECT * from peserta');
		return $query->result_array();

	}
  public function delete($id)
  {

      $this->db->delete('orderan', array('id' => $id));
  }

}
