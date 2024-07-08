<?php
class Beranda extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
        }
    }

    function index(){
        $var = [
            'peminjam' => $this->db->select('id')->get_where('peminjaman')->num_rows(),
            'anggota' => $this->db->select('id')->get_where('pustakawan')->num_rows(),
            'buku' => $this->db->select('id')->get_where('buku')->num_rows(),
            'kategori' => $this->db->select('id')->get_where('kategori')->num_rows()
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/beranda', $var);
        $this->load->view('layout/admin/footer', $var);
    }
}