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
                'bukuBuku' => $this->db->order_by('id', 'DESC')->limit(3)->get_where('buku', ['status' => 1]),
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', 'kategori LIKE \'%"7"%\''),

                'publikasi_pers' => $this->db->limit(3)->get_where('publikasi', ['kategori' => 'Publikasi Pers']),
                'media_nva' => $this->db->limit(3)->get_where('publikasi', ['kategori' => 'Media NFA']),

                'sum_publikasi' => $this->db->select('COUNT(id) total')->get('publikasi')->row(),
                'sum_buku' => $this->db->select('COUNT(id) total')->get('buku')->row(),
                'sum_kategori' => $this->db->select('COUNT(id) total')->get('kategori')->row()
            ];
        } else {
            $var = [
                'banner' => $this->db->get_where('banner', ['status' => 1]),
                'kategori' => $this->db->get('kategori'),
                'buku' => $this->db->order_by('id', 'DESC')->limit(8)->get_where('buku', ['status' => 1]),
                'bukuBuku' => $this->db->order_by('id', 'DESC')->limit(3)->get_where('buku', ['status' => 1]),
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', 'kategori LIKE \'%"7"%\''),

                'publikasi_pers' => $this->db->limit(3)->get_where('publikasi', ['kategori' => 'Publikasi Pers']),
                'media_nva' => $this->db->limit(3)->get_where('publikasi', ['kategori' => 'Media NFA']),

                'sum_publikasi' => $this->db->select('COUNT(id) total')->get('publikasi')->row(),
                'sum_buku' => $this->db->select('COUNT(id) total')->get('buku')->row(),
                'sum_kategori' => $this->db->select('COUNT(id) total')->get('kategori')->row()
            ];
        }
        
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/beranda', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}