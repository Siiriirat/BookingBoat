<?php
class Page_homemodel extends CI_Model {
  public function getData()
  {
    $query = $this->db->query('SELECT * FROM phuketnews_yacht');
    if($query->num_rows() > 0 ) {
      return $query->result();
    }
    else {
      return array();
    }
}
}
