<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer'));
    }

  public function result(){
    $id = $this->input->get("v");
    $data['list_tools']= $this->Model_tools->tampilkan_data_id($id);
    $data['list_kategori']= $this->Model_tools->tampilkan_dataktgr();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side',$data);
    $this->load->view('Tools/data_tools',$data);
    $this->load->view('layout/footer');
  }

  function index()
  {
    $data['list_kategori']= $this->Model_tools->tampilkan_dataktgr();
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Tools/data_tools',$data);
    $this->load->view('layout/footer');
  }

  function kategori()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['list_kategori']= $this->Model_tools->tampilkan_dataktgr();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Tools/data_kategori',$data);
    $this->load->view('layout/footer');
  }

  function input()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_tools->input();
        redirect('Tools');
    }else{

    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Tools/data_tools',$data);
    $this->load->view('layout/footer');
      }
  }

  function inputkategori()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_tools->inputktgr();
        redirect('Tools');
    }else{

    $data['list_kategori']= $this->Model_tools->tampilkan_dataktgr();
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Tools/data_kategori',$data);
    $this->load->view('layout/footer');
      }
  }

  function detail()
  {
    $id = $this->uri->segment(3);
    $data['baris']=$this->Model_tools->getToolsById($id);
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('Tools/detail_tools',$data);
  }

  function edit()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_tools->edit();
        redirect('Tools');
    }else{
      $id = $this->uri->segment(3);
      $data['list_kategori']= $this->Model_tools->tampilkan_dataktgr();
      $data['list_tools']= $this->Model_tools->tampilkan_data();
      $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
      $data['list_komputer']= $this->Model_komputer->tampilkan_data();
      $data['baris']=$this->Model_tools->getToolsById($id);
      $this->load->view('Tools/edit_tools',$data);
    }
  }

    function editktg()
    {
      if (isset($_POST['submit'])){
          //proses kategori
          $this->Model_tools->editktg();
          redirect('Tools');
      }else{
      $id = $this->uri->segment(3);
      $data['baris']=$this->Model_tools->getKategoriById($id);
      $data['list_tools']= $this->Model_tools->tampilkan_data();
      $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
      $data['list_komputer']= $this->Model_komputer->tampilkan_data();
      $this->load->view('Tools/edit_kategori',$data);
      }
  }

  function delete()
  {
    $id= $this->uri->segment(3);
    $this->Model_tools->delete($id);
    redirect('Tools');
  }

  function deletektg()
  {
    $id= $this->uri->segment(3);
    $this->Model_tools->deletektg($id);
    redirect('Tools/kategori');
  }

}
