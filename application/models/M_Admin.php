<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function cekLogin($data)
    {
      return $this->db->get_where('admin', $data)->num_rows();
    }
    
}
