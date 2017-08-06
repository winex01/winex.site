
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	protected $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_model', 'user');
		
		$this->data['title'] = 'Admin Login';
	}

	public function login()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if( $this->form_validation->run('login_form') == false ){
			$this->load->view('admin/login', $this->data);
		}else{//if field is not empty
			//check username and password
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if( $this->user->check($username, $password) ){
				//success
				redirect('admin/home');
			}else{
				$data['invalid_user'] = 'Invalid User';
				$data = array_merge($data, $this->data);
				$this->load->view('admin/login', $data);
			}
		}
	}//end index

}