<?php
class Beranda extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }

    function index(){
        if($this->session->userdata('is_loggedin')){
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'banner' => $this->db->get_where('banner', ['status' => 1]),
                'kategori' => $this->db->get('kategori')
            ];
        }else{
            $var = [
                'banner' => $this->db->get_where('banner', ['status' => 1]),
                'kategori' => $this->db->get('kategori')
            ];
        }
        
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/beranda', $var);
        $this->load->view('layout/user/footer', $var);
    }
}