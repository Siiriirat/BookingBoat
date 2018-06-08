<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_home extends CI_Controller {

	var $module = 'home';

	public function index()
	{
		$data['module'] = $this->module;
		$this->load->view('template/page.home.php', $data);
	}
}
