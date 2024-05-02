<?php
class Category_controller extends CI_Controller
{
	public function createCategory()
	{
		$data = [
			'category' => $this->input->post('category-input')
		];
		$this->load->model('Category_model');
		$this->Category_model->createCategory($data);
		redirect('lists');
	}
}