<?php
class Publikasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('M_Pustakawan');
    }
    
    function index(){
        $config = array();
        $config['base_url'] = site_url('publikasi');
        $config['total_rows'] = $this->db->select('id')->get('publikasi')->num_rows();
        $config['per_page'] = 12;
        $config['uri_segment'] = 2;
        $config['attributes'] = array('class' => 'page-link text-primary');

        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['first_tag_open'] = '<li class="page-item pill">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Sebelumnya';
        $config['prev_tag_open'] = '<li class="page-item pill">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Selanjutnya';
        $config['next_tag_open'] = '<li class="page-item pill">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item pill">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item circle active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item circle">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $publikasi = $this->db->select('*')
                            ->from('publikasi')
                            ->limit($config['per_page'], $page)
                            ->order_by('tanggal', 'DESC')->get();

        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'publikasi' => $publikasi,
                'pagination' => $this->pagination->create_links(),
                'page' => $page
            ];
        } else {
            $var = [
                'publikasi' => $publikasi,
                'pagination' => $this->pagination->create_links(),
                'page' => $page
            ];
        }

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/publikasi', $var);
        $this->load->view('layout/user/footer', $var);
    }

    function detail($id){
        if ($this->session->userdata('is_loggedin')) {
            $userid = $this->session->userdata('userid');
            $var = [
                'user' => $this->M_Pustakawan->getById($userid),
                'publikasi' => $this->db->get_where('publikasi', ['md5(id)' => $id])->row()
            ];
        } else {
            $var = [
                'publikasi' => $this->db->get_where('publikasi', ['md5(id)' => $id])->row()
            ];
        }
        $this->load->view('layout/user/header', $var);
        $this->load->view('user/publikasi-detail', $var);
        $this->load->view('layout/user/footer', $var);
    }
    
}