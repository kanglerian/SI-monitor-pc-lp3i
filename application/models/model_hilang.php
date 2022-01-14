<?php
class model_hilang extends CI_Model{

  public function tampilkan_data_id($id)
  {
    return $this->db->query("select * from hilang where nama_barang like '%$id%' or category like '%$id%'
                            or tgl_ditemukan like '%$id%' or status like '%$id%' or room_name like '%$id%' order by nama_barang asc");
  }

  function tampilkan_data()
  {
    return $this->db->get('hilang');
  }

  function input()
  {
    $data=array(
      'nama_barang' => $this->input->post('nama_barang'),
      'category' => $this->input->post('category'),
      'tgl_ditemukan' => $this->input->post('tgl_ditemukan'),
      'room_name' => $this->input->post('room_name'),
      'status' => $this->input->post('status'),
      'deskripsi' => $this->input->post('deskripsi')
      );
    $this->db->insert('hilang',$data);
  }

  function get_one($id)
  {
    $param = array('id_hilang'=>$id);
    return $this->db->get_where('hilang',$param);
  }

  function edit()
    {
      $data=array(
        'nama_barang' => $this->input->post('nama_barang'),
        'category' => $this->input->post('category'),
        'tgl_ditemukan' => $this->input->post('tgl_ditemukan'),
        'room_name' => $this->input->post('room_name'),
        'status' => $this->input->post('status'),
        'deskripsi' => $this->input->post('deskripsi')
        );
      $this->db->where('id_hilang', $this->input->post('id'));
      $this->db->update('hilang',$data);
    }

  function delete($id)
  {
    $this->db->where('id_hilang',$id);
    $this->db->delete('hilang');

  }

}
