<?php

Class userModel extends CI_Model {


    
  public function getUserNames()
    {
        $this->db->select("uid,name");
        $this->db->from('sysuser');
        $this->db->where('type','staff');

        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    public function getUserRecord($userID)
    {
        $this->db->select("*");
        $this->db->from('sysuser');
        $this->db->where('uid',$userID);

        $query = $this->db->get();
        return $query->result_array();
    }
    
}