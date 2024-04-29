<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('add_form');
	}
}