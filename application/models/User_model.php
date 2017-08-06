<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}//

	public function check($username, $password)
	{
		return $this->db->
				select('*')->
				from('user')->
				where('username', $username)->
				where('password', md5($password))->
				limit(1)->
				get()->result();
	}
}