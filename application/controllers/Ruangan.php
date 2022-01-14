<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer'));
    }

  public function result(){
      $id = $this->input->get("v");
      $data['list_tools']= $this->Model_tools->tampilkan_data();
      $data['list_komputer']= $this->Model_komputer->tampilkan_data();
      $data['list_ruangan']= $this->Model_ruangan->tampilkan_data_id($id);
      $this->load->view('layout/header',$data);
      $this->load->view('layout/side',$data);
      $this->load->view('Ruangan/data_ruangan',$data);
      $this->load->view('layout/footer');
    }

  function index()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Ruangan/data_ruangan',$data);
    $this->load->view('layout/footer');
  }

  function input()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_ruangan->input();
        redirect('Ruangan');
    }else{
	
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Ruangan/data_ruangan',$data);
    $this->load->view('layout/footer');
      }
  }

  function detail()
  {
    $id = $this->uri->segment(3);
    $data['baris']=$this->Model_ruangan->getRuangById($id);
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();

    $this->load->view('Ruangan/detail_ruangan',$data);
  }

  function edit()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_ruangan->edit();
        redirect('Ruangan');
    }else{
    $id = $this->uri->segment(3);
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['baris']=$this->Model_ruangan->getRuangById($id);
    $this->load->view('Ruangan/edit_ruangan',$data);
    }
  }

  function delete()
  {
    $id= $this->uri->segment(3);
    $this->Model_ruangan->delete($id);
    redirect('Ruangan');
  }

}
