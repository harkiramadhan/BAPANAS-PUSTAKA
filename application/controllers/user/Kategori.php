<?php
class Kategori extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }
    
    function index(){
        if($this->session->userdata('is_loggedin')){
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'kategori' => $this->db->get('kategori')
            ];
        }else{
            $var = [
                'kategori' => $this->db->get('kategori')
            ];
        }

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/kategori', $var);
        $this->load->view('layout/user/footer', $var);
    }
}