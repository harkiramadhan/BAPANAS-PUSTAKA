<?php
class Publikasi extends CI_Controller{
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
    
    function index(){
        $var = [
            'publikasi' => $this->db->get('publikasi')
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/publikasi-daftar', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function tambah(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/publikasi-tambah');
        $this->load->view('layout/admin/footer');
    }

    function edit($id){
        $var = [
            'publikasi' => $this->db->get_where('publikasi', ['md5(id)' => $id])->row()
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/publikasi-edit', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    /* Action Hwew */
    function createPublikasi(){
        $cover = NULL;
        $configCover = [
            'upload_path'   => './assets/img/cover',
            'allowed_types' => 'jpg|jpeg|png',
            'encrypt_name'  => TRUE
        ];

        $this->load->library('upload', $configCover);
        if ($this->upload->do_upload('cover')) {
            $img = $this->upload->data();
            $this->resizeImage('cover', $img['file_name']);
            $cover = $img['file_name'];
        }

        $this->db->insert('publikasi', [
            'cover' => $cover,
            'judul' => $this->input->post('judul', TRUE),
            'kategori' => $this->input->post('kategori', TRUE),
            'desc' => $this->input->post('desc', TRUE)
        ]);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', "Publikasi " . $this->input->post('judul', TRUE) . " berhasil ditambahkan");
        } else {
            $this->session->set_flashdata('error', "Publikasi " . $this->input->post('judul', TRUE) . " gagal ditambahkan");
        }

        redirect('admin/publikasi');
    }
}