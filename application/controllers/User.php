<?php

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		// $this->load->library('email','table');

	} 

	public function index()
	{
		$this->load->model('model_name');
		
		// $this->db->get("user");
		// $data['records'] = $query->result();

		$data['records'] = $this->model_name->get_all_data("user");

		$this->load->helper('url');
		$this->load->view('user_view', $data);
	}

	public function add_user_view()
	{
		$this->load->helper('form');
		$this->load->view('test');
	}

	public function add_user()
	{
		$this->load->model('model_name');
		$data = array(
			'username' => $this->input->post('username')
		);
		$this->model_name->insert_data('user', $data);

		redirect('/user');
	}


	public function edit_user_view()
	{
		$this->load->model('model_name');
		$this->load->helper('form');

		$id = $this->uri->segment('3');
		$data['records'] = $this->model_name->get_data_user($id);
		$this->load->view('User_edit', $data);
	}

	public function edit_user()
	{
		$this->load->model('model_name');
		$data = array(
			'id' => $this->input->post('id'),
			'username' => $this->input->post('username')
		);
		$this->model_name->update_data_user($data);

		redirect('/user');
	}

	Public function delete_user()
	{
		$this->load->model('model_name');
		$id = $this->uri->segment('3');
		$this->model_name->delete_user($id);
		
		redirect('/user');
	}


}

?>