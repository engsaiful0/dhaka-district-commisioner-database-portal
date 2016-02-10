<?php


class pagmodel extends CI_Model {
    //put your code here
    public function __construct() {
       parent::__construct();
    }
    public function total_count() {
       
         $this->db->where('post', 'অতিরিক্ত জেলা প্রশাসক (সার্বিক)');
         $this->db->or_where('post', 'অতিরিক্ত জেলা প্রশাসক (রাজস্ব)');
         $this->db->or_where('post', 'অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)');
        $query=  $this->db->get('bcs_cadre');
return $query->num_rows();
    }
    public function get_users($limit, $start) {
        $data=array();
      $this->db->limit($limit, $start);
      $query = $this->db->get("bcs_cadre");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              if($row->post==='অতিরিক্ত জেলা প্রশাসক (সার্বিক)'||$row->post=='অতিরিক্ত জেলা প্রশাসক (রাজস্ব)'||$row->post=='অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)')
                $data[] = $row;
            }
            return $data;
       // return $query->result_array();
      }
      return false;
   }
    public function total_count_upojaylay_nirbahi() {
       
         $this->db->where('post', 'উপজেলা নির্বাহী অফিসার');
  
        $query=  $this->db->get('bcs_cadre');
return $query->num_rows();
    }
    public function get_users_upojaylay_nirbahi($limit, $start) {
        $data=array();
      $this->db->limit($limit, $start);
      $query = $this->db->get("bcs_cadre");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
//                echo '<pre>';
//            print_r($query->result());
//            exit;
              if($row->post==='উপজেলা নির্বাহী অফিসার')
                $data[] = $row;
            }
          
            return $data;
       // return $query->result_array();
      }
      return false;
   }
    public function total_count_sohokari_commisioner_vumi() {
       
         $this->db->where('post', 'সহকারী কমিশনার(ভূমি)');
       
        $query=  $this->db->get('bcs_cadre');
return $query->num_rows();
    }
    public function get_users_commisioner_vumi($limit, $start) {
        $data=array();
      $this->db->limit($limit, $start);
      $query = $this->db->get("bcs_cadre");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              if($row->post==='সহকারী কমিশনার(ভূমি)')
                $data[] = $row;
            }
            return $data;
       // return $query->result_array();
      }
      return false;
   }
}
