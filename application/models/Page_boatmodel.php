<?php
class Page_boatmodel extends CI_Model {
  public function detail_boat($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('phuketnews_yacht');
    return $query->result();
  }
}
