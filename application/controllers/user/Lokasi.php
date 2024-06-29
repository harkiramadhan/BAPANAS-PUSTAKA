<?php
class Lokasi extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/lokasi');
        $this->load->view('layout/user/footer');
    }
    
}