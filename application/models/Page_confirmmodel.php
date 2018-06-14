<?php
class Page_confirmmodel extends CI_Model {
  public function showdata($key)
  {
      $this->db->like('email',$key);
      $this->db->order_by('booking_id', 'desc');
      $query = $this->db->get('phuketnews_yacht_booking');
      // $query = $this->db->query('SELECT phuketnews_yacht_booking.name, phuketnews_yacht_booking.email, phuketnews_yacht_booking.phone,phuketnews_yacht_booking.date,phuketnews_yacht_booking.day,phuketnews_yacht_booking.guest,phuketnews_yacht.title FROM phuketnews_yacht_booking INNER JOIN phuketnews_yacht WHERE phuketnews_yacht_booking.email = .$key. AND phuketnews_yacht_booking.yacth_id=phuketnews_yacht.id ');
      return $query->result();
  }
}
