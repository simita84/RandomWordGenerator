<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{ 
		if($this->session->userdata("counter"))
		{
			$this->session->set_userdata("counter",
				 $this->session->userdata("counter")+1);
		}
		else
		{
			$this->session->set_userdata("counter",1);
		}
		$view_data=array();
		$counter=$this->session->userdata("counter");
		$word=$this->get_random_word();	 
		$view_data=array('word'    => $word,
		                 'counter' => $counter);
		$this->load->view("random/random",$view_data);
	}

	private function get_random_word()
	{
		$word="";
		 for ($count=0; $count < 14; $count++) { 
		 	  $word.=chr(rand(97,122));
		 }
		return $word;
	}
}

//end of main controller