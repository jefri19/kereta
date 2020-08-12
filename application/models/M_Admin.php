<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function cekLogin($data)
    {
      return $this->db->get_where('admin', $data)->num_rows();
    }

    public function getDataSetasiun()
    {
      return $this->db->get('setasiun');
    }
    
    public function tambah_setasiun($nama)
    {
      $data = [
        'nama_setasiun' => $nama,
      ];
      return $this->db->insert('setasiun', $data);
    }

    public function delete_stasiun($id)
    {
      $this->db->where('id', $id);
      return $this->db->delete('setasiun');
    }
}
