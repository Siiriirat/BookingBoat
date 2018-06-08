<?php

class Page_boat extends CI_Controller{

  var $module = 'boat';

  public function index($boat_type, $id)
  {
    $data['module'] = $this->module;
    $this->load->view('template/page.boat.php', $data);
  }

}
