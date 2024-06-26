<?php
class Landing extends CI_Controller{
    
    function banner(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/landing-banner');
        $this->load->view('layout/admin/footer');
    }

    function footer(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/landing-footer');
        $this->load->view('layout/admin/footer');
    }
}