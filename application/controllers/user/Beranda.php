<?php
class Beranda extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }

    function index() {
        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'banner' => $this->db->get_where('banner', ['status' => 1]),
                'kategori' => $this->db->get('kategori'),
                'buku' => $this->db->order_by('id', 'DESC')->limit(8)->get_where('buku', ['status' => 1]),
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', 'kategori LIKE \'%"7"%\''),
            ];
        } else {
            $var = [
                'banner' => $this->db->get_where('banner', ['status' => 1]),
                'kategori' => $this->db->get('kategori'),
                'buku' => $this->db->order_by('id', 'DESC')->limit(8)->get_where('buku', ['status' => 1]),
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', ['kategori LIKE' => '%"Pangan"%']),
            ];
        }
        
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/beranda', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}