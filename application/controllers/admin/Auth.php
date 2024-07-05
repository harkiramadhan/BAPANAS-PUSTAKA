<?php
class Auth extends CI_Controller{
    
    function index(){

    }

    function login(){

        $this->load->view('admin/auth-login');
    }

    function password(){

        $this->load->view('admin/auth-forgotpass');
    }

}