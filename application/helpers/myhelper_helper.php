<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function dd($arr = 'Winnie A. Damayo')
{
	echo '<pre>';
		die(print_r($arr));
	echo '</pre>';
}