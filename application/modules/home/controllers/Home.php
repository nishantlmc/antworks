<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/collapse-nav');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
	
}
