<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer','Model_transaksi'));
    }

  function index()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['jml_lab1']= $this->Model_komputer->tampilkan_jml_lab1();
    $data['jml_lab2']= $this->Model_komputer->tampilkan_jml_lab2();
    $data['jml_lab3']= $this->Model_komputer->tampilkan_jml_lab3();
    $data['log']=$this->db->get_where('tbl_user',array('user_id' => $this->session->userdata('username')))->result();
		$this->load->view('layout/header',$data);
		$this->load->view('layout/side');
    $this->load->view('dashboard',$data);
		$this->load->view('layout/footer');
  }

  function hallo()
  {
    $this->load->view('layout/hallo');
  }
}
