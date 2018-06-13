<?php
class Page_boat extends CI_Controller{
  var $type = '';

  public function detail_Boat()
  {
    $id = $this->input->get('id');
		$data['show'] = $this->Page_boatmodel->detail_Boat($id);
    $data['locations'] = $this->Page_boatmodel->getlocation_Boat();
		$this->load->view('template/page.boat.php',$data);
  }

  public function category_Boat()
  {
    $category_id  = $this->uri->segment(3);
    $data['type'] = $this->uri->segment(2);
    $offset  = $this->uri->segment(4);
    $database = $this->Page_boatmodel->likecategory_ID($category_id);
    $config['total_rows'] = $database->num_rows();
    $config['base_url'] = base_url(). 'Page_boat/'.$data['type'].'/'.$category_id .'';
    $config['per_page'] = 9;

    $this->pagination->initialize($config);
    $data['links'] = $this->pagination->create_links();
    $data['categorys'] = $this->Page_boatmodel->category_Boat($config['per_page'],$offset,$category_id);
		$this->load->view('template/page.category.php',$data);
  }

  public function sendemailus()
  {
    // load library
   $this->load->library('email');
   // post value
   $yacth_id = $this->input->post('id');
   $bname   = $this->input->post('bname');
   $name    = $this->input->post('name');
   $email   = $this->input->post('email');
   $phone   = $this->input->post('phone');
   $title   = $this->input->post('title');
   $message = $this->input->post('message');
   // echo $bname;
   // echo "<b>"."Name: ".$name."</b>"."<br>"."Email: ".$email." Tel: ".$phone."<br>"."Titile: ".$title."<br>"."Message: ".$message;
   // send email form email 5735512004@psu.ac.th
   $this->email->from('5735512004@psu.ac.th','easybranches');
   $this->email->to($email);
   $this->email->subject("I want to inquire about ".$bname);
   $this->email->message("Name: ".$name." Email: ".$email." Tel: ".$phone." Titile: ".$title." Message: ".$message);
   $this->email->send();
   redirect(base_url().'Page_boat/detail_Boat?id='.$yacth_id, 'refresh');
  }

}
