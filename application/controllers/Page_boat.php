<?php

class Page_boat extends CI_Controller{
  var $page = 'Type';
  var $name = 'ABC';

  public function index($boat_type, $id)
  {
    $data['name'] = $this->name;
    $data['type'] = $boat_type;
		$data['show'] = $this->Page_boatmodel->getData();
		$this->load->view('template/page.boat.php', $data);
  }
  public function test(){
    $this->load->model('boat_model');
    $boat = $this->boat_model->programming();
    var_dump($boat);
  }
}
