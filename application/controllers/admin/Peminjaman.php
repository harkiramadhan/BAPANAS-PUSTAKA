<?php
class Peminjaman extends CI_Controller{

    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
        }
    }
    
    function index(){

    }

    function tambah(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-tambah');
        $this->load->view('layout/admin/footer');
    }

    function daftar(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/peminjaman-daftar');
        $this->load->view('layout/admin/footer');
    }

}