<?php
class Pustakawan extends CI_Controller{
    
    function index(){
        $var = [
            'pustakawan' => $this->db->get('pustakawan')
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/pustakawan-daftar', $var);
        $this->load->view('layout/admin/footer', $var);

    }

}