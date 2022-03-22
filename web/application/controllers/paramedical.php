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
        if($this->getSession('userRole')==3|| $this->getSession('userRole')==5){
            $data = $this->paramedicalModel->getCounts($userId);   
            $x= $this->paramedicalModel->getForumItems($userId); 
            $dataArray=[$data,$x];
           
            $this->view("para/home",$dataArray);
        }
        else{
            $this->view('404');
        }
    }


    
    public function casestudy(){
        $userId = $this->getSession('userId');
       
          $data=$this->paramedicalModel->getCaseStudy();
         
          $this->view('para/casestudy',$data);
        
    }

    public function filter(){
        $d=$this->input('doctors');
        $i=$this->input('injury');
       
          $data=$this->paramedicalModel->getCaseStudyFilter($d,$i);
        
          $this->view('para/casestudy',$data);
        
      
    }

     //////////////////Articles/////////////////////////////
    public function articles(){
        $userid = $this->getSession('userId');
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
            $data=$this->paramedicalModel->getArticles($userid);
           $this->view('para/articles',$data);
        }
        else{
            $this->view('404');
        }
    }
    public function addarticle(){
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
            $this->view('para/addArticle');
        }
        else{
            $this->view('404');
        }

    }
    public function addnewarticle(){
        $userid = $this->getSession('userId');
        $filename = $_FILES["image"]["name"];
        if(empty($filename)){$filename="article.jpg";}
        $tempname = $_FILES["image"]["tmp_name"]; 
        $userData = [
            'heading'        => $this->input('heading'),
            'content'           => $this->input('content'),
            'category'           => $this->input('category'),
            'userid' => $userid,
            'filename' => $filename,
        ];
        move_uploaded_file($tempname,"../../web/public/assets/dbimages/$filename");
        if($this->paramedicalModel->createArticle($userData)){
            $this->setFlash('addart', 'The article will be processed in a few hours!');
            $this->redirect('paramedical/articles');
         }
        else {
        $this->view('para/addArticle',$userData);
        }
    }
    public function deletearticle($id)
    {
       
        if($this->paramedicalModel->deleteArticle($id)){
            $this->setFlash('dltart', 'Article deleted successfully!');
            $this->redirect('paramedical/articles');
            // add user has succesfully deleted message ( same as used in registering)
          }  
          else{
              $this->view('paramedical/articles');
          } 
    }
    ///////////////////////////////////////////////
    public function dschedule(){
        $this->view('para/dschedule');

    }
    public function wschedule(){
        $this->view('para/wschedule');
        
    }
    public function schedule(){
        if($this->getSession('userRole')==3){
           $this->redirect('paramedical/wschedule');
       
        } 
        if($this->getSession('userRole')==5){
           $this->redirect('paramedical/dschedule');
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
        $userid = $this->getSession('userId');
        
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $data=$this->paramedicalModel->getProfile($userid);
         
          $this->view('para/profile',$data);
        }
        else{
            $this->view('404');
        }

    }
    public function editprofile(){
        $userid = $this->getSession('userId');
        if($this->getSession('userRole')==3 || $this->getSession('userRole')==5){
          $data=$this->paramedicalModel->getProfile($userid);
          $this->view('para/editprofile',$data);
        }
        else{
            $this->view('404');
        }

    }
    public function updateprofile(){
        $u = $this->getSession('userId');
        $e = $this->input('email');
        $h = $this->input('hospital');
        $p = $this->input('province');
        $d = $this->input('district');
       
        if($this->paramedicalModel->updateprofile($u,$e,$h,$p,$d)){
            $this->setFlash('updtpro', 'Profile updated!');
            $this->redirect('paramedical/profile');
         }
        else {
          //$this->view('para/editprofile',$data);
        }
    }

    public function acceptRequest()
    {
        $c=$this->input('id');
        $userid = $this->getSession('userId');
        if($this->paramedicalModel->acceptRequest($c,$userid)){
            $this->redirect('paramedical/index');
            }

        
        else{
            $this->redirect('paramedical/index');

        }   

    }
  

}
?>    