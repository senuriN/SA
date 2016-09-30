<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */

Class Requests extends CI_Model {
    
    public function sendRequest($sender,$msg,$receiver,$type,$date)
    {
        $this->load->helper('url');

        $data = array(
                        
                        'type' => $type,
                        'addressedTo' => $receiver,
                        'message' => $msg,
                        'requestedBy' => $sender,
                        'status' =>'pending',
                        'statusChangedOn' =>  $date,
                      );
        return $this->db->insert('requests', $data);
    }
    
    
    public function  displayInternshipRequests()
    {
        
        $this->db->select("rid,requestedBy,status");
        $this->db->from('requests');
        $this->db->where('type','Internship');

        $query = $this->db->get();
        return $query->result_array();
        
        
    }
    
    public function  displayRecommendationRequests()
    {
        
        $this->db->select("rid,requestedBy,status");
        $this->db->from('requests');
        $this->db->where('type','Recommendation');

        $query = $this->db->get();
        return $query->result_array();
        
        
    }
    public function  displayRequests()
    {
        
        $this->db->select("rid,requestedBy,status,addressedTo,type");
        $this->db->from('requests');
        $this->db->where('type','Request');

        $query = $this->db->get();
        return $query->result_array();
        
        
    }
    
    
     public function  deleteRequestFromTable($rid)
    {
        
        $this->db->where('rid', $rid);
        if ( $this->db->delete('requests'))
        {  return true; }
        else 
        {  return false; }
        
        
    }
    
    
    public function  displayRequestRecord($rid){
        
        $this->db->select("*");
                $this->db->from('requests');
                $this->db->where('rid',$rid);
                
                $query = $this->db->get();
                return $query->result_array();
        
        
    }
    
    public function updateRequests($rid,$status,$date){
        
         
        $data = array(
                        'status' => $status ,
                        'statusChangedOn'=>$date,
                     );
        $this->db->where('rid', $rid);
       return $this->db->update('requests',$data);
    
       }
    
  public function displaySentRequests($uid)  
  {
                $this->db->select("*");
                $this->db->from('requests');
                $this->db->where('requestedBy',$uid);
                
                $query = $this->db->get();
                return $query->result_array();
        
}

}