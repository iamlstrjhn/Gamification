<?php


class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Account_model');
	}

	public function index(){
		$this->load->view('student/register.php');
	}

	public function register_faculty(){
		$this->load->view('faculty/register.php');
	}

	public function register_student() {
			
					$this->form_validation->set_rules('firstname', 'firstName', 'trim|required');
					$this->form_validation->set_rules('lastname', 'lastName', 'trim|required');
					$this->form_validation->set_rules('username', 'username', 'trim|required');
					$this->form_validation->set_rules('idnumber', 'idNumber', 'trim|required');
					$this->form_validation->set_rules('password', 'password', 'trim|required');
					$this->form_validation->set_rules('re-password', 'Confirm Password', 'required|matches[password]');
					
					if ($this->form_validation->run() === FALSE) 
					{
						$this->load->view('student/register.php');
					}

				else 
				{
					
					$this->Account_model->register_user_student();
					redirect('Login');
				}
	
	}

	public function register_faculty_account() {
			
					$this->form_validation->set_rules('firstname', 'firstName', 'trim|required');
					$this->form_validation->set_rules('lastname', 'lastName', 'trim|required');
					$this->form_validation->set_rules('username', 'username', 'trim|required');
					$this->form_validation->set_rules('idnumber', 'idNumber', 'trim|required');
					$this->form_validation->set_rules('password', 'password', 'trim|required');
					$this->form_validation->set_rules('re-password', 'Confirm Password', 'required|matches[password]');
					
					if ($this->form_validation->run() === FALSE) 
					{
						redirect('Register/register_faculty');
					}

				else 
				{
					
					$this->Account_model->register_user_faculty();
					redirect('Login/login_faculty');
				}
	
	}




}