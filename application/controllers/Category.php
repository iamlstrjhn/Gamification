<?php


class Category extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		if ($this->session->userdata('flag')) {
			$this->load->view('student/header.php');
			$this->load->view('student/category.php');
			$this->load->view('student/footer.php');
		}
		else {
			redirect('Login');
		}
		
	}


}