<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_home extends CI_Controller {

	var $module = 'home';

	public function index()
	{
		$data['module'] = $this->module;
		$data['show'] = $this->Page_homemodel->getData();
		$this->load->view('template/page.home.php', $data);
	}


}
