<?php
class Booking extends CI_model{
  var $table = 'phuketnews_yacht_booking';
  var $yacht = 'phuketnews_yacht';
  public function insert($arr)
  {
    $this->db->insert($this->table, $arr);
    return $this->db->insert_id();
  }
  public function showdata($key)
  {
      $this->db->like('email',$key);
      $this->db->order_by('booking_id', 'desc');
      $query = $this->db->get('phuketnews_yacht_booking');
      // $query = $this->db->query('SELECT phuketnews_yacht_booking.name, phuketnews_yacht_booking.email, phuketnews_yacht_booking.phone,phuketnews_yacht_booking.date,phuketnews_yacht_booking.day,phuketnews_yacht_booking.guest,phuketnews_yacht.title FROM phuketnews_yacht_booking INNER JOIN phuketnews_yacht WHERE phuketnews_yacht_booking.email = .$key. AND phuketnews_yacht_booking.yacth_id=phuketnews_yacht.id ');
      return $query->result();
  }
  public function get_booking($key)
  {
    $sql = "SELECT $this->table.name, $this->table.email, $this->table.phone,$this->table.departure,$this->table.day,$this->table.guest,$this->yacht.title";
    $sql .= " FROM $this->table";
    $sql .= " INNER JOIN $this->yacht ";
    $sql .= "WHERE $this->table.email = '$key' ";
    $sql .= "AND $this->table.yacth_id = $this->yacht.id ";
    $sql .= "ORDER BY id DESC ";
    $query = $this->db->query($sql);
    $data = $query->result();
    return $data;
  }
}
?>
