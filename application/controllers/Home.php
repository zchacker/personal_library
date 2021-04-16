<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
				
		$this->load->model('home_model');
			
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

        $books = $this->home_model->get_books();

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
		$config['base_url'] 			= base_url() . "home/index";
		$config['uri_segment'] 			= $this->uri->total_segments(); //4;

        $this->pagination->initialize($config);
		$page_number = 0;

        $page_number = intval($this->uri->segment($config['uri_segment']));

        $data['books'] = $this->home_model->get_books_limit($page_number , $config['per_page'])->result();
        $this->pagination->initialize($config);

        $this->load->view('header');
        $this->load->view('home' , $data);
        $this->load->view('footer');

    }

    public function add_book(){

        $message = "";

        if($_POST){

            $subject = $_POST['subject'];
            $title = $_POST['title'];
            $auther_name = $_POST['auther_name'];
            $nickname = $_POST['nickname'];
            $death_hijri = $_POST['death_hijri'];
            $death_gregorian = $_POST['death_gregorian'];
            $folders = $_POST['folders'];
            $pages = $_POST['pages'];
            $publisher_name = $_POST['publisher_name'];
            $publisher_country = $_POST['publisher_country'];
            $publisher_address = $_POST['publisher_address'];
            $edition = $_POST['edition'];
            $edition_date = $_POST['edition_date'];
            $notes = $_POST['notes'];
            $user_name   = $this->session->userdata('name');            


            // setup right format
            //$death_hijri     =  date("Y-m-d", strtotime( $death_hijri )); 
            //$death_gregorian =  date("Y-m-d", strtotime( $death_gregorian )); 
            $edition_date    =  date("Y-m-d", strtotime( $edition_date )); 
     

            $data = array(
                'subject' => $subject ,
                'title' => $title ,
                'auther_name' => $auther_name ,
                'nickname' => $nickname,
                'death_hijri' => $death_hijri,
                'death_gregorian' => $death_gregorian ,
                'folders' => $folders ,
                'pages' => $pages ,
                'publisher_name' => $publisher_name ,
                'publisher_country' => $publisher_country ,
                'publisher_address' => $publisher_address ,
                'edition' => $edition ,
                'edition_date' => $edition_date ,
                'notes' => $notes ,
                'user_name' => $user_name,
                'create_date' => date("Y-m-d", time())
            );
            
            
            if($this->home_model->add_book($data)){
                $message = 'تمت الاضافة بنجاح';
                // print("added successfuly");
                // var_dump($data);
                // die;
            }
            
        }

        $data['msg'] = $message;
        $this->load->view('header');
        $this->load->view('add_book' , $data);
        $this->load->view('footer');
        
    }

    public function view_book($id){

        if($id == NULL){

            $home_url = base_url().'home';
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $result = $this->home_model->get_one_books($id);

            if($result->num_rows() == 0){

                $home_url = base_url().'home';
                echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

            }else{

                $data['book'] = $result->result()[0];
                $this->load->view('header');
                $this->load->view('view_book' , $data);
                $this->load->view('footer');

            }
        }                

    }

    public function edit_book($id){

        $message = "";

        if($_POST){

            $id = $_POST['id'];
            $subject = $_POST['subject'];
            $title = $_POST['title'];
            $auther_name = $_POST['auther_name'];
            $nickname = $_POST['nickname'];
            $death_hijri = $_POST['death_hijri'];
            $death_gregorian = $_POST['death_gregorian'];
            $folders = $_POST['folders'];
            $pages = $_POST['pages'];
            $publisher_name = $_POST['publisher_name'];
            $publisher_country = $_POST['publisher_country'];
            $publisher_address = $_POST['publisher_address'];
            $edition = $_POST['edition'];
            $edition_date = $_POST['edition_date'];
            $notes = $_POST['notes'];
            $user_name   = $this->session->userdata('name');            


            // setup right format
            //$death_hijri     =  date("Y-m-d", strtotime( $death_hijri )); 
            //$death_gregorian =  date("Y-m-d", strtotime( $death_gregorian )); 
            $edition_date    =  date("Y-m-d", strtotime( $edition_date )); 

            $data = array(
                'subject' => $subject ,
                'title' => $title ,
                'auther_name' => $auther_name ,
                'nickname' => $nickname,
                'death_hijri' => $death_hijri,
                'death_gregorian' => $death_gregorian ,
                'folders' => $folders ,
                'pages' => $pages ,
                'publisher_name' => $publisher_name ,
                'publisher_country' => $publisher_country ,
                'publisher_address' => $publisher_address ,
                'edition' => $edition ,
                'edition_date' => $edition_date ,
                'notes' => $notes ,
                'user_name' => $user_name
            );

            $updated = $this->home_model->update_book($id , $data);

            if($updated){
                $message = "تم التعديل بنجاح";
            }

        }

        if($id == NULL){

            $home_url = base_url().'home';
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $result = $this->home_model->get_one_books($id);

            if($result->num_rows() == 0){

                $home_url = base_url().'home';
                echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

            }else{

                $data['msg'] = $message;
                $data['book'] = $result->result()[0];
                $this->load->view('header');
                $this->load->view('edit_book' , $data);
                $this->load->view('footer');

            }
        }
    }

    public function delete_book($id){
        if($id == NULL){

            $home_url = base_url().'home';
            redirect($home_url , 'refresh');
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }else{

            $this->home_model->delete_book($id);
            $home_url = base_url().'home';
            redirect($home_url , 'refresh');
            echo '<a href="'.$home_url.'">الرابط  خطأ العودة</a>';

        }
    }

    public function search(){

        if($_POST){

            $key    = $_POST['key'];
            $query  = $_POST['query'];

            $books = $this->home_model->search_books( $key , $query );

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
            $config['base_url'] 			= base_url() . "home/search";
            $config['uri_segment'] 			= $this->uri->total_segments(); //4;

            $this->pagination->initialize($config);
            $page_number = 0;

            $page_number = intval($this->uri->segment($config['uri_segment']));

            $data['books'] = $this->home_model->search_books_limit( $key , $query , $page_number , $config['per_page'])->result();
            $this->pagination->initialize($config);

            $data['key']   = $_POST['key'];
            $data['query'] = $_POST['query'];

            $this->load->view('header');
            $this->load->view('home' , $data);
            $this->load->view('footer');
        
        }else{

            redirect('home', 'refresh');
            die;

        }
        
    }

    public function advanced_search(){
    
        $this->load->view('header');
        $this->load->view('advanced_search');
        $this->load->view('footer');

    }

    public function advanced_search_results(){
        
        //var_dump($_POST);
        //die;

        
        if($_POST){

            // $clean_values = array();
            // array_walk($_POST, 'sanitize_post');

            // this line of code from 
            // https://www.geeksforgeeks.org/how-to-trim-all-strings-in-an-array-in-php/
            array_walk($_POST, create_function('&$val','$val = trim($val);') );            

            $sql = "SELECT * FROM books ";
            $conditions = array();

            if (!empty($_POST['subject'])) {
                $conditions[] = "subject LIKE '%$_POST[subject]%'";
            }

            if (!empty($_POST['title'])) {
                $conditions[] = "title LIKE '%$_POST[title]%'";
            }

            if (!empty($_POST['auther_name'])) {
                $conditions[] = "auther_name LIKE '%$_POST[auther_name]%'";
            }

            if (!empty($_POST['nickname'])) {
                $conditions[] = "nickname LIKE '%$_POST[nickname]%'";
            }

            if (!empty($_POST['folders'])) {
                $conditions[] = "folders LIKE '%$_POST[folders]%'";
            }

            if (!empty($_POST['pages'])) {
                $conditions[] = "pages LIKE '%$_POST[pages]%'";
            }

            if (!empty($_POST['publisher_name'])) {
                $conditions[] = "publisher_name LIKE '%$_POST[publisher_name]%'";
            }

            if (!empty($_POST['publisher_country'])) {
                $conditions[] = "publisher_country LIKE '%$_POST[publisher_country]%'";
            }

            if (!empty($_POST['publisher_address'])) {
                $conditions[] = "publisher_address LIKE '%$_POST[publisher_address]%'";
            }

            if (!empty($_POST['edition'])) {
                $conditions[] = "edition LIKE '%$_POST[edition]%'";
            }

            if (!empty($_POST['notes'])) {
                $conditions[] = "notes LIKE '%$_POST[notes]%'";
            }

            if (!empty($_POST['notes'])) {
                $conditions[] = "notes LIKE '%$_POST[notes]%'";
            }

            if (!empty($_POST['notes'])) {
                $conditions[] = "notes LIKE '%$_POST[notes]%'";
            }

            if (!empty($_POST['edition_date1'])) {
                $edition_date1 =  date("Y-m-d", strtotime( $_POST['edition_date1'] )); 
                $conditions[] = "edition_date >= $edition_date1";
            }
            
            if (!empty($_POST['edition_date2'])) {
                $edition_date2 =  date("Y-m-d", strtotime( $_POST['edition_date2'] )); 
                $conditions[] = "edition_date <= $edition_date2";
            }
            
            if (!empty($_POST['hijri-date-input1'])) {
                $hijri_date_input1 = $_POST['hijri-date-input1'];
                $conditions[] = "death_hijri >= $hijri_date_input1";
            }
            
            if (!empty($_POST['hijri-date-input2'])) {
                $hijri_date_input2 = $_POST['hijri-date-input2'];
                $conditions[] = "death_hijri <= $hijri_date_input2";
            }

            if (!empty($_POST['gerogian-date-input1'])) {
                $gerogian_date_input1 = $_POST['hijri-date-input1'];
                $conditions[] = "death_gregorian >= $gerogian_date_input1";
            }
            
            if (!empty($_POST['gerogian-date-input2'])) {
                $gerogian_date_input2 = $_POST['gerogian-date-input2'];
                $conditions[] = "death_gregorian <= $gerogian_date_input2";
            }

            if (!empty($_POST['create_date1'])) {
                $create_date1 =  date("Y-m-d", strtotime( $_POST['create_date1'] )); 
                $conditions[] = "create_date >= $create_date1";
            }
            
            if (!empty($_POST['create_date2'])) {
                $create_date2 = date("Y-m-d", strtotime( $_POST['create_date2'] )); 
                $conditions[] = "create_date <= $create_date2";
            }

            
            if (count($conditions) > 0) {
                $or_search = $_POST['or_search'];
                if($or_search == 'and'){
                    $sql .= " WHERE " . implode(' AND ', $conditions);
                }else{
                    $sql .= " WHERE " . implode(' OR ', $conditions);
                }
            }

            /* 
            $key    = $_POST['key'];
            $query  = $_POST['query'];

            $edition_date1          = $_POST['edition_date1'];
            $edition_date2          = $_POST['edition_date2'];

            $hijri_date_input1      = $_POST['hijri-date-input1'];
            $hijri_date_input2      = $_POST['hijri-date-input2'];

            $gerogian_date_input1   = $_POST['gerogian-date-input1'];
            $gerogian_date_input2   = $_POST['gerogian-date-input2'];

            $create_date1           = $_POST['create_date1'];
            $create_date2           = $_POST['create_date2'];

            // setup right format
            if(strlen($edition_date1) > 0)
                $edition_date1          =  date("Y-m-d", strtotime( $edition_date1 )); 
            
            if(strlen($edition_date2) > 0)
                $edition_date2          =  date("Y-m-d", strtotime( $edition_date2 )); 
            
            /*if(strlen($hijri_date_input1) > 0)
                $hijri_date_input1      =  date("Y-m-d", strtotime( $hijri_date_input1 )); 
            
            if(strlen($hijri_date_input2) > 0)
                $hijri_date_input2      =  date("Y-m-d", strtotime( $hijri_date_input2 )); 
            
                if(strlen($gerogian_date_input1) > 0)
                $gerogian_date_input1   =  date("Y-m-d", strtotime( $gerogian_date_input1 )); 
            
            if(strlen($gerogian_date_input2) > 0)
                $gerogian_date_input2   =  date("Y-m-d", strtotime( $gerogian_date_input2 ));
            
            */
            
            /*
            if(strlen($create_date1) > 0)
                $create_date1           =  date("Y-m-d", strtotime( $create_date1 )); 
           
            if(strlen($create_date2) > 0)
                $create_date2           =  date("Y-m-d", strtotime( $create_date2 ));


            
            $books = $this->home_model->advanced_search_books( $key , $query , $edition_date1 , $edition_date2 , $hijri_date_input1 , 
            $hijri_date_input2 , $gerogian_date_input1 , $gerogian_date_input2 , $create_date1 , $create_date2 );
            */

            $books = $this->home_model->search($sql);

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
            $config['base_url'] 			= base_url() . "home/index";
            $config['uri_segment'] 			= $this->uri->total_segments(); //4;

            $this->pagination->initialize($config);
            $page_number = 0;

            $page_number = intval($this->uri->segment($config['uri_segment']));

            // $data['books'] = $this->home_model->advanced_search_books_limit( $key , $query, $edition_date1 , $edition_date2 , $hijri_date_input1 , 
            // $hijri_date_input2 , $gerogian_date_input1 , $gerogian_date_input2 , $create_date1 , $create_date2 , $page_number , $config['per_page'])->result();
            

            $sql .= " LIMIT $page_number , $config[per_page]";

            $data['books'] = $this->home_model->search($sql)->result();
            $this->pagination->initialize($config);

            // $data['key']   = $_POST['key'];
            // $data['query'] = $_POST['query'];

            $this->load->view('header');
            $this->load->view('home' , $data);
            $this->load->view('footer');
        
        }else{

            redirect('home', 'refresh');
            die;

        }
        

    }

    public function users(){
        
        $users = $this->home_model->get_users()->result();
        $data['users'] = $users;

        $this->load->view('header');
        $this->load->view('users' , $data);
        $this->load->view('footer');

    }

    public function add_user(){

        $message = "";

        if($_POST){

            $name       = $_POST['name'];
            $username   = $_POST['username'];
            $role       = $_POST['role'];
            $password   = md5($_POST['password']);
                        
            $data = array(
                'name' =>$name ,
                'username' => $username ,
                'role' => $role ,
                'password' => $password
            );
                        
            if($this->home_model->add_user($data)){
                $message = 'تمت الاضافة بنجاح';               
            }
            
        }

        $data['msg'] = $message;

        $this->load->view('header');
        $this->load->view('add_user' , $data);
        $this->load->view('footer');

    }

    public function edit_user($id){
        $message = "";

        if($_POST){

            $name       = $_POST['name'];
            $username   = $_POST['username'];
            $role       = $_POST['role'];
            $password   = $_POST['password'];
            
            if(strlen($password) > 0){

                $password   = md5($password);
                        
                $data = array(
                    'name' =>$name ,
                    'username' => $username ,
                    'role' => $role ,
                    'password' => $password
                );
                            
                if($this->home_model->update_user($id , $data)){
                    $message = 'تم التعديل بنجاح';               
                }

            }else{
                
                        
                $data = array(
                    'name' =>$name ,
                    'username' => $username ,
                    'role' => $role 
                );
                            
                if($this->home_model->update_user($id , $data)){
                    $message = 'تم التعديل بنجاح';               
                }

            }
            
        }

        $result = $this->home_model->get_user($id);

        if($result->num_rows() > 0){

            $data['msg']  = $message;
            $data['user'] = $result->result()[0];

            $this->load->view('header');
            $this->load->view('edit_user' , $data);
            $this->load->view('footer');

        }else{

            redirect('home' , 'refresh');

        }
        

    }

    public function delete_user($id){
        
        $this->home_model->delete_user($id);
        redirect('home/users' , 'refresh');

    }

    public function export_data(){

        $this->load->library("excel");
		$object = new PHPExcel();
		$object->setActiveSheetIndex(0);

		$table_columns = array(
			'الرقم',
			'الموضوع',
            'العنوان',
            'اسم المؤلف',
            'لقبه',
            'تاريخ الوفاة الهجري',
            'تاريخ الوفاة الميلادي',
            'عدد المجلدات',
            'عدد الصفحات',
            'اسم الناشر',
            'دولة الناشر',
            'عنوان الناشر',
            'الطبعة',
            'تاريخ الطبعة',
            'ملاحظات',
            'اسم مدخل البيانات',
            'تاريخ الانشاء',
		);


        $column     = 0;
		$tableRow 	= 1;

		foreach($table_columns as $field){
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, $tableRow, $field);
			$column++;			
		}

		$tableRow++;
		$books = $this->home_model->get_books()->result();
		
		foreach($books as $row){
							
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $tableRow, $row->id );
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $tableRow, $row->subject);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $tableRow, $row->title);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $tableRow, $row->auther_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $tableRow, $row->nickname);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $tableRow, $row->death_hijri);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $tableRow, $row->death_gregorian);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $tableRow, $row->folders);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $tableRow, $row->pages);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $tableRow, $row->publisher_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $tableRow, $row->publisher_country);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $tableRow, $row->publisher_address);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $tableRow, $row->edition);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $tableRow, $row->edition_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $tableRow, $row->notes);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $tableRow, $row->user_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $tableRow, $row->create_date);

			$tableRow++;

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		// $object_writer = PHPExcel_IOFactory::createWriter($object, 'CSV');
        header('Content-Encoding: UTF-8'); // vilh, change to UTF-8!
		// header('Content-Type: application/x-msexcel; charset=UTF-8');
		header('Content-Type: application/vnd.ms-excel');             
           
		header('Content-Disposition: attachment;filename="بيانات الكتب.xls"');
		// header('Content-Disposition: attachment;filename="بيانات الكتب.csv"');
		$object_writer->save('php://output');
		

    }

    // https://www.youtube.com/watch?v=hDc6SctjfAk
    // https://makitweb.com/jquery-ui-autocomplete-with-php-and-ajax/


    // https://www.webslesson.info/2016/06/ajax-autocomplete-textbox-using-jquery-php-and-mysql.html

    // query ajax
    public function get_auther(){
        if($_POST){

            $query   = $_POST['query'];
            $results = $this->home_model->get_auther($query)->result();

            $response = array();

            foreach($results as $row){
                $response[] = array(
                    'value' => $row->nickname ,
                    'label' => $row->nickname ,
                    'auther_name' => $row->auther_name ,
                    'nickname' => $row->nickname ,
                    'death_hijri' => $row->death_hijri ,
                    'death_gregorian' => $row->death_gregorian ,
                );
            }
            
            echo json_encode($response);
        }
    }

    public function get_booktitle(){
        if($_POST){

            $query   = $_POST['query'];
            $results = $this->home_model->get_booktitle($query)->result();

            $response = array();

            foreach($results as $row){
                $response[] = array(
                    'value' => $row->title ,
                    'label' => $row->title ,
                    'subject' => $row->subject ,
                    'auther_name' => $row->auther_name ,
                    'nickname' => $row->nickname ,
                    'death_hijri' => $row->death_hijri ,
                    'death_gregorian' => $row->death_gregorian ,
                );
            }
            
            echo json_encode($response);
        }
    }

    public function test(){

        /*$x = 'a';
        while ($x != 'z')         // of course you can take that to zzz or beyond etc
        {
            $values[] = $x++;       // A simple range() call will not work for multiple characters
        }
        $values[] = $x;

        $y = 'A';
        while ($y != 'Z')         // of course you can take that to zzz or beyond etc
        {
            $values[] = $y++;       // A simple range() call will not work for multiple characters
        }
        $values[] = $y;           // Now this array contains range `a - zz`

        var_dump($values);


        //Step 2:  Provide reference
        $str = 'z';

        //Step 3: Move next or back
        //echo $values[array_search(strtolower($str), $values) ];   // Previous = aa
        echo $values[array_search( $str , $values) ];   // Previous = aa
        echo '<br/>';
        echo $values[array_search($str , $values) + 1];   // Next     = ac*/

        $result = $this->home_model->get_last_code();     

        if($result == NULL)
            return;

        print_r( $result[0]['registery_number'] .'<br/>' );

        print_r($this->sequance($result[0]['registery_number']));

        // for ($letter = 'AA'; $letter !== 'AAA'; $letter++){
        //     foreach (range(1, 999) as $number) {
        //             echo $letter.str_pad($number, 6, '0', STR_PAD_LEFT)."\n";
        //     }
        // }
        // $this->load->view('test');
    }

    // https://xpertphp.com/how-to-import-excel-and-csv-file-using-codeigniter/
    public function import_file(){

        //$this->load->library('upload');
        $this->load->library("excel");

        $message = "";

        if($_POST){

            
            $path = 'uploads/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls';
            $config['remove_spaces'] = TRUE;
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if (!$this->upload->do_upload('uploadFile')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
    
            if (empty($error)) {

                if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
    
                try {
    
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i = 0;


                    foreach ($allDataInSheet as $value) {

                        // this to skip first row
                        if ($flag) {
                            $flag = false;
                            continue;
                        }
                      
                        //$inserdata[$i]['id'] = $value['A'];
                        $inserdata[$i]['subject'] = $value['B'];
                        $inserdata[$i]['title'] = $value['C'];
                        $inserdata[$i]['auther_name'] = $value['D'];
                        $inserdata[$i]['nickname'] = $value['E'];
                        $inserdata[$i]['death_hijri'] = $value['F'];
                        $inserdata[$i]['death_gregorian'] = $value['G'];
                        $inserdata[$i]['folders'] = $value['H'];
                        $inserdata[$i]['pages'] = $value['I'];
                        $inserdata[$i]['publisher_name'] = $value['J'];
                        $inserdata[$i]['publisher_country'] = $value['K'];
                        $inserdata[$i]['publisher_address'] = $value['L'];
                        $inserdata[$i]['edition'] = $value['M'];
                        $inserdata[$i]['edition_date'] = $value['N'];
                        $inserdata[$i]['notes'] = $value['O'];
                        $inserdata[$i]['user_name'] = $value['P'];
                        $inserdata[$i]['create_date'] = $value['Q'];

                        $i++;
                    }

                    
    
                    $result = $this->home_model->importdata($inserdata);
                    if ($result) {
                        
                        $message = '<div class="alert alert-success" role="alert">تمت إضافة البيانات بنجاح</div>';

                    } else {

                        $message = '<div class="alert alert-danger" role="alert">حدث خطأ</div>';
                    
                    }

                } catch (Exception $e) {
                    
                    die('خطأ في تحميل الملف "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '" : ' . $e->getMessage());
                }

            } else {

                $message = '<div class="alert alert-danger" role="alert">خطأ : '.$error['error'].'</div>';
                //$message = $error['error'];

            }
        }
        

        $data['msg'] = $message;
        $this->load->view('header');
        $this->load->view('import' , $data);
        $this->load->view('footer');
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
    
    private function sequance( $code ){

        $result   = '';

        // this part of code from this
        // https://stackoverflow.com/questions/26355388/most-efficient-way-to-get-previous-letter-in-the-alphabet-using-php        
        
        $x = 'a';
        while ($x != 'z')         // of course you can take that to zzz or beyond etc
        {
            $values[] = $x++;       // A simple range() call will not work for multiple characters
        }
        $values[] = $x;

        $y = 'A';
        while ($y != 'Z')         // of course you can take that to zzz or beyond etc
        {
            $values[] = $y++;       // A simple range() call will not work for multiple characters
        }
        $values[] = $y;           // Now this array contains range `a - zz`


        $string   = $code;

        $pos      = 1;
        $letter1   = substr($string, 0, $pos);
        $letter2   = substr($string, 1, $pos);
        $number    = substr($string, $pos+1 , $pos+6);

        // incrase number by one also litter by one
        if($number >= 999999){

            if($letter2 == 'z' or $letter2 = 'Z'){                
                if($letter1 == 'z' or $letter1 == 'Z'){
                    $letter1 = 'a';
                }else{
                    $letter1 = $values[ array_search( $letter1 , $values) + 1];
                }

                $letter2 = 'a';
                $number = 99;
            }else{
                $letter2 = $values[array_search( $letter2 , $values) + 1];
            }
            
        }else{
            $letter2 = $values[array_search( $letter2 , $values) + 1];
        }
            
        ++$number;
        
        // this code from
        // https://stackoverflow.com/questions/38930437/serial-number-with-alphabetes-and-numbers
        
        $letter = $letter1.$letter2;
        $result = $letter.str_pad($number, 6, '0', STR_PAD_LEFT);

        return $result;
    }

    private function sanitize_post($item, $key){
        $clean_values[$key] = trim($item);
        //optional further cleaning ex) htmlentities
    }

}

?>