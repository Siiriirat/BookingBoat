<?php
class Page_booking extends CI_Controller{
  var $page = 'Type';
  var $name = 'ABC';
  
  public function index($boat_type, $id)
  {
  }
  public function booking(){
    echo $this->input->post('date');
    echo $this->input->post('type');
    echo $this->input->post('name');
  }
}
