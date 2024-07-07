<?php
class Peminjaman extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/akun-peminjaman');
        $this->load->view('layout/user/footer');
    }

}