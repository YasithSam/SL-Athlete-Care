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
    public function patients(){
        $this->view('para/patients');
    }
   
    public function casestudy(){
        $this->view('para/casestudy');
    }
    public function schedules(){
        $this->view('para/schedules');
    }
    public function settings(){
        $this->view("settings");
    }
    
   
   
   

}
?>    