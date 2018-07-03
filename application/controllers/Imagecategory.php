<?php


class Imagecategory extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('student/header.php');
		$this->load->view('student/imagecategory/image-category.php');
		$this->load->view('student/footer.php');
	}


	public function image_level1(){
		$this->load->view('student/header.php');
		$this->load->view('student/imagecategory/imagelevel1.php');
		$this->load->view('student/footer.php');
	}

	public function image_level2(){
		$this->load->view('student/header.php');
		$this->load->view('student/imagecategory/imagelevel2.php');
		$this->load->view('student/footer.php');
	}

	public function image_level3(){
		$this->load->view('student/header.php');
		$this->load->view('student/imagecategory/imagelevel3.php');
		$this->load->view('student/footer.php');
	}

	public function image_level4(){
		$this->load->view('student/header.php');
		$this->load->view('student/imagecategory/imagelevel4.php');
		$this->load->view('student/footer.php');
	}


}