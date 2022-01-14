<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model{

  public function tampilkan_data_id($id)
  {
    return $this->db->query
    ("select*from v_dtl_komputer where nama_komputer like '%$id%' or nama_tools like '%$id%'");
  }

  public function tampilkan_data_idr($id)
  {
    return $this->db->query
    ("select*from v_dtl_ruangan where nama_ruangan like '%$id%' or nama_tools like '%$id%'");
  }

  function tampilkan_data()
  {
    return $this->db->get('v_dtl_komputer');
  }

  function tampilkan_data_r()
  {
    return $this->db->get('v_dtl_ruangan');
  }

  function input()
  {
    $data=array(
      'id_komputer' => $this->input->post('id_komputer'),
      'id_tools' => $this->input->post('id_tools'),
      'tgl_pasang' => $this->input->post('tgl_pasang'),
      'tgl_lepas' => $this->input->post('tgl_lepas'),
      'deskripsi' => $this->input->post('deskripsi'),
      'status' => $this->input->post('status')
      );
    $this->db->insert('tbl_detail_komputer',$data);
  }

  function inputruangan()
  {
    $data=array(
      'id_ruangan' => $this->input->post('id_ruangan'),
      'id_tools' => $this->input->post('id_tools'),
      'tgl_pasang' => $this->input->post('tgl_pasang'),
      'tgl_lepas' => $this->input->post('tgl_lepas'),
      'deskripsi' => $this->input->post('deskripsi'),
      'status' => $this->input->post('status')
      );
    $this->db->insert('tbl_detail_ruangan',$data);
  }

  public function getTransaksiById($id){
    $query = $this->db->query("select*from tbl_detail_komputer where id_detail='$id'");
    return $query->result_array();
  }

  public function getTransaksiByIdR($id){
    $query = $this->db->query("select*from tbl_detail_ruangan where id_detail_r='$id'");
    return $query->result_array();
  }

  function edit()
    {
      $data=array(
        'id_komputer' => $this->input->post('id_komputer'),
        'id_tools' => $this->input->post('id_tools'),
        'tgl_pasang' => $this->input->post('tgl_pasang'),
        'tgl_lepas' => $this->input->post('tgl_lepas'),
        'deskripsi' => $this->input->post('deskripsi'),
        'status' => $this->input->post('status')
        );
      $this->db->where('id_detail', $this->input->post('id'));
      $this->db->update('tbl_detail_komputer',$data);
    }

    function editruangan()
      {
        $data=array(
          'id_ruangan' => $this->input->post('id_ruangan'),
          'id_tools' => $this->input->post('id_tools'),
          'tgl_pasang' => $this->input->post('tgl_pasang'),
          'tgl_lepas' => $this->input->post('tgl_lepas'),
          'deskripsi' => $this->input->post('deskripsi'),
          'status' => $this->input->post('status')
          );
        $this->db->where('id_detail_r', $this->input->post('id'));
        $this->db->update('tbl_detail_ruangan',$data);
      }

    function delete($id)
    {
      $this->db->where('id_detail',$id);
      $this->db->delete('tbl_detail_komputer');

    }

    function deleteruangan($id)
    {
      $this->db->where('id_detail_r',$id);
      $this->db->delete('tbl_detail_ruangan');

    }

}
