<?php 

/**
* 
*/
class Skill_model extends CI_Model
{
	
	public function __construct()
	{
		parent:: __construct();
	}

	public function getTypes()
	{
		return $this->db->
				select('DISTINCT s.skills_type_id, st.skills_type', false)->
				from('skills s')->
				join('skills_type st', 's.skills_type_id = st.skills_type_id', 'INNER')->
				order_by('s.skills_type_id', 'asc')->
				get()->result();
	}

	public function getSkills()
	{
		return $this->db->
				select('*')->
				from('skills_type st')->
				join('skills s', 's.skills_type_id = st.skills_type_id', 'INNER')->
				order_by('s.skills_percent', 'desc')->
				get()->result();
	}

}