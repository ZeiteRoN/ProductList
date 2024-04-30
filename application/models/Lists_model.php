<?php

class Lists_model extends \CI_Model
{
	public function getData()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}
}