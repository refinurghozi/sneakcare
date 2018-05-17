<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cform extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Mshoe');
    $this->load->model('Mform');

  }

  function index()
  {

  }

  function addorder()
  {
    // code
    $nama =$this->input->post('nama');
    $alamat =$this->input->post('alamat');
    $jumlah=$this->input->post('jumlah');
    $nomorhp=$this->input->post('nomorhp');
    $service=$this->input->post('service');
    $notes=$this->input->post('notes');

    $data = array(
                  'nama'         => $nama,
                  'alamat'        => $alamat,
                  'jumlah'     => $jumlah,
                  'nomorhp'       => $nomorhp,
                  'service'     => $service,
                  'notes'     => $notes
                );
    $this->Mform->add($data);
    redirect(base_url('Shoe/order'),'refresh');
    }
    public function readdata(){
      $data = $this->Mform->tampildata();
      $this->load->view('pagadmin/tables',array('data'=>$data));
    }
    public function deleteorder($id)
    {
      $this->Mform->delete($id);
      redirect('Cform/readdata','refresh');
    }

}
