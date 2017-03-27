<?php 
   class Jobs extends CI_Model{

public function insertData($data) { 
         if ($this->db->insert("jobs", $data)) { 
            return true; 
         } 
      } 
   
public function viewdata($id){
	$this->db->where('id', $id);
// here we select every column of the table
$q = $this->db->get('jobs');
$data = $q->result_array();
return $data;
}


   }

   ?>