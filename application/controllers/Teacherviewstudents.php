<?php


class Teacherviewstudents extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Studentview_model');
	}

	public function index(){
		if ($this->session->userdata('session')) {
			$id = $this->session->userdata['session']['faculty_ID'];
			$data['load_students'] = $this->Studentview_model->get_load_students($id);
			$this->load->view('faculty/header.php');
			$this->load->view('faculty/students.php', $data);
			$this->load->view('faculty/footer.php');
		}

		else {
			redirect('login-faculty');
		}
		
	}


}