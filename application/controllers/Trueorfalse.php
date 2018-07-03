<?php


class Trueorfalse extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('student/header.php');
		$this->load->view('student/true-false/true-false-category.php');
		$this->load->view('student/footer.php');
	}

	public function level1(){
		$this->load->view('student/header.php');
		$this->load->view('student/true-false/level1.php');
		$this->load->view('student/footer.php');
	}

	public function level2(){
		$this->load->view('student/header.php');
		$this->load->view('student/true-false/level2.php');
		$this->load->view('student/footer.php');
	}

	public function level3(){
		$this->load->view('student/header.php');
		$this->load->view('student/true-false/level3.php');
		$this->load->view('student/footer.php');
	}

	public function level4(){
		$this->load->view('student/header.php');
		$this->load->view('student/true-false/level4.php');
		$this->load->view('student/footer.php');
	}

}