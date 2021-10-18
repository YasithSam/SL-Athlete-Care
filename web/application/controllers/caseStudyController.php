<?php

class caseStudyController extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
       $this->caseStudyModel = $this->model('caseStudyModel');

    }
    public function index(){
        if($this->getSession('userRole')==2){
            
               $this->view("casestudy/main");
                  
         }
         else{
                $this->view('404');
        }

    }
    public function pre(){
       if($this->getSession('userRole')==2){     
            $this->view("casestudy/pre");
               
        }
        else{
             $this->view('404');
        }

    }
    public function post(){
        if($this->getSession('userRole')==2){     
             $this->view("casestudy/post");
                
         }
         else{
              $this->view('404');
         }
 
     }
    public function item($id){
        // $userId = $this->getSession('userId');
        // // check which user has access to the specific case study
        // echo ($id);
        // $this->caseStudyModel->access($id,$userId);

        // if($this->getSession('userRole')==2){
        //     $data = $this->doctorModel->getCounts($userId);   
        //     //$data2= $this->doctorModel->getForumItems($userId);    
        //     //$data3= $this->doctorModel->getUpdates($userId);   
        //     //$dataArray=[$data,$data2,$data3];
        //     $this->view("doctor/home",$data);
              
        // }
        // else{
        //     $this->view('404');
        // }

        $this->view('casestudy/item');
    }
    public function patients(){
        $this->view('doctor/patients');
    }
    
    public function casestudy(){
        $this->view('doctor/casestudy');
    }
    
   
   
   

}
?>    