<?php
class Publikasi extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/publikasi');
        $this->load->view('layout/user/footer');
    }

    function detail(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/publikasi-detail');
        $this->load->view('layout/user/footer');
    }
    
}