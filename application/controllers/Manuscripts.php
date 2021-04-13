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

            var_dump($_POST);
            die;

            $user_name   = $this->session->userdata('name');
            $data = array(
                'registery_number' => 'aa999999',//$_POST['registery_number'] ,
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