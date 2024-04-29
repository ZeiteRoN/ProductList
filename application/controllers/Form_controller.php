<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('add_form');
	}
}