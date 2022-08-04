<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form','common_helper'));
        $this->load->database();
		$this->load->model('pages', 'pages_model');
	}

	public function sendreport()
	{
		$enquiry = $this->pages_model->allenquery();
		$contact = $this->pages_model->allcontact();

		//Send enquiry file start
		$filename = $_SERVER['DOCUMENT_ROOT']."/Absstem/assets/enquery.csv";
		$f = fopen($filename, 'a');
		fputcsv($f, ['Name','Email','Contact','Date']);
		foreach ($enquiry as $row) {

			fputcsv($f, [$row->name,$row->email,$row->mobile,$row->created_at]);
			$this->pages_model->update_enquiry(['is_send'=>1],$row->id);
		}

		fclose($f);
		//Send enquiry file end

		//Send contact file start
		$filename_cont = $_SERVER['DOCUMENT_ROOT']."/Absstem/assets/contact.csv";
		$f_w = fopen($filename_cont, 'a');
		fputcsv($f_w, ['Name','Email','Company Name','Contact','Country','Intrested In','Message','Date']);
		foreach ($contact as $row) {

			if($row->intersted_in==1)
			{
				$intrestedin = "MedO - Medical Oxygen Generator";
			}else if($row->intersted_in==2)
			{
				$intrestedin = "Idos - Industrial Oxygen Generator";
			}else if($row->intersted_in==3)
			{
				$intrestedin = "Ngen - Industrial Nitrogen Generator";
			}else if($row->intersted_in==4)
			{
				$intrestedin = "Spares";
			}else if($row->intersted_in==5)
			{
				$intrestedin = "Others";
			}

			fputcsv($f_w, [$row->name,$row->email,$row->company_name,$row->mobile,$row->country_name,$intrestedin,$row->created_at]);
			$this->pages_model->update_contact(['is_send'=>1],$row->id);
		}

		fclose($f_w);

		$this->load->helper('email_helper');
		$messageU = "Record file of Enquiry and Contact."; 
		
		
		send_email('manish.gupta@adglobal360.com',"Enquery File",$messageU,$filename,$filename_cont);

		//unlink($filename_cont);
		fopen($filename_cont, "w");
		//unlink($filename);
		fopen($filename, "w");
		//Send contact file end

		echo "mail send successfully";
		die;
		
	}
}
