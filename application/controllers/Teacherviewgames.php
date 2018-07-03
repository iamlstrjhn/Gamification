<?php


class Teacherviewgames extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('faculty/header.php');
		$this->load->view('faculty/category.php');
		$this->load->view('faculty/footer.php');
	}


}