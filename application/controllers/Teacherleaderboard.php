<?php


class Teacherleaderboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('faculty/header.php');
		$this->load->view('faculty/leaderboard.php');
		$this->load->view('faculty/footer.php');
	}


}