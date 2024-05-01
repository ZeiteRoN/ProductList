<?php
class Category_model extends CI_Model
{
	public function getCategoriesData()
	{
		return $this->db->get('categories')->result();
	}
	public function createCategory($data)
	{
		$this->db->insert('categories', $data);
	}
}