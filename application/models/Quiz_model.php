<?php  

class Quiz_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_quiz($id){
		return $this->db
		->where('quiz1Uploader', $id)
		->join('table_faculty','quiz1Uploader=faculty_ID','left')
		->get('table_quiz_level_1')->result_array();
	}

	public function get_quiz_prof($id){
		return $this->db
		->where('student_ID', $id)
		->join('table_faculty_load', 'table_student_load.facultyload_ID=table_faculty_load.facultyload_ID')
		->join('table_faculty', 'table_faculty_load.faculty_ID=table_faculty.faculty_ID')
		->join('table_quiz_level_1', 'table_faculty.faculty_ID=table_quiz_level_1.quiz1Uploader')	
		->get('table_student_load')->result_array();

	}

	public function insert_question($data){
		$this->db->insert('table_quiz_level_1', $data);

	}

	public function edit_question($id,$data){
		$id = array('quizlevel1_ID'=> $this->input->post('id'));
		$this->db->where($id)->update('table_quiz_level_1',$data);
    	return true;
	}

	public function getQuestions()
	{
		$this->db->select("quizlevel1_ID, question, choiceA, choiceB, choiceC, choiceD");
		$this->db->from("table_quiz_level_1");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}


}