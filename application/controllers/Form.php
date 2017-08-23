<?php

Class Form extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$config = array(
					array(
						'field' => 'name',
						'label' => 'Name',
						'rules' => 'required|is_unique[user.Username]'
					),
					array(
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'required|valid_email',
						'errors' => array(
										'required' => 'You must provide a %s.'
									)
					)
				  );

		// $this->form_validation->set_rules('name', 'Name', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required', array('required'=>'You must provide a %s.'));
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('validation_form');
		}
		else {
			$this->load->view('validation_success');
		}
	}

}


?>