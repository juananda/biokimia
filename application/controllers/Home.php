<?php

Class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index(){
		$this->load->helper('url');
		$this->load->view('index');
	}

	public function article(){
		$this->load->library('image_lib');
		$this->load->helper('url');
		$this->load->view('article');
	}

	public function menu(){
		$this->load->helper('url');
		$this->load->view('home');
	}
}

?>