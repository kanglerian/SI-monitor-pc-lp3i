<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_komputer extends CI_Model{

  function tampilkan_jml_lab1()
  {
    return $this->db->query
    ("select*from tbl_komputer where id_ruangan like '301'");
  }

  function tampilkan_jml_lab2()
  {
    return $this->db->query
    ("select*from tbl_komputer where id_ruangan like '302'");
  }

  function tampilkan_jml_lab3()
  {
    return $this->db->query
    ("select*from tbl_komputer where id_ruangan like '303'");
  }

  public function tampilkan_data_id($id)
  {
    return $this->db->query
    ("select*from v_mkomputer where id_komputer like '%$id%' or nama_komputer like '%$id%' or no_meja like '%$id%' or
                                    nama_ruangan like '%$id%' or kabel like '%$id%' or status like '%$id%' order by no_meja asc");
  }

  function tampilkan_data()
  {
    $this->db->order_by('no_meja','asc');
    return $this->db->get('v_mkomputer');
  }

  function tampilkan_data_pc()
  {
    $this->db->order_by('id_komputer','asc');
    return $this->db->get('v_mkomputer');
  }


  function input()
  {
    $data=array(
      'id_komputer' => $this->input->post('id_komputer'),
      'no_meja' => $this->input->post('no_meja'),
      'nama_komputer' => $this->input->post('nama_komputer'),
      'id_ruangan' => $this->input->post('id_ruangan'),
      'kabel' => $this->input->post('kabel'),
      'deskripsi' => $this->input->post('deskripsi'),
      'status' => $this->input->post('status')
      );
    $this->db->insert('tbl_komputer',$data);
  }

  public function getKomputerById($id){
    $query = $this->db->query("select*from tbl_komputer where id_komputer='$id'");
    return $query->result_array();
  }

  function edit()
    {
      $data=array(
        'id_komputer' => $this->input->post('id_komputer'),
	'no_meja' => $this->input->post('no_meja'),
        'nama_komputer' => $this->input->post('nama_komputer'),
        'id_ruangan' => $this->input->post('id_ruangan'),
        'kabel' => $this->input->post('kabel'),
        'deskripsi' => $this->input->post('deskripsi'),
        'status' => $this->input->post('status')
        );
      $this->db->where('id_komputer', $this->input->post('id'));
      $this->db->update('tbl_komputer',$data);
    }

  function delete($id)
  {
    $this->db->where('id_komputer',$id);
    $this->db->delete('tbl_komputer');

  }

  function laporan_default()
    {
        $query="SELECT a.id_komputer,a.no_meja,a.nama_komputer,a.nama_ruangan,a.kabel,a.deskripsi,a.status
                FROM v_mkomputer as a";
        return $this->db->query($query);
    }


}
