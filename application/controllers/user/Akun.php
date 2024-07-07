<?php
class Akun extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/akun-profil');
        $this->load->view('layout/user/footer');
    }

    function password(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/akun-password');
        $this->load->view('layout/user/footer');
    }

}