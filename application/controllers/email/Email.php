<?php
class Email extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }
    
    function otp(){
        $this->load->view('email/email-otp');
    }

    function forgotpassword(){
        $this->load->view('email/email-forgotpassword');
    }
}