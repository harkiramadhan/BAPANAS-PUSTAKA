<?php
class Buku extends CI_Controller{

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

        $this->load->view('layout/admin/header',);
        $this->load->view('admin/buku-daftar');
        $this->load->view('layout/admin/footer');
    }

    function tambah(){
        $var = [
            'kategori' => $this->db->get('kategori'),
            'jenis' => $this->db->get('jenis'),
            'subjek' => $this->db->get('subjek'),
            'ajax' => [
                'buku'
            ]
        ];

        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/buku-tambah', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function daftar(){
        $var = [
            'buku' => $this->db->get_where('buku', ['status' => 1])
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/buku-daftar', $var);
        $this->load->view('layout/admin/footer', $var);
    }

    function edit($id){
        $var = [
            'buku' => $this->db->get_where('buku', ['md5(id)' => $id])->row(),
            'kategori' => $this->db->get('kategori'),
            'jenis' => $this->db->get('jenis'),
            'subjek' => $this->db->get('subjek'),
            'ajax' => [
                'buku'
            ]
        ];
        $this->load->view('layout/admin/header', $var);
        $this->load->view('admin/buku-edit', $var);
        $this->load->view('layout/admin/footer', $var);
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
    function createBuku(){
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

        $pdf = NULL;
        $configPdf = [
            'upload_path'   => './assets/pdf',
            'allowed_types' => 'pdf|PDF',
            'encrypt_name'  => TRUE
        ];

        $this->upload->initialize($configPdf);
        if ($this->upload->do_upload('pdf')) {
            $file = $this->upload->data();
            $pdf = $file['file_name'];
        }

        $this->db->insert('buku', [
            'id_subjek' => $this->input->post('id_subjek', TRUE),
            'judul' => $this->input->post('judul', TRUE),
            'pengarang' => $this->input->post('pengarang', TRUE),
            'kategori' => json_encode($this->input->post('id_kategori', TRUE)),
            'jenis' => json_encode($this->input->post('id_jenis', TRUE)),
            'edisi' => $this->input->post('edisi', TRUE),
            'penerbit' => $this->input->post('penerbit', TRUE),
            'isbn' => $this->input->post('isbn', TRUE),
            'desc_fisik' => $this->input->post('desc_fisik', TRUE),
            'subjek' => $this->input->post('subjek', TRUE),
            'bahasa' => $this->input->post('bahasa', TRUE),
            'call_number' => $this->input->post('call_number', TRUE),
            'desc' => $this->input->post('desc', TRUE),
            'cover' => $cover,
            'pdf' => $pdf
        ]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', "Buku " . $this->input->post('judul', TRUE) . " berhasil ditambahkan");
        } else {
            $this->session->set_flashdata('error', "Buku " . $this->input->post('judul', TRUE) . " gagal ditambahkan");
        }

        redirect('admin/buku/daftar');
    }

    function editBuku($id){
        $buku = $this->db->get_where('buku', ['md5(id)' => $id])->row();
        $cover = $buku->cover;

        $configCover = [
            'upload_path'   => './assets/img/cover',
            'allowed_types' => 'jpg|jpeg|png',
            'encrypt_name'  => TRUE
        ];
        $this->load->library('upload', $configCover);
        if ($this->upload->do_upload('cover')) {
            (@$buku->cover) ? @unlink('./assets/img/cover/' . @$buku->cover) : NULL;
            $img = $this->upload->data();
            $this->resizeImage('cover', $img['file_name']);
            $cover = $img['file_name'];
        }

        $pdf = $buku->pdf;
        
        $configPdf = [
            'upload_path'   => './assets/pdf',
            'allowed_types' => 'pdf|PDF',
            'encrypt_name'  => TRUE
        ];
        $this->upload->initialize($configPdf);
        if ($this->upload->do_upload('pdf')) {
            (@$buku->pdf) ? @unlink('./assets/pdf/' . @$buku->pdf) : NULL;
            $file = $this->upload->data();
            $pdf = $file['file_name'];
        }

        $this->db->where('md5(id)', $id)->update('buku', [
            'id_subjek' => $this->input->post('id_subjek', TRUE),
            'judul' => $this->input->post('judul', TRUE),
            'pengarang' => $this->input->post('pengarang', TRUE),
            'kategori' => json_encode($this->input->post('id_kategori', TRUE)),
            'jenis' => json_encode($this->input->post('id_jenis', TRUE)),
            'edisi' => $this->input->post('edisi', TRUE),
            'penerbit' => $this->input->post('penerbit', TRUE),
            'isbn' => $this->input->post('isbn', TRUE),
            'desc_fisik' => $this->input->post('desc_fisik', TRUE),
            'subjek' => $this->input->post('subjek', TRUE),
            'bahasa' => $this->input->post('bahasa', TRUE),
            'call_number' => $this->input->post('call_number', TRUE),
            'desc' => $this->input->post('desc', TRUE),
            'cover' => $cover,
            'pdf' => $pdf
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Buku " . $this->input->post('judul', TRUE) . " Berhasil Di Simpan");
        }else{
            $this->session->set_flashdata('error', "Buku " . $this->input->post('judul', TRUE) . " Gagal Di Simpan");
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function removeBuku($id){
        $this->db->where('md5(id)', $id)->update('buku', ['status' => 0]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Buku " . $this->input->post('judul', TRUE) . " Berhasil Di Hapus");
        }else{
            $this->session->set_flashdata('error', "Buku " . $this->input->post('judul', TRUE) . " Gagal Di Hapus");
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
}