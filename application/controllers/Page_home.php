<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page_home extends CI_Controller {
	var $module = 'home';
	public function index($offset=0)
	{
		$data['module'] = $this->module;
		//$this->db->like('want_to ','charter');
 		//$data_mhs = $this->db->get('phuketnews_yacht');
		$charters = $this->Yacht->get_charter($offset);
		// echo '<pre>';
		// print_r($charters);
		// exit;
// config pagination
		$config['total_rows'] = $charters['items'];
		$config['base_url'] = base_url(). 'Page_home/index';
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
			// $this->load->model('Page_homemodel');
			// $data['records'] = $this->Page_homemodel->getData();
		$data['records'] = $charters['rows'];
		$this->load->view('template/page.home.php', $data);
	}
	public function sindex($offset=0)
	{
		$data['module'] = $this->module;
		$sales = $this->Yacht->get_sale($offset);
		// config pagination
		$config['total_rows'] = $sales['items'];
		$config['base_url'] = base_url(). 'Page_home/sindex';
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['offset'] = $offset;
		$data['records'] =  $sales['rows'];
		$this->load->view('template/page.home.php', $data);
	}
	public function getSearchBoat()
	{
		$data['module'] = $this->module;
		$category 	 = $this->input->post('category');
		$type 		   = $this->input->post('type');
		$destination = $this->input->post('destinations');
		$cabins 		 = $this->input->post('cabins');
		$price 			 = $this->input->post('price');
		$data['result'] = $this->Yacht->searchboat($category,$type);
		print_r($data['result']);
		$this->load->view('template/page.home.php',$data);
	}
	public function sgetSearchnameBoat()
	{
		$data['module'] = $this->module;
		$key = $this->input->post('name');
		$data['records'] = $this->Yacht->getSearchnameBoat($key);
		$this->load->view('template/page.home.php',$data);
	}
}
