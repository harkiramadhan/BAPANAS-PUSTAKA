<?php
class Pangan extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/pangan');
        $this->load->view('layout/user/footer');
    }
    
}