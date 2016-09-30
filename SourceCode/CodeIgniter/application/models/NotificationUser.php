<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */
Class NotificationUser extends CI_Model {
    
    public function addToNoticationUsers($nid,$uid,$date)
    {
        $this->load->helper('url');

        $data = array(
                        
                        'nid' => $nid,
                        'uid' => $uid,
                        'status' => 'unread',
                        'statusChangedOn' => $date
                      );
        return $this->db->insert('notificationuser', $data);
    }
    
    public function updateNotification($nid,$uid,$date)
    {
        
         
        $data = array(
                        'status' => 'read' ,
                        'statusChangedOn' => $date
                        
                     );
        $this->db->where('nid', $nid);
        $this->db->where('uid', $uid);
        return  $this->db->update('notificationuser',$data);
    }
    
         
         
         
}