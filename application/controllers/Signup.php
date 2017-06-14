<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

	public function create()
	{
		$this->form_validation->set_rules('username','Username','required|max_length[20]|is_unique[user.username]');
		$this->form_validation->set_rules('password','Password','required|max_length[20]');
		$this->form_validation->set_rules('password2','Password Confirm','required|matches[password]');
		$this->form_validation->set_rules('email','Email','required|max_length[20]|is_unique[user.email]');

		if ($this->form_validation->run() === FALSE) {			
			$this->load->view('signup');
		}else{
			$this->signup_model->registration();
			redirect('login/log_in');
		}
	}
}
