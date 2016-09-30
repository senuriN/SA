<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class RecommendationController extends CI_Controller {

   
     
    function __construct() 
    {

        parent::__construct();

        $this->email = "";
        $this->group = "";
    }
 
    
    
    function addRecommendation($rid)
    {
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('Recommendation', 'recommendation', TRUE);
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);
        
         
        $user = 1;
        $recomnd = $this->input->post('txtRecomnd');
       
        $status='Responded';
        
        
        
        
        $data['request'] = $this->request->displayRequestRecord($rid);
        $recevId = $data['request'][0]['requestedBy'];
         
        $date = date('Y-m-d H:i:s'); 
       
         
        if($this->request->updateRequests($rid,$status,$date))
        { 
            echo json_encode("0");
        }
        else 
        {
            echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
              . '</script>';
        }
        
        $value = $this->notifications->createNotification($user,'Recommendation added to your profile', $date); 
        if($value == true)
        {
            $data['notifyId']= $this->notifications->getNotification($date);
            $nid = $data['notifyId'][0]['nid'];
            $state = $this->notificationuser->addToNoticationUsers($nid,$recevId,$date);
        }
            
        if ($this->recommendation->addRecommendation($user,$recomnd,$recevId))
        {
           if($state)
            {   
           
                echo '<script>'
                      . 'alert("You Have Successfully Add The Recommendation!");'
                . '</script>';
            
                 redirect("RequestController/viewDetailedRequest/".$rid." ",'refresh');
           }
              
        }  
           
        else
        {
            
            echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
              . '</script>';
            
        }
        
      
    }
}