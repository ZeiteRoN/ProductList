<?php

class Lists_model extends \CI_Model
{
	public function getListsData()
	{
		return $this->db->get('lists')->result();
	}
	public function insertListsData($data)
	{
		$this->db->insert('lists', $data);
	}
	public function deleteListsData($id)
	{
		$this->db->delete('lists', ['id' => $id]);
	}
}