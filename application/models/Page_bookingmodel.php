<?php
class Page_bookingmodel extends CI_Model {
  public function booking_add($user_booking)
  {
      $this->db->insert('phuketnews_yacht_booking',$user_booking);
  }
}
