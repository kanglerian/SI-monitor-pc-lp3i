<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ruangan extends CI_Model{

  public function tampilkan_data_id($id)
  {
    return $this->db->query
    ("select*from tbl_ruangan where id_ruangan like '%$id%' or nama_ruangan like '%$id%' or sound like '%$id%' or
                                  lantai like '%$id%' or kapasitas like '%$id%' or status like '%$id%'");
  }

  function tampilkan_data()
  {
    $this->db->order_by('id_ruangan','asc');
    return $this->db->get('tbl_ruangan');
  }

  function input()
  {
    $data=array(
      'id_ruangan' => $this->input->post('id_ruangan'),
      'nama_ruangan' => $this->input->post('nama_ruangan'),
      'lantai' => $this->input->post('lantai'),
      'sound' => $this->input->post('sound'),
      'kapasitas' => $this->input->post('kapasitas'),
      'deskripsi' => $this->input->post('deskripsi'),
      'status' => $this->input->post('status')
      );
    $this->db->insert('tbl_ruangan',$data);
  }

  public function getRuangById($id){
    $query = $this->db->query("select*from tbl_ruangan where id_ruangan='$id'");
    return $query->result_array();
  }

  function edit()
    {
      $data=array(
        'id_ruangan' => $this->input->post('id_ruangan'),
        'nama_ruangan' => $this->input->post('nama_ruangan'),
        'lantai' => $this->input->post('lantai'),
        'sound' => $this->input->post('sound'),
        'kapasitas' => $this->input->post('kapasitas'),
        'deskripsi' => $this->input->post('deskripsi'),
        'status' => $this->input->post('status')
        );
      $this->db->where('id_ruangan', $this->input->post('id'));
      $this->db->update('tbl_ruangan',$data);
    }

    function delete($id)
    {
      $this->db->where('id_ruangan',$id);
      $this->db->delete('tbl_ruangan');

    }

}
