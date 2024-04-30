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
}