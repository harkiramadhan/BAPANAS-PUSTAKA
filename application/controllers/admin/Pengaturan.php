<?php
class Pengaturan extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
        }
    }
    
    function index(){

        $var = [
            'title' => 'Pengaturan',
        ];

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/pengaturan');
        $this->load->view('layout/admin/footer');
    }

}