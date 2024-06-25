<?php
class Peminjaman extends CI_Controller{
    
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