<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Master.php');

class Template extends Master
{
	protected $page;
	protected $pageTitle = 'Winnie A. Damayo';
	
	public function __construct()
	{
		parent::__construct();
	}

	public function view($page = 'home', $data = null)
	{
		$this->header();
		empty($data) ? $this->CI->load->view($page) :
		$this->CI->load->view($page, $data);
		$this->footer();
	}

	private function header()
	{
		$data = [ 'title' => $this->pageTitle ];
		$this->CI->load->view('templates/header', $data);
		$this->CI->load->view('templates/nav');
	}

	private function footer()
	{
		$this->CI->load->view('templates/footer');
	}
	
	
}