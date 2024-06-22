<?php
class Buku extends CI_Controller{
    
    function index(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-daftar');
        $this->load->view('layout/admin/footer');
    }

    function tambah(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-tambah');
        $this->load->view('layout/admin/footer');
    }

    function daftar(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-daftar');
        $this->load->view('layout/admin/footer');
    }

    function kategori(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-kategori');
        $this->load->view('layout/admin/footer');
    }
}