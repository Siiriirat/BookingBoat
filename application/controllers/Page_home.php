<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_home extends CI_Controller {

	var $module = 'home';

	public function index($offset=0)
	{
		$this->db->like('want_to ','charter');
 		$data_mhs = $this->db->get('phuketnews_yacht');
			// config pagination
		$config['total_rows'] = $data_mhs->num_rows();
		$config['base_url'] = base_url(). 'index.php/Page_home/index';
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['halaman'] = $this->pagination->create_links();
		$data['offset'] = $offset;
		$data['records'] = $this->Page_homemodel->getData($config['per_page'],$offset);
			// $this->load->model('Page_homemodel');
			// $data['records'] = $this->Page_homemodel->getData();
		$data['module'] = $this->module;
		$this->load->view('template/page.home.php', $data);
	}
	
	public function sindex($offset=0)
	{
		$this->db->like('want_to ','sale');
		$data_mhs = $this->db->get('phuketnews_yacht');
		// config pagination
		$config['total_rows'] = $data_mhs->num_rows();
		$config['base_url'] = base_url(). 'index.php/Page_home/sindex';
		$config['per_page'] = 10;
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['offset'] = $offset;
		$data['records'] = $this->Page_homemodel->getDataSales($config['per_page'],$offset);
		// $this->load->model('Page_homemodel');
		// $data['records'] = $this->Page_homemodel->getData();
		$data['module'] = $this->module;
		$this->load->view('template/page.home.php', $data);
	}

	public function getSearchBoat()
	{
		$category 	 = $this->input->post('category');
		$type 		   = $this->input->post('type');
		$destination = $this->input->post('destinations');
		$cabins 		 = $this->input->post('cabins');
		$price 			 = $this->input->post('price');
		$data['result'] = $this->Page_homemodel->searchboat($category,$type);
		$data['module'] = $this->module;
		print_r($data['result']);
		$this->load->view('template/page.home.php',$data);
	}

	public function sgetSearchnameBoat()
	{
		$data['module'] = $this->module;
		$key = $this->input->post('name');
		$data['records'] = $this->Page_homemodel->getSearchnameBoat($key);
		$this->load->view('template/page.home.php',$data);
	}
}
