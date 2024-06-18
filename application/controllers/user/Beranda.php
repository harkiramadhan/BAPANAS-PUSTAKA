<?php
class Beranda extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/beranda');
        $this->load->view('layout/user/footer');
    }
}