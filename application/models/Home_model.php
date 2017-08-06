<?php

/**
* 
*/
class Home_model extends CI_Model
{

	private $description;

	public function __construct()
	{
		parent::__construct();
		$this->description = $this->homePageTable()->home_description;
	}

	/*
	*@method: homePageTable
	*@description: this is my private
	*method that fetch data to the home_page table
	*/
	private function homePageTable()
	{
		$this->db->select('*');
		$this->db->from('home_page');
		$this->db->where('home_activate', 1);
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	/*
	*hers my getters
	*@method: get the descrion in home
	*/
	public function getDescription()
	{
		return $this->description;	
	}


}