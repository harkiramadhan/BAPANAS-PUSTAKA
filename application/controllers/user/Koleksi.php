<?php
class Koleksi extends CI_Controller{
    
    function index(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/koleksi');
        $this->load->view('layout/user/footer');
    }

    function detail(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/koleksi');
        $this->load->view('layout/user/footer');
    }
}