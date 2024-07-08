<?php 
class M_Peminjam extends CI_Model{
    function checkUser($username, $nik, $whatsapp, $email){
        return $this->db->from('peminjam')
        ->where([
            'username' => $username
        ])->or_where([
            'nik' => $nik,
            'whatsapp' => $whatsapp,
            'email' => $email
        ])->get()->row();
    }
}