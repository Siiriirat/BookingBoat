<?php
class Page_boatmodel extends CI_Model {
  public function detail_Boat($id)
  {
    $this->db->select('*');
    $this->db->from('phuketnews_yacht');
    $this->db->join('phuketnews_yacht_category', 'phuketnews_yacht_category.category_id = phuketnews_yacht.category_id');
    $this->db->where('phuketnews_yacht.id',$id);
    $query = $this->db->get();
    return $query->result();
  }
  public function category_Boat($perpage,$offset,$category_id)
  {
    $this->db->where('phuketnews_yacht.category_id',$category_id);
    $this->db->order_by('updated', 'desc');
    $this->db->join('phuketnews_yacht_category', 'phuketnews_yacht_category.category_id = phuketnews_yacht.category_id');
    $query = $this->db->get('phuketnews_yacht',$perpage,$offset);
    return $query->result();
  }
  public function location_Boat()
  {
    $this->db->select('*');
    $this->db->from('phuketnews_yacht_location');
    $query = $this->db->get('');
    return $query->result();
  }
}
