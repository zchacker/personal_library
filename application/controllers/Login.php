<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
				
		$this->load->model('home_model');
			
		ini_set('upload_max_filesize','64M');
		ini_set('max_execution_time','300');
		ini_set('max_input_time','120');
		ini_set('memory_limit','128M');
		ini_set('post_max_size','265M');

	}

    public function index(){

        $message = '';

        if($_POST){
           
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $result = $this->home_model->get_admin_data( $username , $password );

            if($result->num_rows() == 1){

                $name = $result->result()[0]->name;

                $session_data = array(
                    'name' => $name ,
                    'loggedin' => TRUE ,                    
                    'username' =>  $username ,  
                    'password' => $password,                  
                );

                $this->session->set_userdata($session_data);

                redirect('home', 'refresh');

            }else{

                $message  = 'كلمة المرور خطأ, او اسم المستخدم غير صحيح';

            }

        }

        $data['msg'] = $message;
        $this->load->view('login' , $data);

    }

}

?>