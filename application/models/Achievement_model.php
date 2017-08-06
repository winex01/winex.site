<?php 

/**
* 
*/
class Achievement_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function getAchievements()
	{
		return $this->db->
				select('*')->
				from('achievements_type at')->
				join('achievements a', 'a.achi_type_id = at.achi_type_id', 'INNER')->
				order_by('a.achi_timestamps', 'desc')->
				get()->result();
	}

	public function getTypes()
	{
		return $this->db->
			select('DISTINCT at.achi_type, a.achi_type_id', false)->
			from('achievements a')->
			join('achievements_type at', 'a.achi_type_id = at.achi_type_id', 'INNER')->
			get()->result();
	}


}