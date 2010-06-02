<?php
class Login extends Controller{

	function index(){
		$data['main_menu'] = 'vide';
		$data['right_menu'] = 'vide';
		$data['main_header'] = 'includes/navigation_login';
		$data['main_content'] = 'login/login_form';
		$this->load->view('includes/template', $data);
	}
	
	function validate_credentials(){
		$this->load->model('users_model');
		$query = $this->users_model->validate();
		if ($query) // if the user's credentials validated ...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('index.php/forum/forum/forums');
		}
		else {
			$this->index();
		}
		
	}
	
	function signup(){
		$data['main_content'] = 'login/signup_form';
		$this->load->view('includes/template', $data);
	}
	
	function create_member(){
		$this->load->library('form_validation');
		
		//$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		//$this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_lenght[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[4]|max_lenght[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			//$this->load->view('signup_form');
			$data['main_content'] = 'signup_form';
			$this->load->view('includes/template', $data);
		}
		else {
			$this->load->model('users_model');
			if ($query = $this->users_model->createUser())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else {
				$this->load->view('signup_form');
			}
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
?>