<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoe extends CI_Controller{

  /*public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('url');
  }*/
  function index()
  {
      $this->load->view('home');
  }
  function home()
  {
      $this->load->view('home');
  }
  function promo()
  {
      $this->load->view('promo');
  }
  function order()
  {
      $this->load->view('order');
  }
  function masuk()
  {
      $this->load->view('masuk');
  }
  function adminpanel()
  {
      $this->load->view('admin');
  }
  function tabeladmin()
  {
      $this->load->view('pagadmin/tables');
      
  }

  }
