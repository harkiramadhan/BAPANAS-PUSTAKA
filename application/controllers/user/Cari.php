<?php
class Cari extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
        $this->load->model('M_Cari');
    }
    
    function index() {
        $keyword = $this->input->get('keyword');
        $category_id = $this->input->get('category');
    
        $kategori = NULL;
        if(@$category_id){
            $kategori = $this->db->get_where('kategori', ['id' => $category_id])->row();
        }

        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'buku' => $this->M_Cari->search_books($keyword, @$category_id),
                'kategori' => $kategori,
                'keyword' => $keyword,
                'category_id' => $category_id
            ];
        } else {
            $var = [
                'buku' => $this->M_Cari->search_books($keyword, @$category_id),
                'kategori' => $kategori,
                'keyword' => $keyword,
                'category_id' => $category_id
            ];
        }
    
        
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/cari', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}