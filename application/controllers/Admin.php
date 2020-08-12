<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function keHalamanLogin()
    {
        $this->load->view('admin/login');
    }

    public function login(){
        $data = [
            'nama'      => $this->input->post('username'),
            'password'  => $this->input->post('password'),
        ];

        $cek = $this->M_Admin->cekLogin($data);   
        if($cek > 0){
            $sess = [
                'status' => TRUE,
                'level'  => 'admin',
            ];
            $this->session->set_userdata($sess);

           redirect(base_url('admin/dashboard'));
        }else {
            redirect(base_url('login'));
        }
    }
    
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }

    public function keHalamanDashboard()
    {
        if($this->session->status === TRUE){

            $data['setasiun'] = $this->M_Admin->getDataSetasiun()->result();


           $this->load->view('admin/dashboard', $data);
        }else{
            redirect(base_url('login'));
        }
    }

    public function tambah_setasiun()
    {
           $nama = $this->input->POST('setasiun');
           $input = $this->M_Admin->tambah_setasiun($nama);
           redirect('admin/dashboard');
    }

    public function hapus_setasiun($id)
    {
           $delete = $this->M_Admin->delete_stasiun($id);
           redirect (base_url('admin/dashboard'));
    }
}
