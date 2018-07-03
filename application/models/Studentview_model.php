<?php 


class Studentview_model extends CI_model
{
	
	function __construct()
	{
		$this->load->database();
	}


	public function get_load_students($id){

		return	$this->db->where('facultyload_ID', $id)
						->join('table_student', 'table_student_load.student_ID=table_student.student_ID')
						->get('table_student_load')->result_array();
	}



}























 ?>