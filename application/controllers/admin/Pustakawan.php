<?php
class Pustakawan extends CI_Controller{
    
    function index(){
        $this->load->view('layout/admin/header',);
        $this->load->view('admin/pustakawan-daftar');
        $this->load->view('layout/admin/footer');

    }

}