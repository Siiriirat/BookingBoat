<?php
class Page_confirmmodel extends CI_Model {
  public function showdata($key)
  {
      $this->db->like('email',$key);
      $this->db->order_by('booking_id', 'desc');
      $query = $this->db->get('phuketnews_yacht_booking');
      return $query->result();
  }
}
