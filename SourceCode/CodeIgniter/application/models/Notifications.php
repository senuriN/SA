<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */
Class Notifications extends CI_Model {
    
    public function createNotification($user,$type,$date)
    {
        $this->load->helper('url');

        $data = array(
                        
                        'title' => $type,
                        'createdOn' => $date,
                        'createdBy' => $user,
                        
                      );
        return $this->db->insert('notification', $data);
    }
    
 
    public function getNotification($date)
    {
        $this->db->select("*");
        $this->db->from('notification');
        $this->db->where('createdOn',$date);

        $query = $this->db->get();
        return $query->result_array();
    }
    
    
     public function getUnreadNotification($uid)
    {
        $query = $this->db->query("select count(*) as counts
                                   from notification n , notificationuser u
                                   where 
                                   n.nid = u.nid
                                   and u.uid = '" .$uid. "'
                                   and u.status  in ('unread')");

        return $query->result_array();
    }
         
    public function getUnreadNotificationTitle($uid)
    {
        $query = $this->db->query("select n.title as title,n.nid as id
                                    from notification n , notificationuser u
                                    where 
                                    n.nid = u.nid
                                    and u.uid = '" .$uid. "'
                                    and u.status  in ('unread')");
        return $query->result_array();
    }
            
         
}