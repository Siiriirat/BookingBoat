<?php
class Page_boatmodel extends CI_Model {
  public function detail_Boat($id)
  {
    $this->db->where('id',$id);
    $this->db->join('phuketnews_yacht_category', 'phuketnews_yacht_category.category_id = phuketnews_yacht.category_id');
    $query = $this->db->get('phuketnews_yacht');
    return $query->result();
  }
  public function category_Boat($category_id)
  {
    $this->db->where('phuketnews_yacht.category_id',$category_id);
    $this->db->join('phuketnews_yacht_category', 'phuketnews_yacht_category.category_id = phuketnews_yacht.category_id');
    $query = $this->db->get('phuketnews_yacht');
    return $query->result();
  }
}
