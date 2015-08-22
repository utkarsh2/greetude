<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
		  	$this->load->model('user_model');
		  	$this->load->library('form_validation');
		  	$this->load->library('session');
		  	if(($this->session->userdata('user_id')!="")){
				redirect('home/dashboard');
			}
		}
		
		public function index(){
			$this->load->view('main.php');
		}

		public function login(){
			$this->load->view('login');
		}

		public function auth(){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]|max_length[32]');
			if($this->form_validation->run() == FALSE){
				$this->login();
			}else{
			 	$email=$this->input->post('email');
			 	$password= md5($this->input->post('pass'));	
			 	$result = $this->user_model->login($email,$password);
			 	if($result)	redirect('main/dashboard');
			 	else  		$this->login();
			}
		}

		public function registration(){
			$this->load->view('registration.php');
		}

		public function reg(){
			$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|alpha');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('con_pass', 'Password Confirmation', 'trim|required|matches[pass]');
			$this->form_validation->set_rules('number', 'Mobile Number', 'trim|required|numeric');
			if($this->form_validation->run() == FALSE){
				$this->registration();
			}else{

				$email = $this->input->post('email');
				$pass = md5($this->input->post('pass'));
				$data = array('name' => $this->input->post('name'),
						'mobile_no' => $this->input->post('number'));
				
			 	$this->user_model->add_user($email,$pass);
			 	$this->user_model->add_user_details($email,$data);
			 	$result = $this->user_model->login($this->input->post('email'),md5($this->input->post('pass')));
			 	if($result)	redirect('main/dashboard');
			 	else  		$this->login();
			}
		}
	}

?>