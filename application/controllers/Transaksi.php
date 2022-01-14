<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer','Model_transaksi'));
    }

    public function result(){
        $id = $this->input->get("v");
        $data['list_det_komputer']= $this->Model_transaksi->tampilkan_data_id($id);
        $data['list_komputer']= $this->Model_komputer->tampilkan_data_id($id);
        $data['list_tools']= $this->Model_tools->tampilkan_data();
        $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
        $this->load->view('layout/header',$data);
        $this->load->view('layout/side',$data);
        $this->load->view('Transaksi/data_transaksi',$data);
        $this->load->view('layout/footer');
      }

      public function resultr(){
          $id = $this->input->get("vr");
          $data['list_det_ruangan']= $this->Model_transaksi->tampilkan_data_idr($id);
          $data['list_komputer']= $this->Model_komputer->tampilkan_data();
          $data['list_tools']= $this->Model_tools->tampilkan_data();
          $data['list_ruangan']= $this->Model_ruangan->tampilkan_data_id($id);
          $this->load->view('layout/header',$data);
          $this->load->view('layout/side',$data);
          $this->load->view('Transaksi/data_transaksi_ruangan',$data);
          $this->load->view('layout/footer');
        }

  function index()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['list_det_komputer']= $this->Model_transaksi->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Transaksi/data_transaksi',$data);
    $this->load->view('layout/footer');
  }

  function ruangan()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['list_det_ruangan']= $this->Model_transaksi->tampilkan_data_r();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Transaksi/data_transaksi_ruangan',$data);
    $this->load->view('layout/footer');
  }

  function input()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_transaksi->input();
        redirect('Transaksi/input');
    }else{

    $data['list_komputer']= $this->Model_komputer->tampilkan_data_pc();
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Transaksi/input_transaksi',$data);
    $this->load->view('layout/footer');
      }
  }

  function inputruangan()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_transaksi->inputruangan();
        redirect('Transaksi/inputruangan');
    }else{

    $data['list_komputer']= $this->Model_komputer->tampilkan_data_pc();
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Transaksi/input_transaksi_ruangan',$data);
    $this->load->view('layout/footer');
      }
  }

  function edit()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_transaksi->edit();
        redirect('Transaksi');
    }else{
      $id = $this->uri->segment(3);
      $data['list_tools']= $this->Model_tools->tampilkan_data();
      $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
      $data['list_komputer']= $this->Model_komputer->tampilkan_data();
      $data['baris']=$this->Model_transaksi->getTransaksiById($id);
      $this->load->view('Transaksi/edit_transaksi',$data);
    }
  }

  function editruangan()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_transaksi->editruangan();
        redirect('Transaksi');
    }else{
      $id = $this->uri->segment(3);
      $data['list_tools']= $this->Model_tools->tampilkan_data();
      $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
      $data['list_komputer']= $this->Model_komputer->tampilkan_data();
      $data['baris']=$this->Model_transaksi->getTransaksiByIdR($id);
      $this->load->view('Transaksi/edit_transaksi_ruangan',$data);
    }
  }

  function delete()
  {
    $id= $this->uri->segment(3);
    $this->Model_transaksi->delete($id);
    redirect('Komputer');
  }


}
