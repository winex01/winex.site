<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Contact_me extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
	}

	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if( $this->form_validation->run('contact_me') == false ){
			$this->template->view('contact');
		}else{//send email here
			// echo 'success';
			$name = $this->input->post('name');
			$from = $this->input->post('email');
			$message = $this->input->post('message');
			$to = 'winnie131212592@gmail.com';//my valid gmail
			/*
			*send email
			*/	
			$this->email->set_newline("\r\n");//if remove error

			$this->email->from($from,$name);
			$this->email->to($to);
			$this->email->subject('From winex.site');
			$this->email->message($message);

			if($this->email->send()){
				// echo 'email is send.';
				$this->template->view('templates/success');
			}else{
				show_error($this->email->print_debugger());
			}//end $this->email->send()
		}//end else - sending email
	}

	
}