<?php
class Page_booking extends CI_Controller{
  public function booking_Boat(){
    $data = array(
                  'yacth_id'=>$this->input->get('id'),
                  'name'=>$this->input->post('name')
                 );
            print_r($data["yatch"]);
  }

}
