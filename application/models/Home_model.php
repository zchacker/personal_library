<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function add_book($data){
        return $this->db->insert('books' , $data);
    }

    public function importData($data){

        $res = $this->db->insert_batch('books', $data);
        if ($res) {
            return TRUE;
        } else {
            return FALSE;
        }
        
    }

    public function get_books(){
        return $this->db->get('books');
    }

    public function get_books_limit($start , $limit){        
        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        return $this->db->get('books');
    }

    public function get_admin_data($username , $password){
        $this->db->where('username' , $username);
        $this->db->where('password' , $password);
        return $this->db->get('users');
    }

    public function get_one_books($id){
        $this->db->where('id' , $id);
        return $this->db->get('books');
    }
    
    public function delete_book($id){
        $this->db->where('id' , $id);
        return $this->db->delete('books');
    }

    public function update_book($id , $data){        
        $this->db->where('id' , $id);
        return $this->db->update('books' , $data);
    }

    // return result based on query
    public function search_books($key , $query){
        $this->db->like($key  , $query);
        return $this->db->get('books');
    }

    // search limit
    public function search_books_limit($key , $query , $start , $limit){   
        $this->db->like($key  , $query);        
        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        return $this->db->get('books');
    }


    // return result based on query
    public function advanced_search_books( $key , $query , $edition_date1 , $edition_date2 , $hijri_date_input1 , 
    $hijri_date_input2 , $gerogian_date_input1 , $gerogian_date_input2 , $create_date1 , $create_date2 ){

        $this->db->like($key  , $query);

        if(strlen($hijri_date_input1) > 0)
            $this->db->where('death_hijri >=',$hijri_date_input1);
        
        if(strlen($hijri_date_input2) > 0)
            $this->db->where('death_hijri <=', $hijri_date_input2);

        if(strlen( $gerogian_date_input1) > 0)
            $this->db->where('death_gregorian >=',  $gerogian_date_input1);
        
        if(strlen($gerogian_date_input2) > 0)
            $this->db->where('death_gregorian <=', $gerogian_date_input2);

        if(strlen($edition_date1) > 0)
            $this->db->where('edition_date >=', $edition_date1);
        
        if(strlen($edition_date2) > 0)
            $this->db->where('edition_date <=', $edition_date2);

        if(strlen( $create_date1 ) > 0)
            $this->db->where('create_date >=',  $create_date1 );
        
        if(strlen($create_date2) > 0)
            $this->db->where('create_date <=', $create_date2);            

        
        return $this->db->get('books');

    }

    public function advanced_search_books_limit( $key , $query , $edition_date1 , $edition_date2 , $hijri_date_input1 , 
    $hijri_date_input2 , $gerogian_date_input1 , $gerogian_date_input2 , $create_date1 , $create_date2 , $start , $limit ){

        $this->db->like($key  , $query);

        if(strlen($hijri_date_input1) > 0)
            $this->db->where('death_hijri >=',$hijri_date_input1);
        
        if(strlen($hijri_date_input2) > 0)
            $this->db->where('death_hijri <=', $hijri_date_input2);

        if(strlen( $gerogian_date_input1) > 0)
            $this->db->where('death_gregorian >=',  $gerogian_date_input1);
        
        if(strlen($gerogian_date_input2) > 0)
            $this->db->where('death_gregorian <=', $gerogian_date_input2);

        if(strlen($edition_date1) > 0)
            $this->db->where('edition_date >=', $edition_date1);
        
        if(strlen($edition_date2) > 0)
            $this->db->where('edition_date <=', $edition_date2);

        if(strlen( $create_date1 ) > 0)
            $this->db->where('create_date >=',  $create_date1 );
        
        if(strlen($create_date2) > 0)
            $this->db->where('create_date <=', $create_date2);            

        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        return $this->db->get('books');

    }

    public function get_users(){
        return $this->db->get('users');
    }

    public function get_user($id){
        $this->db->where('id' , $id);
        return $this->db->get('users');
    }

    public function add_user($data){
        return $this->db->insert('users' , $data);
    }

    public function update_user($id , $data){
        $this->db->where('id' , $id);
        return $this->db->update('users' , $data);
    }

    public function delete_user($id){
        $this->db->where('id' , $id);
        return $this->db->delete('users');
    }

    // get auther data
    public function get_auther( $nickname ){
        $sql =
            "SELECT  books.auther_name, books.nickname , books.death_hijri , books.death_gregorian  FROM books
            WHERE nickname LIKE '%$nickname%'
            GROUP By auther_name , nickname , death_hijri , death_gregorian";
        return $this->db->query($sql);
    }

}

?>