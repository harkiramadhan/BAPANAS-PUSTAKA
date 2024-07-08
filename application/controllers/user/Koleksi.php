<?php
class Koleksi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }
    
    function index(){

        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'buku' => $this->db->get_where('buku', ['status' => 1])
            ];
        } else {
            $var = [
                'buku' => $this->db->get_where('buku', ['status' => 1])
            ];
        }

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/koleksi', $var);
        $this->load->view('layout/user/footer', $var);
    }

    function detail($id){

        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'buku' => $this->db->get_where('buku', ['md5(id)' => $id])->row(),
                'kategori' => $this->db->get('kategori'),
                'jenis' => $this->db->get('jenis')
            ];
        } else {
            $var = [
                'buku' => $this->db->get_where('buku', ['md5(id)' => $id])->row(),
                'kategori' => $this->db->get('kategori'),
                'jenis' => $this->db->get('jenis')
            ];
        }

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/koleksi-detail', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}