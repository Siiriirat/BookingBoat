<?php

class Location extends CI_model{

  var $table = 'phuketnews_yacht_location';
  public function get_locationid($location_id)
  {
    $this->db->where('location_id', $location_id);
    $query = $this->db->get($this->table);
    return $query->result();
  }

}

?>
