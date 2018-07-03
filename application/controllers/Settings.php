<?php


class Settings extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('student/header.php');
		$this->load->view('student/settings.php');
		$this->load->view('student/footer.php');
	}


}