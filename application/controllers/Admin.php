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
           redirect(base_url('admin/dashboard'));
        }else {
            redirect(base_url('login'));
        }
    }
    
    public function logout()
    {
        redirect(base_url());
    }

    public function keHalamanDashboard()
    {
        $this->load->view('admin/dashboard');
    }
}
