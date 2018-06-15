<?php
class Page_booking extends CI_Controller{
  public function booking_Boat()
  {
      $data = array(
                  'yacth_id'=>$this->input->post('id'),
                  'name'=>$this->input->post('name')
                 );
        $user_booking = array(
                          'yacth_id' => $data['yacth_id'],
                          'name'     => $this->input->post('namecustomer'),
                          'email'    => $this->input->post('email'),
                          'phone'    => $this->input->post('phone'),
                          'departure'     => $this->input->post('departure'),
                          'day'     => $this->input->post('days'),
                          'guest'    => $this->input->post('guests')
                      );
          $this->Booking->insert($user_booking);
      		redirect(base_url().'Page_confirm/getSearchEmailStatus', 'refresh');
   }
}
