<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
      public function keHalamanDepan () 
      {
          $data['judul'] = 'Halaman Depan';
          $data['stasiun'] = $this->M_Guest->getDatasetasiun()->result();

          $this->load->view('guest/template/header', $data);
          $this->load->view('guest/halaman_depan');
          $this->load->view('guest/template/footer');
      }

      public function keHalamanKonfirmasi()
      {
          $data['judul'] = 'Halaman Konfirmasi';

          $this->load->view('guest/template/header', $data);
          $this->load->view('guest/halaman_konfirmasi');
          $this->load->view('guest/template/footer');
      }

      public function cari_tiket()
      {
          $data = [
              'asal'          => $this->input->post('asal'),
              'tujuan'        => $this->input->post('tujuan'),
          ];
          $data['tiket'] = $this->M_Guest->cari_tiket($data)->result();

          $data['judul'] = 'Halaman Depan';
          $data['stasiun'] = $this->M_Guest->getDatasetasiun()->result();

          $this->load->view('guest/template/header', $data);
          $this->load->view('guest/halaman_depan');
          $this->load->view('guest/template/footer');
          
      }
}
