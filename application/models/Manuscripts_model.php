<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manuscripts_model extends CI_Model {

    public function add_book($data){
        return $this->db->insert('manuscripts' , $data);
    }

    public function get_books(){
        return $this->db->get('manuscripts');
    }

    public function get_books_limit($start , $limit){        
        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        return $this->db->get('manuscripts');
    }

    public function get_one_books($id){
        $this->db->where('id' , $id);
        return $this->db->get('manuscripts');
    }

    public function update_book($id , $data){        
        $this->db->where('id' , $id);
        return $this->db->update('manuscripts' , $data);
    }

    public function delete_book($id){
        $this->db->where('id' , $id);
        return $this->db->delete('manuscripts');
    }

    // return result based on query
    public function search_books($key , $query){
        $this->db->like($key  , $query);
        return $this->db->get('manuscripts');
    }

    // search limit
    public function search_books_limit($key , $query , $start , $limit){   
        $this->db->like($key  , $query);        
        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        return $this->db->get('manuscripts');
    }

    public function search($sql){
        return $this->db->query($sql);
    }
    
    public function get_last_code(){
        // registery_number
        $result = NULL;
        $query = $this->db->query("SELECT * FROM manuscripts ORDER BY id DESC LIMIT 1");
        
        if($query->num_rows() > 0){
            $result = $query->result_array();
        }
        
        return $result;
    }

}

?>