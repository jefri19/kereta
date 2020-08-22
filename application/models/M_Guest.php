<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Guest extends CI_Model {
    public function getDatasetasiun()
    {
        return $this->db->get('setasiun');
    }

    public function cari_tiket($data)
    {
        $this->db->select('jadwal.*, Asal.nama_setasiun AS ASAL, Tujuan.nama_setasiun AS TUJUAN');
        $this->db->from('jadwal');
        $this->db->join('setasiun as Asal','jadwal.asal = Asal.id', 'left');
        $this->db->join('setasiun as Tujuan','jadwal.tujuan = Tujuan.id', 'left');
        return $this->db->get();
    }
}
