<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manuscripts extends CI_Controller {

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
		$config['base_url'] 			= base_url() . "manuscripts/index";
		$config['uri_segment'] 			= $this->uri->total_segments(); //4;

        $this->pagination->initialize($config);
		$page_number = 0;

        $page_number = intval($this->uri->segment($config['uri_segment']));

        $data['books'] = $this->home_model->get_books_limit($page_number , $config['per_page'])->result();
        $this->pagination->initialize($config);

        $this->load->view('manuscripts/header');
        $this->load->view('manuscripts/home' , $data);
        $this->load->view('manuscripts/footer');

    }

    public function add_book(){

        $message = "";
    
        if($_POST){
            var_dump($_POST);
            die;
            
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

        // generate random registration number
        /*$uniques = range(100000, 999999);
        shuffle($uniques);
        $uniques = array_slice($uniques, 0, 500);
        print_r($uniques);*/

        $random_number = mt_rand(100000, 999999);       
        $random_char   = $this->generateRandomString(2);        

        $data['msg'] = $message;
        $data['random_number'] = $random_char.$random_number;
        $this->load->view('manuscripts/header');
        $this->load->view('manuscripts/add_book' , $data);
        $this->load->view('manuscripts/footer');
        
    }


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