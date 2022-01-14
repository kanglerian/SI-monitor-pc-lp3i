<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model{

  function login ($username,$password)
  {
    $cek= $this->db->get_where('tbl_user',array('username'=>$username,'password'=>$password));
    if ($cek->num_rows()>0)
    {
      return 1;
    }else{
      return 0;
    }
  }

}
