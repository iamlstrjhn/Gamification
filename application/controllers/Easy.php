<?php


class Easy extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Quiz_model');
	}

	public function index(){
		if ($this->session->userdata('flag')) {
			$id = $this->session->userdata['flag']['student_ID'];
			$data['quiz'] = $this->Quiz_model->get_quiz_prof($id);
			$this->load->view('student/header.php');
			$this->load->view('student/quiz/easy.php',$data);
			$this->load->view('student/footer.php');
		}

		else {
			redirect('Login');
		}
		
	}

	public function level_two(){
		$this->load->view('student/header.php');
		$this->load->view('student/quiz/level2.php');
		$this->load->view('student/footer.php');
	}

	public function level_three(){
		$this->load->view('student/header.php');
		$this->load->view('student/quiz/level3.php');
		$this->load->view('student/footer.php');
	}

	public function level_four(){
		$this->load->view('student/header.php');
		$this->load->view('student/quiz/level4.php');
		$this->load->view('student/footer.php');
	}



	public function get_result(){

		$data['checks'] = array(
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
			 'ques11' => $this->input->post('quizid11'),
			 'ques12' => $this->input->post('quizid12'),
			 'ques13' => $this->input->post('quizid13'),
		);

        $id = $this->session->userdata['flag']['student_ID'];
		$data['quiz'] = $this->Quiz_model->getQuestions($id);
		$this->load->view('student/header.php');
		$this->load->view('student/leaderboard.php',$data);
		$this->load->view('student/footer.php');
	}

}