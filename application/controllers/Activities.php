<?php


class Activities extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		if ($this->session->userdata('flag')) {
			$this->load->view('student/header.php');
			$this->load->view('student/activities.php');
			$this->load->view('student/footer.php');
		}

		else {
			redirect('Login');
		}
		
	}


	public function instruction(){
		if ($this->session->userdata('flag')) {
			$this->load->view('student/header.php');
			$this->load->view('student/instruction.php');
			$this->load->view('student/footer.php');
		}

		else {
			redirect('Login');
		}
		
	}


}