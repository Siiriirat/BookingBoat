<?php
class Page_boatmodel extends CI_Model {
  public function getData() // สร้าง Method ชื่อว่า getAllTemplate
  {
    $query = $this->db->query('SELECT * FROM phuketnews_yacht Where   id = 1' );
    if($query->num_rows() > 0 ) {
      return $query->result();
    }
    else {
      return array();
    }
}
}
