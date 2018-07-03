<?php  

class Account_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function register_user_student() {
		$this->load->database();
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$this->db->insert('table_user',$data);
		$x = $this->db->insert_id();

		$data = array(
			'firstName' => $this->input->post('firstname'),
			'lastName' => $this->input->post('lastname'),
			'idNumber' => $this->input->post('idnumber'),
			'studentUser'=>$x
		);
			return $this->db->insert('table_student', $data);
	}

		public function login_user_student($data) {
		$this->load->database();
		$result = $this->db->where($data)
				 ->join('table_student','user_ID=studentUser')
				 ->get('table_user');
		 if ($result->num_rows()==1) {

		 	$result = $result->result_array();
		 	return $result[0];
		 } else {
		 	return false;
		 }
	}

	public function register_user_faculty() {
		$this->load->database();
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$this->db->insert('table_user',$data);
		$x = $this->db->insert_id();

		$data = array(
			'firstName' => $this->input->post('firstname'),
			'lastName' => $this->input->post('lastname'),
			'idNumber' => $this->input->post('idnumber'),
			'facultyUser'=>$x
		);
			return $this->db->insert('table_faculty', $data);
	}

	public function login_user_faculty($data) {
		$this->load->database();
		$result = $this->db->where($data)
				 ->join('table_faculty','user_ID=facultyUser')
				 ->get('table_user');
		 if ($result->num_rows()==1) {

		 	$result = $result->result_array();
		 	return $result[0];
		 } else {
		 	return false;
		 }
	}
	


}