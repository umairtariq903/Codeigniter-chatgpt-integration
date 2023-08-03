<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('chatgpt');
        $this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function chat()
	{
		$userQuery = $this->input->post('user_query');
		$botReply = $this->chatgpt->chatApi($userQuery);
		$data['botReply'] = $botReply;
		$this->load->view('bot_reply', $data);	
	}
}
