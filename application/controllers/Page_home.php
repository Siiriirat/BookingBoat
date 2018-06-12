<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_home extends CI_Controller {

	var $module = 'home';

	public function index()
	{
		$this->load->model('Page_homemodel');
		$data['records'] = $this->Page_homemodel->getData();
		$data['module'] = $this->module;
		$this->load->view('template/page.home.php', $data);
	}

	public function getSearchBoat()
	{
	  $category 	= $this->input->post('category');
		$type 		  = $this->input->post('type');
		$destination = $this->input->post('destinations');
		$cabins 		= $this->input->post('cabins');
		$price 			= $this->input->post('price');

    $data['result'] = $this->Page_homemodel->searchboat($category,$type);
		$data['module'] = $this->module;
		print_r($data['result']);
		$this->load->view('template/page.home.php',$data);
	}
}
