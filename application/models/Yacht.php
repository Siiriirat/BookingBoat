<?php

class Yacht extends CI_Model{

  var $table = 'phuketnews_yacht';
  var $category = 'phuketnews_yacht_category';
  var $location = 'phuketnews_yacht_location';

  public function insert($arr)
  {
    $this->db->insert($this->table, $arr);
    return $this->db->insert_id();
  }

  public function update($id, $arr)
  {
    $this->db->where('id', $id);
    $this->db->update($this->table, $arr);
  }

  public function get_id($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->table);
  }

  public function get()
  {

    $limit = 10;
    $start = $page * $limit - $limit;

    /*
    $limit = 10;
    $start = $page * $limit - $limit;
    $this->db->where('want_to', 'charter');
    $query = $this->db->get($this->table, $limit, $start);
    return $query->result();
    */

    $field = $this->input->get('field');
    $order = $this->input->get('order');

    $sql = "SELECT id, title, description ";
    $sql .= "FROM $this->table ";
    $sql .= "WHERE want_to = 'charter' ";
    $sql .= "AND status = 1 ";
    if($field){
      $sql .= "ORDER BY $field $order ";
    }else{
      $sql .= "ORDER BY id DESC ";
    }
    $sql .= "LIMIT $start, $limit ";
    $query = $this->db->query($sql);
    $data['rows'] = $query->result();

    $sql = "SELECT COUNT(id) AS num ";
    $sql .= "FROM $this->table ";
    $sql .= "WHERE want_to = 'charter' ";
    $sql .= "AND status = 1 ";
    $query = $this->db->query($sql);
    $rs = $query->result();
    $data['items'] = $rs[0]->num;
    $data['pages'] = ceil($rs[0]->num/$limit);
    return $data;

  }

  public function get_charter($page)
{
  $limit = 10;
  $start = $page;
  /*
  $limit = 10;
  $start = $page * $limit - $limit;
  $this->db->where('want_to', 'charter');
  $query = $this->db->get($this->table, $limit, $start);
  return $query->result();
  */
  $sql = "SELECT id, title, description ";
  $sql .= "FROM $this->table ";
  $sql .= "WHERE want_to = 'charter' ";
  $sql .= "AND status = 1 ";
  $sql .= "ORDER BY id DESC ";
  $sql .= "LIMIT $start, $limit ";
  $query = $this->db->query($sql);
  $data['rows'] = $query->result();
  $sql = "SELECT COUNT(id) AS num ";
  $sql .= "FROM $this->table ";
  $sql .= "WHERE want_to = 'charter' ";
  $sql .= "AND status = 1 ";
  $query = $this->db->query($sql);
  $rs = $query->result();
  $data['items'] = $rs[0]->num;
  $data['pages'] = ceil($rs[0]->num/$limit);
  return $data;
}
public function get_sale($page)
{
  $limit = 10;
  $start = $page;
  // query table phuketnews_yacht
  $sql = "SELECT id, title, description ";
  $sql .= "FROM $this->table ";
  $sql .= "WHERE want_to = 'sale' ";
  $sql .= "AND status = 1 ";
  $sql .= "ORDER BY id DESC ";
  $sql .= "LIMIT $start, $limit ";
  $query = $this->db->query($sql);
  $data['rows'] = $query->result();
  // config pagination
  $sql = "SELECT COUNT(id) AS num ";
  $sql .= "FROM $this->table ";
  $sql .= "WHERE want_to = 'sale' ";
  $sql .= "AND status = 1 ";
  $query = $this->db->query($sql);
  $rs = $query->result();
  $data['items'] = $rs[0]->num;
  $data['pages'] = ceil($rs[0]->num/$limit);
  return $data;
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


  public function get_categoryid($page)
  {
    $limit = 9;
    $start = $page * $limit - $limit;

    $category_id = $this->uri->segment(3);
    $category_title = $this->uri->segment(2);
    $sql = "SELECT id, title, description ";
    $sql .= "FROM $this->table ";
    $sql .= "WHERE $this->table.category_id =  $category_id ";
    $sql .= "ORDER BY id DESC ";
    $query = $this->db->query($sql);
    $data['rows'] = $query->result();


    $sql = "SELECT COUNT(id) AS num ";
    $sql .= "FROM $this->table ";
    $sql .= "WHERE $this->table.category_id =  $category_id ";
    $query = $this->db->query($sql);
    $rs = $query->result();
    $data['items'] = $rs[0]->num;
    $data['pages'] = ceil($rs[0]->num/$limit);
    $data['title'] = $category_title;
    return $data;


  }

}
