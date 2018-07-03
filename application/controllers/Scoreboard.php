<?php


class Scoreboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('student/header.php');
		$this->load->view('student/scoreboard.php');
		$this->load->view('student/footer.php');
	}


}