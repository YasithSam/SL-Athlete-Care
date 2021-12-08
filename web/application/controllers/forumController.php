<?php

class forumController extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
       $this->forumModel = $this->model('forumModel');

    }
    public function index(){
            if($this->getSession('userRole')==2){
            $data=$this->forumModel->getNotices();
            $data2=$this->forumModel->getArticles();
            $top=array_slice($data, 0, 3);
            $top2=array_slice($data2, 0, 4);
            $data3=[$top,$top2];
            $this->view('blog',$data3);
            }
            else{
                $this->view('404');
            } 
        }

    

    public function item($id){
        if($this->getSession('userRole')==2){
            $data=$this->forumModel->getForumbyId($id);
            $data2=$this->forumModel->getForums($id);
            $data3=[$data,$data2];
            $this->view('forumItem',$data3);

        }
        else{
            $this->view('404');
        }    

        // $userId = $this->getSession('userId');
        // // check which user has access to the specific case study
        // echo ($id);
        // $this->caseStudyModel->access($id,$userId);

         //if($this->getSession('userRole')==2){
        //     $data = $this->doctorModel->getCounts($userId);   
        //     //$data2= $this->doctorModel->getForumItems($userId);    
        //     //$data3= $this->doctorModel->getUpdates($userId);   
        //     //$dataArray=[$data,$data2,$data3];
        //     $this->view("doctor/home",$data);
              
        // }
        // else{
        //     $this->view('404');
        // }
       
    }
    public function confirm($id){
        if($this->getSession('userRole')==2){
            $this->forumModel->updateForumbyId($id,1);
            $this->redirect('doctor/profile');

        }
        else{
            $this->view('404');
        }    

        

    }
    public function grid(){
        $this->view('grid');

    }
    public function articleitem(){
        $this->view('articleitem');

    }
    public function questionitem(){
        $this->view('questionitem');

    }
/*     public function noticeitem($id){
        $id=$id;
        $data=$this->forumModel->getNoticeitem($id);
        $this->view('noticeitem',$data);

    } */

    public function reject($id){
        if($this->getSession('userRole')==2){
            $data=$this->forumModel->updateForumbyId($id,"Rejected");
            $this->redirect('forumController');

        }
        else{
            $this->view('404');
        }    


    }
    
    
   
   
   

}
?>    