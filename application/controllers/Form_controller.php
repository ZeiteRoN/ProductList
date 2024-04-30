<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('add_popup');
	}
	public function fetchData()
	{
		$data = [
			'category_id' => $this->input->post('category'),
			'products' => $this->input->post('products'),
		];
		var_dump($data);
	}
}