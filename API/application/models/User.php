<?php

if(!defined('BASEPATH')) exit('No direct script allowed');


class User extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->databse();
	}

  

// Get rows from the database

  function getRows($id= "")
  {
  	if(!empty($id))
  	{

  		$query= $this->db->get_where('users',array('id'=>$id))
  		return $query->row_array();
  	}
  	else
  	{
  		$query= $this->db->get('users');
  		return $query->result_array();
  	}
  }


  // Insert the data through the api

  function insert($data=array())
  {

     if(!array_key_exists('created', $data))
     {
     	$data['created']=date("Y-m-d H:i:s");
     }
     if(!array_key_exits('modified',$data))
     {
     	$data['modified']=date("Y-m-d H:i:s");
     }
     $insert=$this->db->insert('users',$data);
     if($insert)
     {
     	return $this->db->insert_id();
     }
     else
     {
     	return false;
     }

  }


  // Update user data

  public function update($data,$id)
  {
  	if(!empty($data) && !empty($id))
  	{
  		if(!array_key_exists('modified', $data))
  		{
  			$data['modified']=date("Y-m-d H:i:s");
  		}
  		$update=$this->db->update('users',$data,array('id'=>$id));
  		return $update?true:false;
  	}
  	else
  	{
  		return false;
  	}
  }


  // Delete User data


  public function delete($id)
  {
  	$delete=$this->db->delete('users',array('id'=>$id));
  	return $delete?true:false;
  }


}




?>