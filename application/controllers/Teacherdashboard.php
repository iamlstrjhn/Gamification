<?php


class Teacherdashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		if ($this->session->userdata('session')) {
			$this->load->view('faculty/header.php');
			$this->load->view('faculty/body.php');
			$this->load->view('faculty/footer.php');
		}

		else {
			redirect('login-faculty');
		}
		
	}


}