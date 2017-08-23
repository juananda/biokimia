<?php

class Post extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$this->load->view('kirim_tulisan');
	}

	public function article()
	{
		$this->load->model('model_article');
		$date = date("Y-m-d");
		$title = $this->input->post('title');
		$post = $this->input->post('textbody');
		$data = array(
			'user'=> 'Juananda',
			'date'=> $date,
			'title'=> $title,
			'post'=> $post
			);
		$this->model_article->insert_data('article', $data);
		$this->load->view('post_success', $data);
	}

	public function edit_img() {
	    $this->load->helper(array('form', 'url'));
	    $config['upload_path'] = './uploads/images';
	    $config['image_library'] = 'gd2';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size'] = 1000000;
	    $config['max_width'] = 102400;
	    $config['max_height'] = 768000;
	    $this->load->library('upload', $config);
	    $token = $this->security->get_csrf_hash();
        $res = FALSE;
	    if (!$this->upload->do_upload('up_img')) {
	        $response = FALSE;
	    } else {
	        $data = $this->upload->data();
	    	$response = new StdClass;	
	        // $response->link = 'http://localhost/biokimia/uploads/images/'.$data['file_name'];
	        // $similar_text(first, second)_url = base_url();
	        $response->link = base_url().'uploads/images/'.$data['file_name'];
	    }
	    echo stripslashes(json_encode($response));
	}
}


?>
