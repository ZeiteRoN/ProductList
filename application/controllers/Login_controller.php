<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('login_view');
	}
}