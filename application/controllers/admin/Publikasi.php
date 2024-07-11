<?php
class Publikasi extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
        }
    }
    
    function index(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/publikasi-daftar');
        $this->load->view('layout/admin/footer');
    }

    function tambah(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/publikasi-tambah');
        $this->load->view('layout/admin/footer');
    }

}