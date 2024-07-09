<?php
class M_Cari extends CI_Model{
    
    public function search_books($keyword) {
        $this->db->select('*');
        $this->db->from('buku');
        
        // Filter berdasarkan keyword jika tidak kosong
        if (!empty($keyword)) {
            $this->db->like('judul', $keyword);
        }
        
        $query = $this->db->get();
        return $query;
    }


    
}
?>
