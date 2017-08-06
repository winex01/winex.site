<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@this is my configuration
*of the form contact me
*/

 $config['contact_me'] = array(
					[
						'field' => 'name',
						'label' => 'Name',
						'rules' => 'required|min_length[2]'
					],
					[
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'required|valid_email'	
					],
					[
						'field' => 'message',
						'label' => 'Message',
						'rules' => 'required|min_length[10]'	
					]
);

 $config['login_form'] = array(
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'	
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'	
			]
 );

