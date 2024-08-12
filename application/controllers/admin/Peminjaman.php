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
        $pinjaman = $this->db->select('p.*, b.judul, pk.nama')
                            ->from('peminjaman p')
                            ->join('buku b', 'p.id_buku = b.id')
                            ->join('pustakawan pk', 'p.id_pustakawan = pk.id')
                            ->get();

        $var = [
            'title' => 'Daftar Peminjaman',
            'pinjaman' => $pinjaman,
            'ajax' => [
                'peminjaman'
            ]
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/peminjaman-daftar', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function update(){
        $this->db->where('md5(id)', $this->input->post('id', TRUE))->update('peminjaman', [
            'tanggal' => $this->input->post('tanggal', TRUE),
            'pengembalian' => ($this->input->post('pengembalian', TRUE)) ? $this->input->post('pengembalian', TRUE) : NULL,
            'status' => $this->input->post('status', TRUE)
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success',"Data Berhasil Di Simpan");
        }else{
            $this->session->set_flashdata('error',"Data Gagal Di Simpan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}