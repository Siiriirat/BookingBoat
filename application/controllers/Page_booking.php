<?php
class Page_booking extends CI_Controller{
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
  }
  public function booking(){
    echo $this->input->post('date');
    echo $this->input->post('type');
    echo $this->input->post('name');
  }
}
