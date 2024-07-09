<?php
class Cari extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');
        $this->load->model('M_Cari');
    }
    
    function index() {
        // Ambil data dari URL
        $keyword = $this->input->get('keyword');
        $category_id = $this->input->get('category');
    
        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            // Query database berdasarkan keyword dan ID kategori
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'buku' => $this->M_Cari->search_books($keyword, $category_id),
                'kategori' => $this->db->get('kategori')->result(),
                'keyword' => $keyword,
                'category_id' => $category_id
            ];
        } else {
            $var = [
                'buku' => $this->M_Cari->search_books($keyword, $category_id),
                'kategori' => $this->db->get('kategori')->result(),
                'keyword' => $keyword,
                'category_id' => $category_id
            ];
        }
    
        // Load view dengan var hasil pencarian
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/cari', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}
?>
