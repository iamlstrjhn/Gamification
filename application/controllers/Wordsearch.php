<?php


class Wordsearch extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		if ($this->session->userdata('flag')) {
			$this->load->view('student/header.php');
			$this->load->view('student/wordsearch/wordsearch-category.php');
			$this->load->view('student/footer.php');
		}
		else {
			redirect('Login');
		}
		
	}

	public function word_search_level_1(){
		if ($this->session->userdata('flag')) {
			$this->load->view('student/wordsearch/level1.php');
		}
		else {
			redirect('Login');
		}
		
	}


}