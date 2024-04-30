<?php

class Lists_model extends \CI_Model
{
	public function getCategoriesData()
	{
		return $this->db->get('categories')->result();
	}
	public function getListsData()
	{
		return $this->db->get('lists')->result();
	}
}