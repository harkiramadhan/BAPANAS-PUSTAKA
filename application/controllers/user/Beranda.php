<?php
class Beranda extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }

    function index(){
        $var = [];
        if($this->session->userdata('is_loggedin')){
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid)
            ];
        }
        
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/beranda', $var);
        $this->load->view('layout/user/footer', $var);
    }
}