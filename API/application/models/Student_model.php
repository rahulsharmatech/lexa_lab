<?php


class Student_model extends CI_Model
{
  
  public function __construct()
  {
  	parent::__construct();
  	$this->load->database();
  }


// Get All Students Data

  public function get_students()
  {
  $this->db->select('*');
	$this->db->from('tbl_student');
	$query = $this->db->get();
	return $query->result();
  }

// Insert Student Data

  public function insert_student($data=array())
  {
    return $this->db->insert("tbl_student",$data);
  }

// Delete Student Data

  public function delete_student($student_id)
  {
    $this->db->where("id",$student_id);
    return $this->db->delete("tbl_student");

  }



// Update Student Data

  public function update_student_info($student_id,$student_info)
  {
    $this->db->where("id",$student_id);
    return $this->db->update("tbl_student",$student_info);
  }




}




?>