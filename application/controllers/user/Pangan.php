<?php
class Pangan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }
    
    function index(){

        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', 'kategori LIKE \'%"7"%\''),
            ];
        } else {
            $var = [
                'bukupangan' => $this->db->order_by('id', 'DESC')->limit(4)->get_where('buku', ['kategori LIKE' => '%"Pangan"%']),
            ];
        }

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/pangan', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}