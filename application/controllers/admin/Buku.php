<?php
class Buku extends CI_Controller{

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
    
    function index(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-daftar');
        $this->load->view('layout/admin/footer');
    }

    function tambah(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-tambah');
        $this->load->view('layout/admin/footer');
    }

    function daftar(){

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-daftar');
        $this->load->view('layout/admin/footer');
    }

    function kategori(){
        $var = [
            'kategori' => $this->db->get('kategori'),
            'ajax' => [
                'kategori'
            ]
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/buku-kategori', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function jenis(){
        $var = [
            'jenis' => $this->db->get('jenis')
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/buku-jenis', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    /* Action Here! */
    function createJenis(){
        $this->db->insert('jenis', [
            'jenis' => $this->input->post('jenis', TRUE)
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Berhasil Di Tambahkan");
        }else{
            $this->session->set_flashdata('error', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Gagal Di Tambahkan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function editJenis($id){
        $this->db->where('md5(id)', $id)->update('jenis', [
            'jenis' => $this->input->post('jenis', TRUE)
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Berhasil Di Simpan");
        }else{
            $this->session->set_flashdata('error', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Gagal Di Simpan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function removeJenis($id){
        $this->db->where('md5(id)', $id)->delete('jenis');
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Berhasil Di Hapus");
        }else{
            $this->session->set_flashdata('error', "Jenis Buku " . $this->input->post('jenis', TRUE) . " Gagal Di Hapus");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function createKategori(){
        $cover = NULL;
        $config['upload_path']      = './assets/img/kategori';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover')){
            $img = $this->upload->data();
            $this->resizeImage('kategori', $img['file_name']); 
            $cover = $img['file_name'];
        }

        $this->db->insert('kategori', [
            'kategori' => $this->input->post('kategori', TRUE),
            'cover' => $cover
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Berhasil Di Tambahkan");
        }else{
            $this->session->set_flashdata('error', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Gagal Di Tambahkan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function editKategori(){
        $id = $this->input->post('id', TRUE);
        $kategori = $this->db->get_where('kategori', ['md5(id)' => $id])->row();
        $cover = $kategori->cover;

        $config['upload_path']      = './assets/img/kategori';  
        $config['allowed_types']    = 'jpg|jpeg|png'; 
        $config['encrypt_name']    = TRUE;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover')){
            (@$kategori->cover) ? @unlink('./assets/img/kategori/' . @$kategori->cover) : NULL;
            $img = $this->upload->data();
            $this->resizeImage('kategori', $img['file_name']); 
            $cover = $img['file_name'];
        }

        $this->db->where('md5(id)', $id)->update('kategori', [
            'kategori' => $this->input->post('kategori', TRUE),
            'cover' => $cover
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Berhasil Di Simpan");
        }else{
            $this->session->set_flashdata('error', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Gagal Di Simpan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function removeKategori($id){
        $kategori = $this->db->get_where('kategori', ['md5(id)' => $id])->row();
        (@$kategori->cover) ? @unlink('./assets/img/kategori/' . @$kategori->cover) : NULL;
        $this->db->where('md5(id)', $id)->delete('kategori');
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Berhasil Di Hapus");
        }else{
            $this->session->set_flashdata('error', "Kategori Buku " . $this->input->post('kategori', TRUE) . " Gagal Di Hapus");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}