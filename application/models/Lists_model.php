<?php

class Lists_model extends \CI_Model
{
	public function getListsData()
	{
		$categories = $this->db->get('categories')->result();
		$lists = $this->db->get('lists')->result();

		foreach ($lists as $list) {
			foreach ($categories as $category) {
				if($list->category_id === $category->id) {
					$list->category_title = $category->category;
				}
			}
		}
		return $lists;
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