<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		if(!isset($this->session->userdata['name']))
		{
			
			($this->session ->set_userdata('name')) == ($this->input->post('name'));
			 $this->load->view('result');

		}
	
	}

}

//end of main controller