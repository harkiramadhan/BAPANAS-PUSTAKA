<?php
class M_Cari extends CI_Model{
    public function search_books($keyword, $category_id = FALSE) {
        $this->db->select('*');
        $this->db->from('buku');
        
        if(@$keyword == 'ALL'){

        }else{
            (@$keyword) ? $this->db->like('judul', $keyword) : NULL;
            (@$keyword) ? $this->db->or_like('pengarang', $keyword) : NULL;
            (@$category_id) ? $this->db->where('JSON_CONTAINS(kategori, \'["' . $category_id . '"]\')', NULL, FALSE) : NULL;
        }
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query;
    }
}