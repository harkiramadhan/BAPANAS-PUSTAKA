<?php
class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
    }
    
    function login(){

        $this->load->view('layout/user/header',);
        $this->load->view('user/auth-login');
        $this->load->view('layout/user/footer');
    }

    function register(){
        $this->load->view('layout/user/header',);
        $this->load->view('user/auth-register');
        $this->load->view('layout/user/footer');
    }

    function forgot(){
        $this->load->view('layout/user/header',);
        $this->load->view('user/auth-forgotpass');
        $this->load->view('layout/user/footer');
    }

    /* Action Here! */
    function userRegister(){
        $nik = $this->input->post('nik', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $whatsapp = $this->input->post('whatsapp', TRUE);
        $email = $this->input->post('email', TRUE);
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $ok = $this->input->post('ok', TRUE);

        $cekPeminjam = $this->M_Pustakawan->checkUser($username, $nik, $whatsapp, $email);
        if(@$cekPeminjam->id){
            $this->session->set_flashdata('error', "Terjadi Kendala Saat Registrasi");
            if(@$cekPeminjam->nik == $nik){
                $this->session->set_flashdata('error_nik', 'NIK Telah Terdaftar');
            }
            
            if(@$cekPeminjam->username == $username){
                $this->session->set_flashdata('error_username', 'Username Sudah Terdaftar');
            }
            
            if(@$cekPeminjam->whatsapp == $whatsapp){
                $this->session->set_flashdata('error_whatsapp', 'WhatsApp Sudah Terdaftar');
            }
            
            if(@$cekPeminjam->email == $email){
                $this->session->set_flashdata('error_email', 'Email Sudah Terdaftar');
            }

            $this->session->set_flashdata('nik', $nik);
            $this->session->set_flashdata('nama', $nama);
            $this->session->set_flashdata('whatsapp', $whatsapp);
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('username', $username);
            $this->session->set_flashdata('password', $password);
            $this->session->set_flashdata('ok', $ok);

            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->db->insert('pustakawan', [
                'nik' => $nik,
                'nama' => $nama,
                'whatsapp' => $whatsapp,
                'email' => $email,
                'username' => $username,
                'password' => md5($password)
            ]);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', "Berhasil Registrasi!");
                $this->session->set_userdata('is_loggedin', TRUE);
                $this->session->set_userdata('userid', $this->db->insert_id());
                redirect('');
            }else{
                $this->session->set_flashdata('error', "Terjadi Kendala Saat Registrasi");
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
}