<?php

class doctor extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
        $this->doctorModel = $this->model('doctorModel');

    }
    public function index(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data = $this->doctorModel->getCounts($userId);   
            $x= $this->doctorModel->getForumItems($userId);    
            //$data3= $this->doctorModel->getUpdates($userId);   
            $dataArray=[$data,$x];
            $this->view("doctor/home",$dataArray);
              
        }
        else{
            $this->view('404');
        }
    }
    public function patients(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/patients');
        }
        else{
            $this->view('404');
        }
      
    }

    public function profile(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getProfile($userId);   
            $data2=$this->doctorModel->getCaseStudy($userId);   
            //$data3= $this->doctorModel->getArticles($userId); 
          
            $this->view('doctor/profile',[$data,$data2]);
        }
        else{
            $this->view('404');
        }

    }

    public function athlete(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/athlete');
        }
        else{
            $this->view('404');
        }

    }
    public function addcasestudy(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/addCS');
        }
        else{
            $this->view('404');
        }

    }
    public function addq(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/addQualification');
        }
        else{
            $this->view('404');
        }

    }
    public function editprofile(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/editprofile');
        }
        else{
            $this->view('404');
        }

    }
    public function messages(){
        if($this->getSession('userRole')==2){
          $this->view('chat');
        }
        else{
            $this->view('404');
        }
    }
    
    public function casestudy(){
        if($this->getSession('userRole')==2){
          $this->view('doctor/casestudy');
        } 
        else{
            $this->view('404');
        } 
    }
    public function settings(){
        if($this->getSession('userRole')==2){
          $this->view("settings");
        }
        else{
            $this->view('404');
        }  
    }
    
   
   
   

}
?>    