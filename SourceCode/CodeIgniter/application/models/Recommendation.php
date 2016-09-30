<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */
Class Recommendation extends CI_Model {
    
public function addRecommendation($sender,$msg,$receiver)
    {
       
    $this->load->helper('url');

        $data = array(
                        
                        'recomndBy' => $sender,
                        'receiver' => $receiver,
                        'recommendation' => $msg,
                        
                      );
        return $this->db->insert('recommendation', $data);
    }
 }  
 
