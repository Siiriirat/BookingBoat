<?php

class Page_boat extends CI_Controller{
  var $page = 'Type';
  var $name = 'ABC';
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');

  }
  public function index($boat_type, $id)
  {
    $data['name'] = $this->name;
    $data['type'] = $boat_type;
    $this->load->view('template/page.boat.php', $data);
  }
  

}
