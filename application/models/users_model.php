<?php

class Users_model extends Model {

    public function __construct() {
        parent::__construct();
    }
	
	function validate(){
		$this->db->where('User_Name', $this->input->post('username'));
		$this->db->where('User_Pwd', md5($this->input->post('password')));
		$q = $this->db->get('users');
		if ($q->num_rows() == 1){
			return true;
		}
	}
	
	function createUser() {
		/*
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		*/
		$new_member_insert_data = array(
			'User_Mail_address' => $this->input->post('email_address'),
			'User_Name' => $this->input->post('username'),
			'User_Pwd' => md5($this->input->post('password'))
		);
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
    
}
?>