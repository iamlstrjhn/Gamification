<?php

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Account_model');
	}

	public function index(){
		if ($this->session->userdata('flag')) {
			redirect('dashboard');
		}
		else {
			$this->load->view('student/login.php');
		}
		
	}

	public function login_faculty(){
		if ($this->session->userdata('session')) {
			redirect('Teacherdashboard');
		}

		else {
			$this->load->view('faculty/login.php');
		}
		
	}

	#this part is for the login account of student

	public function login_account_student() {
		$this->form_validation->set_rules('username', 'username','trim|required');
		$this->form_validation->set_rules('password', 'password','trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect('Login');
		} 
		else {
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
				$data = array(

				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			);
				
			if($result = $this->Account_model->login_user_student($data)) {
			$this->session->set_userdata('flag', $result);
					redirect('dashboard');
				}
			
			else {
				redirect('Login');
			}
		}
	}

	public function login_destroy_student() {
		$this->session->unset_userdata('flag');
		session_destroy();
		redirect('Login');
	}

	#this part is for the faculty login

	public function login_account_faculty() {
		$this->form_validation->set_rules('username', 'username','trim|required');
		$this->form_validation->set_rules('password', 'password','trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect('Login/login_faculty');
		} 
		else {
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
				$data = array(

				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			);
				
			if($result = $this->Account_model->login_user_faculty($data)) {
			$this->session->set_userdata('session', $result);
					redirect('Teacherdashboard');
				}
			
			else {
				redirect('login-faculty');
			}
		}
	}

	public function login_destroy_faculty() {
		$this->session->unset_userdata('session');
		session_destroy();
		redirect('login-faculty');
	}


}