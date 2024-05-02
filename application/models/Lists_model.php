<?php

class Lists_model extends \CI_Model
{
	public function getListsData()
	{
		return $this->db->get('lists')->result();
	}
	public function getFilteredData($category_id)
	{
		return $this->db->get_where('lists', array('category_id' => $category_id))->result();
	}
	public function getStatusFilter($status)
	{
		return $this->db->get_where('lists', array('status' => $status))->result();
	}
	public function insertListsData($data)
	{
		$this->db->insert('lists', $data);
	}
	public function deleteListsData($id)
	{
		$this->db->delete('lists', ['id' => $id]);
	}
	public function setStatus($id, $data)
	{
		$this->db->update('lists', $data, ['id' => $id]);
	}
}