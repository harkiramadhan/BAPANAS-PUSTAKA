<?php 
class M_Pustakawan extends CI_Model{
    function checkUser($username, $nik, $whatsapp, $email){
        return $this->db->from('pustakawan')
        ->where([
            'username' => $username
        ])->or_where([
            'nik' => $nik,
            'whatsapp' => $whatsapp,
            'email' => $email
        ])->get()->row();
    }

    function getById($id){
        return $this->db->get_where('pustakawan', ['id' => $id])->row();
    }
}