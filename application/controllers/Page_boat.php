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
    $offset  = $this->uri->segment(4);
    $this->db->like('category_id',$category_id);
    $database = $this->db->get('phuketnews_yacht');

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
