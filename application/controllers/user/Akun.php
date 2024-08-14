<?php
class Akun extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');

        if(!$this->session->userdata('is_loggedin')){
            redirect('');
        }
    }

    private function resizeImage($path, $filename){
        $config['image_library'] = 'gd2';  
        $config['source_image'] = './assets/' . $path . '/' . $filename;
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = TRUE;  
        $config['quality'] = '75%';  
        $config['new_image'] = './assets/' . $path . '/' .$filename;
        $config['width'] = 500;              
  
        $this->image_lib->initialize($config);
        $this->image_lib->resize();  
        $this->image_lib->clear();
    }
    
    function index(){
        $userid = $this->session->userdata('userid');
        $var = [
            'user' => $this->M_Pustakawan->getById($userid)
        ];

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/akun-profil', $var);
        $this->load->view('layout/user/footer', $var);
    }

    function password(){
        $userid = $this->session->userdata('userid');
        $var = [
            'user' => $this->M_Pustakawan->getById($userid)
        ];

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/akun-password', $var);
        $this->load->view('layout/user/footer', $var);
    }

    function update(){
        $userid = $this->session->userdata('userid');
        $user = $this->M_Pustakawan->getById($userid);

        $profileimg = $user->img;

        $config['upload_path']      = './assets/img/pustakawan';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile-picture')){
            $img = $this->upload->data();
            $this->resizeImage('pustakawan', $img['file_name']);
            $profileimg = $img['file_name'];
        }

        
        $this->db->where('id', $userid)->update('pustakawan', [
            'nik' => $this->input->post('nik', TRUE),
            'nama' => $this->input->post('nama', TRUE),
            'username' => $this->input->post('username', TRUE),
            'whatsapp' => $this->input->post('whatsapp', TRUE),
            'email' => $this->input->post('email', TRUE),
            'jenkel' => $this->input->post('jenkel', TRUE),
            'pekerjaan' => $this->input->post('pekerjaan', TRUE),
            'pendidikan' => $this->input->post('pendidikan', TRUE),
            'img' => $profileimg
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Berhasil Di Update');
        }else{
            $this->session->set_flashdata('error', 'Data Gagal Di Update');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function updatePassword(){
        $userid = $this->session->userdata('userid');
        $user = $this->M_Pustakawan->getById($userid);
        $newPassword = $this->input->post('newPassword', TRUE);
        $oldPassword = $this->input->post('oldPassword', TRUE);

        if(md5($oldPassword) == $user->password){
            $this->db->where('id', $userid)->update('pustakawan', [
                'password' => md5($newPassword)
            ]);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Password Berhasil Di Update');
            }else{
                $this->session->set_flashdata('error', 'Password Gagal Di Update');
            }
        }else{
            $this->session->set_flashdata('error', 'Password Gagal Di Update, Password Lama Tidak Sesuai');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}