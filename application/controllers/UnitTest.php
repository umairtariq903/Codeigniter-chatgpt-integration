<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTest extends CI_Controller {

	 public function __construct()
    {
            parent::__construct();
            $this->load->library("unit_test");
            $this->load->model('chatgpt');
    }

	private function chatTest($testQuestion)
	{
		$botReply = $this->chatgpt->chatApi($testQuestion);
		return $botReply;	
	}

	public function index()
	{
		$test = $this->chatTest('Hi, How are you?');
		$expectedResult = "is_string";
		$testName = "Chatgpt Api test";
		echo $this->unit->run($test,$expectedResult,$testName);
	}

	
}
