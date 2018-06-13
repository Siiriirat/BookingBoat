<?php
class Page_booking extends CI_Controller{
  public function booking_Boat(){
    $data['booking'] = $this->input->get('id');

            print_r($data['booking']);
  }

}
