<?php
class Page_boat extends CI_Controller{
  var $type = '';
  public function detail_Boat()
  {
    $id = $this->input->get('id');
		$data['show'] = $this->Page_boatmodel->detail_Boat($id);
    $data['locations'] = $this->Page_boatmodel->location_Boat();
		$this->load->view('template/page.boat.php',$data);
  }
  public function category_Boat()
  {

    $category_id  = $this->uri->segment(3);
    $data['type'] = $this->uri->segment(2);
		$data['categorys'] = $this->Page_boatmodel->category_Boat($category_id);
		$this->load->view('template/page.category.php',$data);
  }
}
