<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pages extends CI_Controller
{
	protected $ownerInfo;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner_model', 'owner');
		$this->ownerInfo = [
			'name' => $this->owner->getName(),
			'occupation' => $this->owner->getOccupation()
		];
	}
	
	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->model('home_model', 'home');
		$data = [
			'description' => $this->home->getDescription()
		];
		$data = array_merge($this->ownerInfo, $data );
		$this->template->view('home', $data);
	}

	public function about()
	{
		$this->load->model('about_model', 'about');
		$this->load->model('achievement_model', 'achievement');
		$this->load->model('skill_model', 'skill');
		$data = [ 
			'description' => $this->about->getDescription(),
		 	'achievements' => $this->achievement->getAchievements(),
		 	'achievementTypes' => $this->achievement->getTypes(),
		 	'skillTypes' => $this->skill->getTypes(),
		 	'skills' => $this->skill->getSkills()
		 ];
		$data = array_merge($this->ownerInfo, $data);
		$this->template->view('about', $data);
	}
	public function portfolio()
	{
		$this->template->view('portfolio');
	}

	public function contact()
	{
		$this->template->view('contact');
	}

	public function blog()
	{
		$this->template->view('blog');
	}
	//end of pages method

	public function test()
	{
		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from('winnie131212592@gmail.com','winnie admin');
		$this->email->to('winnie131212592@gmail.com');
		$this->email->subject('test now');
		$this->email->message('my test!');

		if($this->email->send()){
			echo 'email is send.';
		}else{
			show_error($this->email->print_debugger());
		}

	}

	public function loginPage()
	{
		$data = [
			'title' => 'Admin Login'
		];
		$this->load->view('admin/login', $data);
	}//

}//end of class
