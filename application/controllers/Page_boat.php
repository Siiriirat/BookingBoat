<?php
class Page_boat extends CI_Controller{
  var $module = 'boat';
  public function detail_Boat()
  {
    $id = $this->input->get('id');
		$data['detail'] = $this->Yacht->get_id($id);
    $data['location'] = $this->Location->get_locationid($data['detail'][0]->location_id);
    $data['category'] = $this->Category->get_categoryid($data['detail'][0]->category_id);
    $data['module']   = $this->module;
		$this->load->view('template/page.boat.php',$data);
  }

  public function sendemailus()
  {
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
