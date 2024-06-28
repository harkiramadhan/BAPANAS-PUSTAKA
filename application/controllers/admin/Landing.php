<?php
class Landing extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->library('image_lib');
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

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/landing-footer');
        $this->load->view('layout/admin/footer');
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
}