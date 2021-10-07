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
            //$data2= $this->doctorModel->getForumItems($userId);    
            //$data3= $this->doctorModel->getUpdates($userId);   
            //$dataArray=[$data,$data2,$data3];
            $this->view("doctor/home",$data);
              
        }
        else{
            $this->view('404');
        }
    }
    public function patients(){
        $this->view('doctor/patients');
    }
    
    public function casestudy(){
        $this->view('doctor/casestudy');
    }
    
   
   
   

}
?>    