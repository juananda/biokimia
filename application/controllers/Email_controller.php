<?php

class Email_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('email_form');
	}

	public function send_email()
	{
		$this->load->library('email');
		$email_from = 'pakde@example.com';
		$email_to = $this->input->post('email');

		$this->email->from($email_from , 'Mighty Teng');
		$this->email->to($email_to);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class');

		if ($this->email->send()) {
			$this->session->set_flashdata("email_sent", "Email sent successfully");
		}
		else {
			$this->session->set_flashdata("email_sent", "Error in sending Email.");
			$this->email->print_debugger(array('headers'));
		}
		$this->load->view('email_form');

	}

}

?>