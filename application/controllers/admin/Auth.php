<?php
class Auth extends CI_Controller{
    function login(){
        if($this->session->userdata('is_admin')){
            redirect('admin/beranda','refresh');
        }

        $this->load->view('admin/auth-login');
    }

    function password(){
        $this->load->view('admin/auth-forgotpass');
    }

    function actionLogin(){
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));

        $cekUser = $this->db->from('settings')
                            ->where([
                                'username' => $username
                            ])->or_where('email_recovery', $username)->get()->row();
        if(@$cekUser->id){
            if($cekUser->password == $password){
                $this->session->set_userdata('is_admin', TRUE);
                $this->session->set_flashdata('success', 'Welcome Admin!');

                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->session->set_flashdata('error_password', TRUE);
                $this->session->set_flashdata('error', "Password Salah");

                $this->session->set_flashdata('username', $username);

                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->session->set_flashdata('error_username', TRUE);
            $this->session->set_flashdata('error', "Username / Email Tidak Valid !");
            
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    function logout(){
        $this->session->unset_userdata('is_admin');
        redirect('admin/login');
    }
}