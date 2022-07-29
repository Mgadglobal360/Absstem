<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form','common_helper'));
        $this->load->database();
		$this->load->model('pages', 'pages_model');
	}

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
		$data['country'] = get_country_list();
		
		$this->load->view('frontend/contact',$data);
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

	public function enquiry()
	{

		if($this->input->post('submit')){ 
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Contact No.', 'trim|numeric|required');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        	$this->form_validation->set_message('required', 'Enter %s');
			if ($this->form_validation->run() == FALSE) {

					$this->load->view('frontend/home');
			}else{
				$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'created_at' => date('Y-m-d H:i:s')
				);
				$data = $this->security->xss_clean($data);
				$results = $this->pages_model->add_enquiry($data);
				$this->session->set_flashdata('success','Enquiry has been added successfully');
				redirect(base_url('/'), 'refresh');
			}
		}
	}

	public function addcontact()
	{

		if($this->input->post('submit')){ 
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Contact No.', 'trim|numeric|required');
			$this->form_validation->set_rules('country', 'Country', 'trim|required');
			$this->form_validation->set_rules('intersted_in', 'Intersted In', 'trim|required');
			$this->form_validation->set_rules('message', 'How can we Help you?', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        	$this->form_validation->set_message('required', 'Enter %s');
			if ($this->form_validation->run() == FALSE) {

					$this->load->view('frontend/home');
			}else{
				$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'company_name' => $this->input->post('company_name'),
				'mobile' => $this->input->post('mobile'),
				'country_id' => $this->input->post('country'),
				'intersted_in' => $this->input->post('intersted_in'),
				'message' => $this->input->post('message'),
				'created_at' => date('Y-m-d H:i:s')
				);
				$data = $this->security->xss_clean($data);
				$results = $this->pages_model->add_contact($data);
				$this->session->set_flashdata('success','Contact has been added successfully');
				redirect(base_url('contact'), 'refresh');
			}
		}
	}
}
