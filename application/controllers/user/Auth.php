<?php
class Auth extends CI_Controller{
    
    function login(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/auth-login');
        $this->load->view('layout/user/footer');
    }

    function register(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/auth-register');
        $this->load->view('layout/user/footer');
    }
}