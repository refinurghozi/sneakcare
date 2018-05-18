<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model("Mshoe");
    if(!empty($_SESSION['id_user']))
        redirect(base_url('Shoe/adminpanel'));
  }

  function index()
  {
    if($_POST) {
        $result = $this->Mshoe->validate_admin($_POST);
        if(!empty($result)) {
            $data =[
                'username' => $result->username,
                'password' => sha1($result->password),
            ];
            $_SESSION['id_user']=$data;
            $this->session->set_userdata('user',$data);
            $user= array(
              'user' => $this->session->userdata('user')
            );
            redirect(base_url('Shoe/adminpanel'));

        } else {
            $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
            redirect(base_url('Shoe/masuk'));
        }
    }
    else
    $this->load->view(base_url('Shoe/masuk'));
  }

}
