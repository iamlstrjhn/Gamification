<?php


class Teacherquiz extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Quiz_model');
	}

	public function index(){
		if ($this->session->userdata('session')) {
			$this->load->view('faculty/header.php');
			$this->load->view('faculty/quizgames/quizgame-category.php');
			$this->load->view('faculty/footer.php');
			}
		else {
			redirect('login-faculty');
		}
		
	}


	public function update_quiz_1(){
		if ($this->session->userdata('session')) {
			$id = $this->session->userdata['session']['faculty_ID'];
			$data['quiz'] = $this->Quiz_model->get_quiz($id);
			$this->load->view('faculty/header.php');
			$this->load->view('faculty/quizgames/level1.php', $data);
			$this->load->view('faculty/footer.php');
		}

		else {
			redirect('login-faculty');
		}
		
	}

	public function add_quiz_1(){
				$this->form_validation->set_rules('question', 'question', 'required');
				$this->form_validation->set_rules('choice1', 'choiceA', 'required');
				$this->form_validation->set_rules('choice2', 'choiceB', 'required');
				$this->form_validation->set_rules('choice3', 'choiceC', 'required');
				$this->form_validation->set_rules('choice4', 'choiceD', 'required');
				$this->form_validation->set_rules('answer', 'answer', 'required');

				if($this->form_validation->run() ===FALSE)
				{
					$this->load->model('Quiz_model');
					$data['quiz'] = $this->Quiz_model->get_quiz();
					redirect('Teacherquiz/update_quiz_1', $data);
				}

				else
				{
					
					$data = array(
						'question'=>$this->input->post('question'),
						'choiceA'=>$this->input->post('choice1'),
						'choiceB'=>$this->input->post('choice2'),
						'choiceC'=>$this->input->post('choice3'),
						'choiceD'=>$this->input->post('choice4'),
						'answer'=>$this->input->post('answer'),

						'quiz1Uploader'=>$this->session->userdata['session']['faculty_ID']
					);


					$this->Quiz_model->insert_question($data);
					redirect('Teacherquiz/update_quiz_1');
				}
		}


		public function edit_quiz_1(){
				$this->form_validation->set_rules('question', 'question', 'required');
				$this->form_validation->set_rules('choice1', 'choiceA', 'required');
				$this->form_validation->set_rules('choice2', 'choiceB', 'required');
				$this->form_validation->set_rules('choice3', 'choiceC', 'required');
				$this->form_validation->set_rules('choice4', 'choiceD', 'required');

				if($this->form_validation->run() ===FALSE)
				{
					$this->load->model('Quiz_model');
					$data['quiz'] = $this->Quiz_model->get_quiz();
					redirect('Teacherquiz/update_quiz_1', $data);
				}

				else
				{
					
					$data = array(
						'question'=>$this->input->post('question'),
						'choiceA'=>$this->input->post('choice1'),
						'choiceB'=>$this->input->post('choice2'),
						'choiceC'=>$this->input->post('choice3'),
						'choiceD'=>$this->input->post('choice4'),
					);


					$this->Quiz_model->edit_question($id,$data);
					redirect('Teacherquiz/update_quiz_1');
				}
		}



}