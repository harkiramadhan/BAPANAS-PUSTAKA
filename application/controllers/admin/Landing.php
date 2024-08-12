<?php
class Landing extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->library('image_lib');

        if(!$this->session->userdata('is_admin') == TRUE){
            $this->session->set_flashdata('error', "Silahkan Login Terlebih Dahulu");
            redirect('admin/login');
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
    
    function banner(){
        $var = [
            'main_title' => 'Pengaturan Landing Page',
            'main_title_url' => site_url('landing/banner'),
            'title' => 'Daftar Banner',
            'banner' => $this->db->get('banner'),
            'ajax' => [
                'banner'
            ]
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/landing-banner', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function footer(){
        $var = [
            'main_title' => 'Pengaturan Landing Page',
            'main_title_url' => site_url('landing/footer'),
            'footer' => $this->db->get_where('footer', ['id' => 1])->row(),
            'title' => 'Footer',
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/landing-footer', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    /* Acion Here */
    function createBanner(){
        $banner = NULL;
        $config['upload_path']      = './assets/img/banner';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('banner')){
            $img = $this->upload->data();
            $this->resizeImage('banner', $img['file_name']); 
            $banner = $img['file_name'];
        }

        $this->db->insert('banner', [
            'judul' => $this->input->post('judul', TRUE),
            'sub_judul' => $this->input->post('sub_judul', TRUE),
            'status' => $this->input->post('status', TRUE),
            'banner' => $banner
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Banner " . $this->input->post('judul', TRUE) . " Berhasil Di Tambahkan");
        }else{
            $this->session->set_flashdata('error', "Banner " . $this->input->post('judul', TRUE) . " Gagal Di Tambahkan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function editBanner(){
        $id = $this->input->post('id', TRUE);
        $banner = $this->db->get_where('banner', ['md5(id)' => $id])->row();
        $bnr = $banner->banner;

        $config['upload_path']      = './assets/img/banner';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('banner')){
            (@$banner->banner) ? @unlink('./assets/img/banner/' . @$banner->banner) : NULL;
            $img = $this->upload->data();
            $this->resizeImage('banner', $img['file_name']); 
            $bnr = $img['file_name'];
        }

        $this->db->where('md5(id)', $id)->update('banner', [
            'judul' => $this->input->post('judul', TRUE),
            'sub_judul' => $this->input->post('sub_judul', TRUE),
            'status' => $this->input->post('status', TRUE),
            'banner' => $bnr
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Banner " . $this->input->post('judul', TRUE) . " Berhasil Di Simpan");
        }else{
            $this->session->set_flashdata('error', "Banner " . $this->input->post('judul', TRUE) . " Gagal Di Simpan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function removeBanner($id){
        $banner = $this->db->get_where('banner', ['md5(id)' => $id])->row();
        (@$banner->banner) ? @unlink('./assets/img/banner/' . @$banner->banner) : NULL;
        $this->db->where('md5(id)', $id)->delete('banner');
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Banner " . $this->input->post('judul', TRUE) . " Berhasil Di Hapus");
        }else{
            $this->session->set_flashdata('error', "Banner " . $this->input->post('judul', TRUE) . " Gagal Di Hapus");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function updateFooter(){
        $logo = NULL;
        $footer = $this->db->get_where('footer', ['id' => 1])->row();
        $config['upload_path']      = './assets/img';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('logo')){
            (@$footer->logo) ? @unlink('./assets/img/' . @$footer->logo) : NULL;
            $img = $this->upload->data();
            $logo = $img['file_name'];
        }

        $this->db->where('id', 1)->update('footer', [
            'desc' => $this->input->post('desc', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'email' => $this->input->post('email', TRUE),
            'instagram' => $this->input->post('instagram', TRUE),
            'facebook' => $this->input->post('facebook', TRUE),
            'twitter' => $this->input->post('twitter', TRUE),
            'youtube' => $this->input->post('youtube', TRUE),
            'logo' => $logo
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Footer Berhasil Di Tambahkan");
        }else{
            $this->session->set_flashdata('error', "Footer Gagal Di Tambahkan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}