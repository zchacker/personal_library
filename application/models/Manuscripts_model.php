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

}

?>