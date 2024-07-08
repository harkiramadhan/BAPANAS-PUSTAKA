<?php
class Peminjaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');

        if(!$this->session->userdata('is_loggedin')){
            redirect('');
        }
    }

    function index(){
        $userid = $this->session->userdata('userid');
        $var = [
            'user' => $this->M_Pustakawan->getById($userid)
        ];

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/akun-peminjaman', $var);
        $this->load->view('layout/user/footer', $var);
    }

}