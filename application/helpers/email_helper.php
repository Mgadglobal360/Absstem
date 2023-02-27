<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function send_email($to = '', $subject  = '', $body = '', $attachment = '', $cc = '')
    {
    	$controller =& get_instance();
       	$controller->load->helper('path'); 
       	$from = 'ganesh.gaur@adglobal360.com';
       	// Configure email library
		$config = array();
        $config['useragent']            = "CodeIgniter";
        $config['mailpath']             = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']             = "smtp";
        $config['smtp_host']            = "ssl://smtp.googlemail.com";
        $config['smtp_port']            = 465;
		$config['smtp_timeout'] 		= '30';
		$config['smtp_user']    		= "manish.gupta@adglobal360.com";
		$config['smtp_pass']    		= "ncjgfghlnygkljay";
        $config['mailtype'] 			= 'html';
        $config['charset']  			= 'iso-8859-1';
        $config['newline']  			= "\r\n";
        $config['wordwrap'] 			= TRUE;
		$config['_smtp_auth'] 			= TRUE;
		//$config['smtp_crypto'] 			= 'ssl';
        $controller->load->library('email');
        $controller->email->initialize($config);   
		$controller->email->from( $from , $from );
		$controller->email->to($to);
		$controller->email->subject($subject);
		$controller->email->message($body);
		if($cc != '') 
		{	
			$controller->email->cc($cc);
		}	
		if($attachment != '')
		{
			$controller->email->attach(base_url()."your_file_path/" .$attachment);
		}
		if($controller->email->send()){
			return "success";
		}
		else
		{
			echo $controller->email->print_debugger();
		}
		
    }
?>