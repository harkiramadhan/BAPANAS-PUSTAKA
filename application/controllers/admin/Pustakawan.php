<?php
class Pustakawan extends CI_Controller{
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
        }
    }
    
    function index(){
        $var = [
            'pustakawan' => $this->db->get('pustakawan')
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/pustakawan-daftar', $var);
        $this->load->view('layout/admin/footer', $var);

    }

}