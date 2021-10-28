<?php

class paramedical extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
        $this->paramedicalModel = $this->model('paramedicalModel');

    }
    public function index(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==3){
            
           // $data = $this->profileModel->getData($userId);
            $this->view("para/home");
              
        }
        else{
            $this->view('404');
        }
    }
    public function casestudy(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
           $this->view('para/casestudy');
        }
        else{
            $this->view('404');
        }
    }
    public function articles(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
           $this->view('para/articles');
        }
        else{
            $this->view('404');
        }
    }
    public function schedules(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $this->view('para/schedule');
        } 
        else{
            $this->view('404');
        }
    }
    public function settings(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $this->view("para/settings");
        }
        else{
            $this->view('404');
        }
    }
    public function privacy(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $this->view('para/support');
        }
        else{
            $this->view('404');
        }

    }
    public function help(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $this->view('para/help');
        }
        else{
            $this->view('404');
        }

    }
    public function profile(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $this->view('para/profile');
        }
        else{
            $this->view('404');
        }

    }
  
  
   
   
   

}
?>    