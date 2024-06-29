<?php
class Kategori extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/kategori');
        $this->load->view('layout/user/footer');
    }
}