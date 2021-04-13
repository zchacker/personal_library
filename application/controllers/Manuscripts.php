<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manuscripts extends CI_Controller {

    public function __construct(){
		parent::__construct();
				
		$this->load->model('home_model');
		$this->load->model('manuscripts_model');
        
		ini_set('upload_max_filesize','64M');
		ini_set('max_execution_time','300');
		ini_set('max_input_time','120');
		ini_set('memory_limit','128M');
		ini_set('post_max_size','265M');

        $this->check_login();
	}

    private function check_login(){

		if (!$this->session->userdata('loggedin')) {
			redirect('login', 'refresh');
			die;
		}

		$username    = $this->session->userdata('username');
		$password    = $this->session->userdata('password');

		$result      = $this->home_model->get_admin_data($username , $password);

		if ($result->num_rows() == 0) {
			
            redirect('login', 'refresh');
            die;
			
		}
	}

    public function index(){

        $books = $this->manuscripts_model->get_books();

        $this->load->library('pagination');
		$config['total_rows'] 			= $books->num_rows();
		$config['per_page'] 			= 100;
		$config['num_links'] 			= ceil($books->num_rows() / 3);
		$config['full_tag_open'] 		= '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close'] 		= '</ul></nav></div>';
		$config['num_tag_open'] 		= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] 		= '</span></li>';
		$config['cur_tag_open'] 		= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] 		= '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] 		= '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] 		= '<span aria-hidden="true">&raquo; التالي</span></span></li>';
		$config['prev_tag_open'] 		= '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] 		= '</span></li>';
		$config['first_tag_open'] 		= '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] 	= '</span></li>';
		$config['last_tag_open'] 		= '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] 		= '</span></li>';
		$config['base_url'] 			= base_url() . "manuscripts/index";
		$config['uri_segment'] 			= $this->uri->total_segments(); //4;

        $this->pagination->initialize($config);
		$page_number = 0;

        $page_number = intval($this->uri->segment($config['uri_segment']));

        $data['books'] = $this->manuscripts_model->get_books_limit($page_number , $config['per_page'])->result();
        $this->pagination->initialize($config);

        $this->load->view('manuscripts/header');
        $this->load->view('manuscripts/home' , $data);
        $this->load->view('manuscripts/footer');

    }

    public function add_book(){

        $message = "";
    
        if($_POST){                        
 
            $user_name   = $this->session->userdata('name');
            $data = array(
                'registery_number' => $_POST['registery_number'] ,
                'save_number' => $_POST['save_number'] ,
                'org_art' => $_POST['org_art'] ,
                'branch_art' => $_POST['branch_art'],
                'org_title' => $_POST['org_title'],
                'branch_title' => $_POST['branch_title'] ,
                'auther_name' => $_POST['auther_name'] ,
                'auther_nickname' => $_POST['auther_nickname'] ,
                'auther_hijri_death' => $_POST['auther_hijri_death'] ,
                'auther_gregorian_death' => $_POST['auther_gregorian_death'] ,
                'auther_hijri_death_century' => $_POST['auther_hijri_death_century'] ,
                'auther_gregorian_death_century' => $_POST['auther_gregorian_death_century'] ,
                'translate_sources' => $_POST['translate_sources'] ,
                'book_start' => $_POST['book_start'] , 
                'book_end' => $_POST['book_end'] ,      
                'pages_number' => $_POST['pages_number'] ,
                'compelete_version' => $_POST['compelete_version'],
                'version_date_hijri' => $_POST['version_date_hijri'],
                'version_date_century' => $_POST['version_date_century'],
                'copy_name' => $_POST['copy_name'],
                'copy_location' => $_POST['copy_location'],
                'font_type' => $_POST['font_type'],
                'note' => $_POST['note'],
                'custodian_asset' => $_POST['custodian_asset'],
                'entry_name' => $user_name ,
                'entry_date' => date("Y-m-d", time()),
            );
            
            
            if($this->manuscripts_model->add_book($data)){
                $message = 'تمت الاضافة بنجاح';       
            }
            
        }

        // generate random registration number
        /*$uniques = range(100000, 999999);
        shuffle($uniques);
        $uniques = array_slice($uniques, 0, 500);
        print_r($uniques);*/

        // should check the Unique of the random_number
        $random_number = mt_rand(100000, 999999);       
        $random_char   = $this->generateRandomString(2);        

        $data['msg'] = $message;
        $data['random_number'] = $random_char.$random_number;
        $this->load->view('manuscripts/header');
        $this->load->view('manuscripts/add_book' , $data);
        $this->load->view('manuscripts/footer');
        
    }

    public function view_book($id){

        if($id == NULL){

            $home_url = base_url().'manuscripts_model';
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $result = $this->manuscripts_model->get_one_books($id);

            if($result->num_rows() == 0){

                $home_url = base_url().'manuscripts_model';
                echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

            }else{

                $data['book'] = $result->result()[0];
                $this->load->view('manuscripts/header');
                $this->load->view('manuscripts/view_book' , $data);
                $this->load->view('manuscripts/footer');

            }

        }                

    }

    public function edit_book($id){

        $message = "";

        if($_POST){

            $id = $_POST['id'];
            $user_name   = $this->session->userdata('name');
            $data = array(
                'registery_number' => $_POST['registery_number'] ,
                'save_number' => $_POST['save_number'] ,
                'org_art' => $_POST['org_art'] ,
                'branch_art' => $_POST['branch_art'],
                'org_title' => $_POST['org_title'],
                'branch_title' => $_POST['branch_title'] ,
                'auther_name' => $_POST['auther_name'] ,
                'auther_nickname' => $_POST['auther_nickname'] ,
                'auther_hijri_death' => $_POST['auther_hijri_death'] ,
                'auther_gregorian_death' => $_POST['auther_gregorian_death'] ,
                'auther_hijri_death_century' => $_POST['auther_hijri_death_century'] ,
                'auther_gregorian_death_century' => $_POST['auther_gregorian_death_century'] ,
                'translate_sources' => $_POST['translate_sources'] ,
                'book_start' => $_POST['book_start'] , 
                'book_end' => $_POST['book_end'] ,      
                'pages_number' => $_POST['pages_number'] ,
                'compelete_version' => $_POST['compelete_version'],
                'version_date_hijri' => $_POST['version_date_hijri'],
                'version_date_century' => $_POST['version_date_century'],
                'copy_name' => $_POST['copy_name'],
                'copy_location' => $_POST['copy_location'],
                'font_type' => $_POST['font_type'],
                'note' => $_POST['note'],
                'custodian_asset' => $_POST['custodian_asset'],
                'entry_name' => $user_name ,
                'entry_date' => date("Y-m-d", time()),
            );

            $updated = $this->manuscripts_model->update_book($id , $data);

            if($updated){
                $message = "تم التعديل بنجاح";
            }

        }

        if($id == NULL){

            $home_url = base_url().'manuscripts_model';
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $result = $this->manuscripts_model->get_one_books($id);

            if($result->num_rows() == 0){

                $home_url = base_url().'manuscripts_model';
                echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

            }else{

                $data['msg'] = $message;
                $data['book'] = $result->result()[0];
                $this->load->view('manuscripts/header');
                $this->load->view('manuscripts/edit_book' , $data);
                $this->load->view('manuscripts/footer');

            }
        }
    }

    public function delete_book($id){
        if($id == NULL){

            $home_url = base_url().'manuscripts';
            redirect($home_url , 'refresh');
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $this->manuscripts_model->delete_book($id);
            $home_url = base_url().'manuscripts';
            redirect($home_url , 'refresh');
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }
    }

    public function search(){

        if($_POST){

            $key    = $_POST['key'];
            $query  = $_POST['query'];

            $books = $this->manuscripts_model->search_books( $key , $query );

            $this->load->library('pagination');
            $config['total_rows'] 			= $books->num_rows();
            $config['per_page'] 			= 100;
            $config['num_links'] 			= ceil($books->num_rows() / 3);
            $config['full_tag_open'] 		= '<div class="pagging text-center"><nav><ul class="pagination">';
            $config['full_tag_close'] 		= '</ul></nav></div>';
            $config['num_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['num_tag_close'] 		= '</span></li>';
            $config['cur_tag_open'] 		= '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] 		= '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close'] 		= '<span aria-hidden="true">&raquo; التالي</span></span></li>';
            $config['prev_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close'] 		= '</span></li>';
            $config['first_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] 	= '</span></li>';
            $config['last_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close'] 		= '</span></li>';
            $config['base_url'] 			= base_url() . "manuscripts/search";
            $config['uri_segment'] 			= $this->uri->total_segments(); //4;

            $this->pagination->initialize($config);
            $page_number = 0;

            $page_number = intval($this->uri->segment($config['uri_segment']));

            $data['books'] = $this->manuscripts_model->search_books_limit( $key , $query , $page_number , $config['per_page'])->result();
            $this->pagination->initialize($config);

            $data['key']   = $_POST['key'];
            $data['query'] = $_POST['query'];

            $this->load->view('manuscripts/header');
            $this->load->view('manuscripts/home' , $data);
            $this->load->view('manuscripts/footer');
        
        }else{

            redirect('home', 'refresh');
            die;

        }
        
    }

    public function advanced_search(){
        $this->load->view('manuscripts/header');
        $this->load->view('manuscripts/advanced_search');
        $this->load->view('manuscripts/footer');
    }

    public function advanced_search_results(){
        
        if($_POST){

            // this line of code from 
            // https://www.geeksforgeeks.org/how-to-trim-all-strings-in-an-array-in-php/
            array_walk($_POST, create_function('&$val','$val = trim($val);') );            

            $sql = "SELECT * FROM manuscripts ";
            $conditions = array();

            if (!empty($_POST['registery_number'])) {
                $conditions[] = "registery_number LIKE '%$_POST[registery_number]%'";
            }

            if (!empty($_POST['save_number'])) {
                $conditions[] = "save_number LIKE '%$_POST[save_number]%'";
            }

            if (!empty($_POST['org_art'])) {
                $conditions[] = "org_art LIKE '%$_POST[org_art]%'";
            }

            if (!empty($_POST['branch_art'])) {
                $conditions[] = "branch_art LIKE '%$_POST[branch_art]%'";
            }

            if (!empty($_POST['org_title'])) {
                $conditions[] = "org_title LIKE '%$_POST[org_title]%'";
            }

            if (!empty($_POST['auther_name'])) {
                $conditions[] = "auther_name LIKE '%$_POST[auther_name]%'";
            }

            if (!empty($_POST['auther_nickname'])) {
                $conditions[] = "auther_nickname LIKE '%$_POST[auther_nickname]%'";
            }

            if (!empty($_POST['translate_sources'])) {
                $conditions[] = "translate_sources LIKE '%$_POST[translate_sources]%'";
            }

            if (!empty($_POST['book_start'])) {
                $conditions[] = "book_start LIKE '%$_POST[book_start]%'";
            }

            if (!empty($_POST['edition'])) {
                $conditions[] = "edition LIKE '%$_POST[edition]%'";
            }

            if (!empty($_POST['book_end'])) {
                $conditions[] = "book_end LIKE '%$_POST[book_end]%'";
            }

            if (!empty($_POST['pages_number'])) {
                $conditions[] = "pages_number LIKE '%$_POST[pages_number]%'";
            }

            if (!empty($_POST['compelete_version'])) {
                $conditions[] = "compelete_version LIKE '%$_POST[compelete_version]%'";
            }

            if (!empty($_POST['copy_name'])) {
                $conditions[] = "copy_name LIKE '%$_POST[copy_name]%'";
            }

            if (!empty($_POST['copy_location'])) {
                $conditions[] = "copy_location LIKE '%$_POST[copy_location]%'";
            }

            if (!empty($_POST['font_type'])) {
                $conditions[] = "font_type LIKE '%$_POST[font_type]%'";
            }

            if (!empty($_POST['note'])) {
                $conditions[] = "note LIKE '%$_POST[note]%'";
            }

            if (!empty($_POST['custodian_asset'])) {
                $conditions[] = "custodian_asset LIKE '%$_POST[custodian_asset]%'";
            }

            if (!empty($_POST['entry_name'])) {
                $conditions[] = "entry_name LIKE '%$_POST[entry_name]%'";
            }

            /* ########## dates ################ */

            if (!empty($_POST['auther_hijri_death1'])) {
                $auther_hijri_death1 =  $_POST['auther_hijri_death1']; 
                $conditions[] = "auther_hijri_death >= $auther_hijri_death1";
            }

            if (!empty($_POST['auther_hijri_death2'])) {
                $auther_hijri_death2 =  $_POST['auther_hijri_death2']; 
                $conditions[] = "auther_hijri_death <= $auther_hijri_death2";
            }

            if (!empty($_POST['auther_hijri_death_century1'])) {
                $auther_hijri_death_century1 =  $_POST['auther_hijri_death_century1']; 
                $conditions[] = "auther_hijri_death_century >= $auther_hijri_death_century1";
            }

            if (!empty($_POST['auther_hijri_death_century2'])) {
                $auther_hijri_death_century2 =   $_POST['auther_hijri_death_century2']; 
                $conditions[] = "auther_hijri_death_century <= $auther_hijri_death_century2";
            }
            
            if (!empty($_POST['auther_gregorian_death1'])) {
                $auther_gregorian_death1 =   $_POST['auther_gregorian_death1']; 
                $conditions[] = "auther_gregorian_death >= $auther_gregorian_death1";
            }

            if (!empty($_POST['auther_gregorian_death2'])) {
                $auther_gregorian_death2 =  $_POST['auther_gregorian_death2']; 
                $conditions[] = "auther_gregorian_death <= $auther_gregorian_death2";
            }
//
            if (!empty($_POST['auther_gregorian_death_century1'])) {
                $auther_gregorian_death_century1 =   $_POST['auther_gregorian_death_century1']; 
                $conditions[] = "auther_gregorian_death_century >= $auther_gregorian_death_century1";
            }

            if (!empty($_POST['auther_gregorian_death_century2'])) {
                $auther_gregorian_death_century2 =  $_POST['auther_gregorian_death_century2']; 
                $conditions[] = "auther_gregorian_death_century <= $auther_gregorian_death_century2";
            }

            //

            if (!empty($_POST['version_date_hijri1'])) {
                $version_date_hijri1 =   $_POST['version_date_hijri1']; 
                $conditions[] = "version_date_hijri >= $version_date_hijri1";
            }

            if (!empty($_POST['version_date_hijri2'])) {
                $version_date_hijri2 =  $_POST['version_date_hijri2']; 
                $conditions[] = "version_date_hijri <= $version_date_hijri2";
            }

            //

            if (!empty($_POST['version_date_century1'])) {
                $version_date_century1 =   $_POST['version_date_century1']; 
                $conditions[] = "version_date_century >= $version_date_century1";
            }

            if (!empty($_POST['version_date_century2'])) {
                $version_date_century2 =  $_POST['version_date_century2']; 
                $conditions[] = "version_date_century <= $version_date_century2";
            }

            // 

            if (!empty($_POST['entry_date1'])) {
                $entry_date1 =   $_POST['entry_date1']; 
                $conditions[] = "entry_date >= $entry_date1";
            }

            if (!empty($_POST['entry_date2'])) {
                $entry_date2 =  $_POST['entry_date2']; 
                $conditions[] = "entry_date <= $entry_date2";
            }

            
            if (count($conditions) > 0) {
                $or_search = $_POST['or_search'];
                if($or_search == 'and'){
                    $sql .= " WHERE " . implode(' AND ', $conditions);
                }else{
                    $sql .= " WHERE " . implode(' OR ', $conditions);
                }
            }
            

            $books = $this->manuscripts_model->search($sql);

            $this->load->library('pagination');
            $config['total_rows'] 			= $books->num_rows();
            $config['per_page'] 			= 100;
            $config['num_links'] 			= ceil($books->num_rows() / 3);
            $config['full_tag_open'] 		= '<div class="pagging text-center"><nav><ul class="pagination">';
            $config['full_tag_close'] 		= '</ul></nav></div>';
            $config['num_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['num_tag_close'] 		= '</span></li>';
            $config['cur_tag_open'] 		= '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] 		= '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close'] 		= '<span aria-hidden="true">&raquo; التالي</span></span></li>';
            $config['prev_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close'] 		= '</span></li>';
            $config['first_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] 	= '</span></li>';
            $config['last_tag_open'] 		= '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close'] 		= '</span></li>';
            $config['base_url'] 			= base_url() . "manuscripts/advanced_search_results";
            $config['uri_segment'] 			= $this->uri->total_segments(); //4;

            $this->pagination->initialize($config);
            $page_number = 0;

            $page_number = intval($this->uri->segment($config['uri_segment']));

            $sql .= " LIMIT $page_number , $config[per_page]";

            $data['books'] = $this->manuscripts_model->search($sql)->result();
            $this->pagination->initialize($config);

            // $data['key']   = $_POST['key'];
            // $data['query'] = $_POST['query'];

            $this->load->view('manuscripts/header');
            $this->load->view('manuscripts/home' , $data);
            $this->load->view('manuscripts/footer');
        
        }else{

            redirect('home', 'refresh');
            die;

        }
        

    }

    // these are private functions
    private function generateRandomString($length = 25) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>