<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */
class RequestController extends CI_Controller {
    
    
    public function index()
    {

        $this->load->model('userModel', 'user', TRUE);
        $this->load->helper('url');
        $this->load->helper('form');
        $data['users'] = $this->user->getUserNames();
        $this->load->model('Notifications', 'notifications', TRUE);
        
        $uid = 1;
        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);
        $this->load->view('createRequests',$data);
        $this->load->view('createRequestsFooter',$data);
    }

    
    public function addRequest()
    {
        
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->library('Form_validation');
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);
         
        $user= 1;
         
        $data['users'] = $this->user->getUserNames();
          
        $data['notifyCount']=  $this->notifications->getUnreadNotification($user);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($user);
    
       
        //load user model
         
         
         
        $this->form_validation->set_rules('txtMsg','Message about the request ','required');
       
        $this->load->model('Requests', 'request', TRUE);
        $type = $this->input->post('txtType');
        $receiver = $this->input->post('txtReceiver');
        $message = $this->input->post('txtMsg');
       
        $date = date('Y-m-d H:i:s'); 
       
        if($receiver == null)
        {
            $receiver = 1;
        }
        
        
        
        
        if($type =='Request')
        {
            $title = 'Internship Letter Request From a Student';
       
        }
        else if($type == 'Internship')
        {
          $title = 'Internship vaccancy request From a Student';  
        }
        
        
        else 
        {
            $title = 'Reccomendation request From a Student';
           
        }
        
        
        if ($this->form_validation->run() == TRUE)
        {
             
            $value = $this->notifications->createNotification($user,$title, $date); 
            if($value == true)
            {
                $data['notifyId']= $this->notifications->getNotification($date);
                $nid = $data['notifyId'][0]['nid'];
                $state = $this->notificationuser->addToNoticationUsers($nid,$receiver,$date);
            }
        
        
        
        
            if ($this->request->sendRequest($user,$message,$receiver,$type, $date))
            {
                echo '<script>'
                      . 'alert("You Have Successfully Send the Request!");'
                . '</script>';
              
              
                redirect('RequestController/index', 'refresh');
            }
            else
            {
            
                echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
                . '</script>';
            
            } 
            
        }
        
        else 
        {
            
            $this->load->view('createRequests',$data);
            $this->load->view('createRequestsFooter',$data);
        }
    }
    
    public function viewInternshipRequests()
    {
        
        
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);
            
        $uid = 1;

        $data['request'] = $this->request->displayInternshipRequests();
        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

            
        $userID = $data['request'][0]['requestedBy'];

        $data['user'] = $this->user->getUserRecord($userID);
        $this->load->view('viewInternshipRequests',$data);
        $this->load->view('viewRequestsFooter',$data);
        
    }
    
    
     public function viewRecomendationRequests()
    {
        
        
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);

        $uid = 1;
        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

        $data['request'] = $this->request->displayRecommendationRequests();



        $userID = $data['request'][0]['requestedBy'];
         
        $data['user'] = $this->user->getUserRecord($userID);
        $this->load->view('viewRecmndtionRequests',$data);
        $this->load->view('viewRequestsFooter',$data);
        
    }
    
      public function viewRequests()
    {
        
        
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);

        $uid=1;
        $data['request'] = $this->request->displayRequests();

        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

        $userID = $data['request'][0]['requestedBy'];
         
        $data['user'] = $this->user->getUserRecord($userID);
        $this->load->view('viewRequests',$data);
        $this->load->view('viewRequestsFooter',$data);
    }
    
    public function deleteRequest()
    {
        
        $reqId = $this->input->post('requestId');
        $this->load->model('Requests','request', TRUE);
         
       if($this->request->deleteRequestFromTable($reqId))
       { 
           echo json_encode("0");
       }
        else 
        {
            echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
              . '</script>';
       }
              
        
    }
    
      public function sentRequests()
    {
        
        
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);

        $uid = 1;
        $data['request'] = $this->request->displaySentRequests($uid);

        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

        $userID = $data['request'][0]['addressedTo'];

        $data['user'] = $this->user->getUserRecord($userID);
        $this->load->view('viewSentRequests',$data);
        $this->load->view('viewSentRequestsFooter',$data);
    }
    
   public function viewDetailedRequest($rid)
           
   {
       
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);

        $uid = 1;
        $data['request'] = $this->request->displayRequestRecord($rid);

        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

        $receiver = $data['request'][0]['addressedTo'];

        $data['receiver'] = $this->user->getUserRecord($receiver);

        $sender = $data['request'][0]['requestedBy'];
        $type = $data['request'][0]['type'];


        $data['sender'] = $this->user->getUserRecord($sender);

        if($type == 'Recommendation')
        {  
         $this->load->view('viewDetailedRecmndRequests',$data);
         $this->load->view('viewDetailedRequestsFooter',$data);

        }
        else
        {

             $this->load->view('viewDetailedRequests',$data); 
             $this->load->view('viewDetailedRequestsFooter',$data);
        }
        
   }
    
   public function updateRequest($status,$recId)
   {
       
        $this->load->helper('date');
        $date = date('Y-m-d H:i:s');
       
        if($recId==0)
        {
            $recId = $this->input->post('recId');
        }
       
        $this->load->model('Requests', 'request', TRUE);
         
        if($this->request->updateRequests($recId,$status,$date))
        { 
            echo json_encode("0");
        }
        else 
        {
          echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
              . '</script>';
        }
              
       
   }
   
  public function viewDetailedSentRequest($rid)
           
   {
       
        $this->load->model('Requests', 'request', TRUE);
        $this->load->model('userModel', 'user', TRUE);
        $this->load->model('Notifications', 'notifications', TRUE);
        $this->load->model('NotificationUser', 'notificationuser', TRUE);

        $uid = 1;
        $data['notifyCount']=  $this->notifications->getUnreadNotification($uid);
        $data['title']=  $this->notifications->getUnreadNotificationTitle($uid);

        $data['request'] = $this->request->displayRequestRecord($rid);



        $receiver = $data['request'][0]['addressedTo'];

        $data['receiver'] = $this->user->getUserRecord($receiver);

        $this->load->view('viewDetailedSentRequests',$data);
        $this->load->view('createRequestsFooter',$data);

   }
              
        
     
    public function updateNotify()
   {
       
        $this->load->helper('date');
        $date = date('Y-m-d H:i:s');
        
        $nid = $this->input->post('nid');
        $uid = 1;
       
        $this->load->model('NotificationUser', 'notificationser', TRUE);
         
        if($this->notificationser->updateNotification($nid,$uid,$date))
        { 
            echo json_encode("0");
        }
        else 
        {
          
            echo '<script>'
                      . 'alert("OOPs ! Error Occurd. Request Sending was unsuccessful..!");'
              . '</script>';
        }
              
       
   }
}