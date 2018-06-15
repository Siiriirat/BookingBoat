<?php

class Category extends CI_model{

  var $table = 'phuketnews_yacht_category';
  public function get_categoryid($category_id)
  {
    $this->db->where('category_id', $category_id);
    $query = $this->db->get($this->table);
    return $query->result();
  }



}

?>
