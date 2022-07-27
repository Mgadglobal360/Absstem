<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function view()
	{
		$this->load->view('frontend/home');
	}

	public function aboutus()
	{
		$this->load->view('frontend/about-us');
	}
	public function contact()
	{
		$this->load->view('frontend/contact');
	}
	public function products()
	{
		$this->load->view('frontend/product');
	}
	public function partners()
	{
		$this->load->view('frontend/partners');
	}
	public function support()
	{
		$this->load->view('frontend/support');
	}
}
