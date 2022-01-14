<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tools extends CI_Model{

  public function tampilkan_data_id($id)
  {
    return $this->db->query
    ("select*from v_mtools where id_tools like '%$id%' or nama_tools like '%$id%' or isbn like '$id' or
                                  nama_kategori like '%$id%' or generasi like '%$id%' or nama_ruangan like '%$id%' or
                                  version like '%$id%' or model like '%$id%' or status like '%$id%'");
  }

  function tampilkan_data()
  {
    $this->db->order_by('id_tools','asc');
    return $this->db->get('v_mtools');
  }

  function tampilkan_dataktgr()
  {
    $this->db->order_by('id_kategori','asc');
    return $this->db->get('tbl_kategori');
  }

  function input()
  {
    $data=array(
      'id_tools' => $this->input->post('id_tools'),
      'isbn' => $this->input->post('isbn'),
      'nama_tools' => $this->input->post('nama_tools'),
      'id_kategori' => $this->input->post('id_kategori'),
      'id_ruangan' => $this->input->post('id_ruangan'),
      'generasi' => $this->input->post('generasi'),
      'version' => $this->input->post('version'),
      'model' => $this->input->post('model'),
      'deskripsi' => $this->input->post('deskripsi'),
      'tgl_beli' => $this->input->post('tgl_beli'),
      'status' => $this->input->post('status')
      );
    $this->db->insert('tbl_tools',$data);
  }

  function inputktgr()
  {
    $data=array(
      'nama_kategori' => $this->input->post('nama_kategori')
      );
    $this->db->insert('tbl_kategori',$data);
  }

  public function getToolsById($id){
    $query = $this->db->query("select*from tbl_tools where id_tools='$id'");
    return $query->result_array();
  }

  function getKategoriById($id){
    $query = $this->db->query("select*from tbl_kategori where id_kategori ='$id'");
    return $query->result_array();
  }

  function edit()
    {
      $data=array(
        'id_tools' => $this->input->post('id_tools'),
        'isbn' => $this->input->post('isbn'),
        'nama_tools' => $this->input->post('nama_tools'),
        'id_kategori' => $this->input->post('id_kategori'),
        'id_ruangan' => $this->input->post('id_ruangan'),
        'generasi' => $this->input->post('generasi'),
        'version' => $this->input->post('version'),
        'model' => $this->input->post('model'),
        'deskripsi' => $this->input->post('deskripsi'),
        'tgl_beli' => $this->input->post('tgl_beli'),
        'status' => $this->input->post('status')
        );
      $this->db->where('id_tools', $this->input->post('id'));
      $this->db->update('tbl_tools',$data);
    }

    function editktg()
      {
        $data=array(
          'id_kategori' => $this->input->post('id_kategori'),
          'nama_kategori' => $this->input->post('nama_kategori')
          );
        $this->db->where('id_kategori', $this->input->post('id'));
        $this->db->update('tbl_kategori',$data);
      }

    function delete($id)
    {
      $this->db->where('id_tools',$id);
      $this->db->delete('tbl_tools');

    }

    function deletektg($id)
    {
      $this->db->where('id_kategori',$id);
      $this->db->delete('tbl_kategori');

    }

}
