<?php

class Welcome extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$data['activePage'] = 'Inicio';
		$this->load->view('header',$data);
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}


}
