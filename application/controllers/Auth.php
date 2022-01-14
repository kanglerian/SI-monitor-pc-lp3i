<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer','Model_user'));
    }

  function index()
  {
    if (isset($_POST['submit'])){

      //proses login disini

      $username= $this->input->post('username');
      $password= $this->input->post('password');
      $hasil = $this->Model_user->login($username,$password);
      if($hasil==1)
      {
        $this->session->set_userdata(array('status_login'=>'oke'));
        redirect('Dashboard');
      }else{
        redirect('Auth/');
      }

    }else{

    $this->load->view('Auth/login.php');

    }

  }

  function register()
  {
    $this->load->view('Auth/register.php');
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('Auth/');
  }

  function profile()
  {
    $data['daftar_tools']= $this->model_tools->tampilkan_data();
    $data['daftar_rooms']= $this->model_rooms->tampilkan_data();
    $data['daftar_hilang']= $this->model_hilang->tampilkan_data();
    $data['daftar_komputer']= $this->model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side',$data);
    $this->load->view('auth/Profile');
    $this->load->view('layout/footer');
  }

}
