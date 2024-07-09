<?php
class Peminjaman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Pustakawan');

        if(!$this->session->userdata('is_loggedin')){
            redirect('');
        }
    }

    function index(){
        $userid = $this->session->userdata('userid');
        $pinjaman = $this->db->select('p.*, b.judul')
                            ->from('peminjaman p')
                            ->join('buku b', 'p.id_buku = b.id')
                            ->where(['p.id_pustakawan' => $userid])->get();
        $var = [
            'user' => $this->M_Pustakawan->getById($userid),
            'pinjaman' => $pinjaman
        ];

        $this->load->view('layout/user/header', $var);
        $this->load->view('user/akun-peminjaman', $var);
        $this->load->view('layout/user/footer', $var);
    }

    function pinjam($id){
        $userid = $this->session->userdata('userid');
        $buku = $this->db->get_where('buku', ['md5(id)' => $id])->row();

        $this->db->insert('peminjaman', [
            'id_pustakawan' => $userid,
            'id_buku' => $buku->id,
            'status' => 1,
            'pengajuan' => date('Y-m-d H:i:s')
        ]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Buku " . $buku->judul . " Masuk Kedalam Proses Peminjaman");
            redirect('peminjaman');
        }
    }

}