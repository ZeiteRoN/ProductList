<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lists_controller extends CI_Controller
{
	function index()
	{

		$this->load->model('Lists_model');
		$data['lists'] =  $this->Lists_model->getListsData();

		$this->load->model('Category_model');
		$data['categories'] =  $this->Category_model->getCategoriesData();

		$this->load->view('lists_view',$data);
	}
	public function filter()
	{
		$this->load->database();
		$category_id = $this->input->post('filter');

		$this->load->model('Lists_model');
		$data['lists'] =  $this->Lists_model->getFilteredData($category_id);

		$this->load->model('Category_model');
		$data['categories'] =  $this->Category_model->getCategoriesData();


		$this->load->view('lists_view', $data);
	}
	public function filterByStatus()
	{
		$this->load->database();
		$category_id = $this->input->post('statusFilter');

		$this->load->model('Lists_model');
		$data['lists'] =  $this->Lists_model->getStatusFilter($category_id);

		$this->load->model('Category_model');
		$data['categories'] =  $this->Category_model->getCategoriesData();


		$this->load->view('lists_view', $data);
	}
	public function create()
	{
		$data = [
			'category_id' => $this->input->post('category'),
			'text' => $this->input->post('products'),
			'status' => 0
		];
		$this->load->model('Lists_model');
		$this->Lists_model->insertListsData($data);
		redirect('lists');
	}
	public function delete($id)
	{
		$this->load->model('Lists_model');
		$this->Lists_model->deleteListsData($id);
		redirect('lists');
	}
	public function setStatus($id)
	{
		$data = [
			'category_id' => $this->input->post('category'),
			'text' => $this->input->post('text'),
			'status' => 1
		];

		$this->load->model('Lists_model');
		$this->Lists_model->setStatus($id, $data);
		redirect('lists');
	}
}