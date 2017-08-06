<?php 

/**
* 
*/
class Owner_model extends CI_Model				
{
	private $name;
	private $occupation;

	public function __construct()
	{
		parent::__construct();
		$this->name = $this->ownerInfoTable()->owner_name;
		$this->occupation = $this->ownerInfoTable()->owner_occupation; 
	}

	/*
	*@method: ownerInfoTable
	*@description: this is my private method 
	*to fetch data in the owner_info table
	*/
	private function ownerInfoTable()
	{
		$this->db->select('*');
		$this->db->from('owner_info');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	/*
	*getters
	*/
	public function getName()
	{
		return $this->name;
	}

	public function getOccupation()
	{
		return $this->occupation;
	}
}