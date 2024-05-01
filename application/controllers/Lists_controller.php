<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lists_controller extends CI_Controller
{
	function index()
	{
		$this->load->database();
		$this->load->model('Lists_model');
		$data['categories'] =  $this->Lists_model->getData();
		$this->load->view('lists_view',$data);
	}
	public function create()
	{
		$data = [
			'category_id' => $this->input->post('category'),
			'text' => $this->input->post('products')
		];
		$this->load->model('Lists_model');
		$this->Lists_model->insertListsData( $data);
	}
	public function delete($id)
	{
		$this->load->model('Lists_model');
		$this->Lists_model->deleteListsData($id);
	}
}