<?php

/**
* 
*/
class About_model extends CI_Model
{
	private $description;

	public function __construct()
	{
		parent::__construct();
		$this->description = $this->aboutPageTable()->about_description;
	}

	/*
	*@method: aboutPageTable
	*@description: fetch data in about_page table
	*/
	private function aboutPageTable()
	{
		$this->db->select('*');
		$this->db->from('about_page');
		$this->db->where('about_activate', 1);
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	/*
	*@info: below is my getters
	*/
	public function getDescription()
	{
		return $this->description;
	}

}