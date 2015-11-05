<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Note');
	}

	public function index()
	{
		$data['notes'] = $this->Note->get_notes();
		$this->load->view('index',$data);
	}

	public function create()
	{
		$this->Note->create($this->input->post());
		$data['notes'] = $this->Note->get_notes();
		$this->load->view('partial', $data);
	}

	public function update()
	{
		$this->Note->update($this->input->post());
		$data['notes'] = $this->Note->get_notes();
		$this->load->view('partial', $data);
	}

	public function destroy()
	{
		$this->Note->destroy($this->input->post());
		$data['notes'] =$this->Note->get_notes();
		$this->load->view('partial', $data);
	}

}


