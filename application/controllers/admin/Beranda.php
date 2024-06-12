<?php
class Beranda extends CI_Controller{
    
    function index(){

        $this->load->view('layout/admin/header',);
        // $this->load->view('admin/dashboard', $var);
        // $this->load->view('layout/admin/footer', $var);
    }
}