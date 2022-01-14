<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komputer extends CI_Controller{

  function __construct()
    {
      parent::__construct();
      $this->load->model(array('Model_tools','Model_ruangan','Model_komputer'));
    }

  public function result(){
    $id = $this->input->get("v");
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data_id($id);
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side',$data);
    $this->load->view('Komputer/data_komputer',$data);
    $this->load->view('layout/footer');
      }

  function index()
  {
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Komputer/data_komputer',$data);
    $this->load->view('layout/footer');
  }

  function detail()
  {
    $id = $this->uri->segment(3);
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['baris']=$this->Model_komputer->getKomputerById($id);
    $this->load->view('Komputer/detail_komputer',$data);
  }

  function input()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_komputer->input();
        redirect('Komputer');
    }else{

    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $this->load->view('layout/header',$data);
    $this->load->view('layout/side');
    $this->load->view('Komputer/data_komputer',$data);
    $this->load->view('layout/footer');
      }
  }

  function edit()
  {
    if (isset($_POST['submit'])){
        //proses kategori
        $this->Model_komputer->edit();
        redirect('Komputer');
    }else{
    $id = $this->uri->segment(3);
    $data['list_tools']= $this->Model_tools->tampilkan_data();
    $data['list_ruangan']= $this->Model_ruangan->tampilkan_data();
    $data['list_komputer']= $this->Model_komputer->tampilkan_data();
    $data['baris']=$this->Model_komputer->getKomputerById($id);
    $this->load->view('Komputer/edit_komputer',$data);
    }
  }

  function delete()
  {
    $id= $this->uri->segment(3);
    $this->Model_komputer->delete($id);
    redirect('Komputer');
  }

  function pdf()
    {
        $this->load->library('Cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'LAPORAN TRANSAKSI');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(40, 7, 'ID Komputer', 1,0);
        $pdf->Cell(70, 7, 'Nama Komputer', 1,0);
        $pdf->Cell(40, 7, 'Status', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->Model_komputer->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(40, 7, $r->id_komputer, 1,0);
            $pdf->Cell(70, 7, $r->nama_komputer, 1,0);
            $pdf->Cell(40, 7, $r->status, 1,1);
            $no++;
        }
        // end
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Output();
    }


}
