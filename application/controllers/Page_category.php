<?php
class Page_category extends CI_Controller{
  var $module = 'category';
  public function category_Boat()
  {
    $categorys = $this->Yacht->get_categoryid(1);
    $data['module'] = $this->module;
		$data['categorys'] = $categorys;
    $this->load->view('template/page.category.php',$data);
  }
}
