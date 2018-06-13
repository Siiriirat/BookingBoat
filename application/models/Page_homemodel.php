<?php
class Page_homemodel extends  CI_model{
    public function getData($perpage,$offset){
      // $result = NULL;
      // $query = $this->db->query('SELECT phuketnews_yacht.id , phuketnews_yacht_photo.thumbnail , phuketnews_yacht.title, phuketnews_yacht.description FROM phuketnews_yacht INNER JOIN phuketnews_yacht_photo ON phuketnews_yacht.id=phuketnews_yacht_photo.id');
      //   if($query->num_rows()>0){
      //     $result = $query->result_array();
      //   }
      // $query = $this->db->get('phuketnews_yacht');
      // return $query->result();
        $this->db->like('want_to ','charter');
        $query =  $this->db->get('phuketnews_yacht',$perpage,$offset);
        return $query->result();
    }
    public function getDataSales($perpage,$offset )
    {
        $this->db->like('want_to','sale');
        $query = $this->db->get('phuketnews_yacht',$perpage,$offset);
        return $query->result();
    }
    public function searchboat($category,$type )
    {
        $this->db->like('category_title',$type)
                  ->or_like('category_id',$category);
        $query = $this->db->get('phuketnews_yacht_category');
        return $query->result();
    }
    public function getSearchnameBoat($key)
    {
        $this->db->like('title',$key);
        $query = $this->db->get('phuketnews_yacht');
        return $query->result();
    }
}
 ?>
