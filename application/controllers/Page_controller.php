<?php
class Page_controller extends CI_Controller
{
	public function getIndexView()
	{
		$this->load->view('index');
	}
	public function getHomeView()
	{
		$this->load->view('home_view');
	}
	public function getListsView()
	{
		$this->load->database();
		$this->load->model('Lists_model');
		$data['categories'] =  $this->Lists_model->getCategoriesData();
		$data['lists']  = $this->Lists_model->getListsData();
		$this->load->view('lists_view',$data);
	}
	public function getContactView()
	{
		$this->load->view('contact_view');
	}
	public function getLoginView()
	{
		$this->load->view('login_view');
	}
}