<?php
class Pengaturan extends CI_Controller{
    
    function index(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/pengaturan');
        $this->load->view('layout/admin/footer');
    }

}