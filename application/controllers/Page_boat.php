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
  public function sendemailus()
  {
    $this->load->library('email');
    $name    = $this->input->post('name');
    $email   = $this->input->post('email');
    $message = $this->input->post('message');
    // echo $name."<br>".$email."<br>".$message;
    // send email form email 5735512004@psu.ac.th
    $this->email->from('5735512004@psu.ac.th','easybranches');
    $this->email->to($email);
    $this->email->subject($name);
    $this->email->message($message);
    $this->email->send();
    redirect('/Page_home/index', 'refresh');
  }
}
