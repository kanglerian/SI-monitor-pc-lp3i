<?php
class Hilang extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('model_tools','model_rooms','model_hilang','model_komputer')); //-- ini bisa lebih dari 2 model, dan bisa digunakan oleh semua
    }

  public function result()
  {
    $id = $this->input->get("v");
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data_id($id);
    $this->load->view('layout/header');
    $this->load->view('layout/side',$data);
    $this->load->view('hilang/lihat_hilang',$data);
    $this->load->view('layout/footer');
  }

  function index()
  {

    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $this->load->view('layout/header');
    $this->load->view('layout/side',$data);
    $this->load->view('hilang/lihat_hilang',$data);
    $this->load->view('layout/footer');
  }

  function details()
  {

    $id= $this->uri->segment(3);

    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['record']= $this->model_hilang->get_one($id)->row_array();
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data();
    $this->load->view('layout/header');
    $this->load->view('layout/side',$data);
    $this->load->view('hilang/details_hilang',$data);
    $this->load->view('layout/footer');
  }

  function input()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->model_hilang->input();
        redirect('Hilang');
    }else{

    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data();
    $this->load->view('layout/header');
    $this->load->view('layout/side',$data);
    $this->load->view('hilang/input_hilang',$data);
    $this->load->view('layout/footer');
      }
  }

  function edit()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->model_hilang->edit();
        redirect('Hilang');
    }else{

    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data();
    $this->load->view('layout/header');
    $this->load->view('layout/side',$data);
    $id= $this->uri->segment(3);
    $data['record']= $this->model_hilang->get_one($id)->row_array();
    $this->load->view('hilang/edit_hilang',$data);
    $this->load->view('layout/footer');
      }
  }

  function delete()
  {
    $id= $this->uri->segment(3);
    $this->model_hilang->delete($id);
    redirect('Hilang');
  }

}
