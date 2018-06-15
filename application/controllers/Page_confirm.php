<?php
class Page_confirm extends CI_Controller{
  public function SearchEmailStatus()
  {
      $key = $this->input->post('email');
      $data['key'] = $this->Booking->get_booking($key);
      print_r( $data['key']);
      $this->load->view('template/page.confirm.php',$data);
  }
  public function getSearchEmailStatus()
  {
      $this->load->view('template/page.confirm.php');
  }
}
