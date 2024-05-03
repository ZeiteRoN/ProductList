<?php

class Lists_model extends \CI_Model
{
	public function getListsData()
	{
		$lists = $this->db->get('lists')->result();

		foreach ($lists as $list) {
			$list->category_title = $this->getCategoryTitleByCategoryId($list->category_id);
		}
		return $lists;
	}
	public function getFilteredData($category_id)
	{
		$lists = $this->db->get_where('lists', array('category_id' => $category_id))->result();

		foreach ($lists as $list) {
			$list->category_title = $this->getCategoryTitleByCategoryId($list->category_id);
		}

		return $lists;
	}
	public function getStatusFilter($status)
	{
		$lists = $this->db->get_where('lists', array('status' => $status))->result();

		foreach ($lists as $list) {
			$list->category_title = $this->getCategoryTitleByCategoryId($list->category_id);
		}

		return $lists;
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
	public function getCategoryTitleByCategoryId($id)
	{
		$categories = $this->db->get('categories')->result();

		foreach ($categories as $category) {
			if($id === $category->id) {
				return $category->category;
			}
		}
		return '---';
	}
}