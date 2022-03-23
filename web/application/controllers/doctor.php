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
            $data3 = $this->doctorModel->getuserName($userId);  
            $data4 = $this->doctorModel->getNotifications($userId);  
            $dataArray=[$data,$x,$data3,$data4];
            
            $this->view("doctor/home",$dataArray);
              
        }
        else{
            $this->view('404');
        }
    }

    public function patients(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getPatients();
           
           
            $this->view('doctor/patients',[$data,$data]);
        }
        else{
            $this->view('404');
        }
      
    }

    public function patientsFilter(){
        $userId = $this->getSession('userId');
        $p=$this->input('patient');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getPatientsFilter($p);
            $data2=$this->doctorModel->getPatients();
            $this->view('doctor/patients',[$data2,$data]);
        }
        else{
            $this->view('404');
        }
      
    }

    public function profile(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getProfile($userId);   
            $data2=$this->doctorModel->getCaseStudyProfile($userId); 
            $data3= $this->doctorModel->getSelectedInjuries($userId); 
            $this->view('doctor/profile',[$data,$data2,$data3]);
        }
        else{
            $this->view('404');
        }

    }


    //get doctor profile - Update
    public function editprofile(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getProfile($userId);
            $this->view("doctor/editprofile",$data);
             
        }
        else{
            $this->view('404');
        }
    }

    public function athlete($uuid){
        $id=$uuid;
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getAthlete($id);
            $data2=$this->doctorModel->getAthleteSport($id);
            $data3=$this->doctorModel->getAthleteCS($id);
            $this->view('doctor/athlete',[$data,$data2,$data3]);
        }
        else{
            $this->view('404');
        }
    }
    public function casestudyform(){
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getInjuryData();
            $data2=$this->doctorModel->getAthleteData();
            $this->view('doctor/addCS',[$data,$data2]);
        }
        else{
            $this->view('404');
        }

    }
    public function addcasestudy(){
        $userId = $this->getSession('userId');
        $data = [

            'title'        => $this->input('title'),
            'description'  => $this->input('description'),
            'athlete'       => $this->input('athlete'),
            'injury'        => $this->input('injury'),
            'error'    =>'',
            'userid'  => $userId
   
        ];
        
        if($this->doctorModel->createCaseStudy($data)){
            $this->setFlash('addcs', 'New case study record added successfully!');
            $this->redirect('doctor/profile');
     
        }
        else{
            $userdata['error']="Couldn't add case study";
            $this->view('doctor/casestudyform');
            
        }


       
    }

    public function addpara(){
        $c=$this->input('cid');
        $result = substr($c, 4, strlen($c)-1); 
        $data = [

            'phid'        => $this->input('phy'),
            'nid'           => $this->input('nut'),
            'caseid'       => $result,
            'error'=>''
        ];
        
        /*if(empty($data['nid']) && empty($data['phid'])){
            $data['error']="Couldn't assign paramedical";
            $this->view('doctor/addPara',$data); 

        } */
        
        if($this->doctorModel->AssignPara($data)){
            $this->setFlash('assign', 'Paramedical user assigned successfully!');
            $this->redirect('doctor/profile');
        }
        else{
          //  $data['error']="Couldn't assign paramedical";
          //  $this->view('doctor/addPara',$data);         
        }

    }
    public function addparaform($id){
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getNutritionist();
            $data2=$this->doctorModel->getPhysio();
            $this->view('doctor/addPara',[$data,$data2,$id]);
        }
        else{
            $this->view('404');
        }

    }

    public function articles(){
        $userid = $this->getSession('userId');
        if($this->getSession('userRole')==2){
            $data=$this->doctorModel->getArticles($userid);
            $this->view('doctor/articles',$data);
        }  
        else{
            $this->view('404');
        }
    }

    public function addarticle(){
        if($this->getSession('userRole')==2){
            $this->view('doctor/addArticle');
        }
        else{
            $this->view('404');
        }
    }

    public function addnewarticle(){
        $userid = $this->getSession('userId');
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];    
        if(empty($filename)){$filename="article.jpg";}
        $userData = [
            'heading'        => $this->input('heading'),
            'content'           => $this->input('content'),
            'category'           => $this->input('category'),
            'userid' => $userid,
            'filename' => $filename,
        ];
        move_uploaded_file($tempname,"../../web/public/assets/dbimages/$filename");

        if($this->doctorModel->createArticle($userData)){
           
            $this->setFlash('addart', 'The article will be processed in a few hours!');
            $this->redirect('doctor/articles');
         }
        else {
        $this->view('doctor/addArticle',$userData);
        }
    }
    public function updateprofile(){
        $u = $this->getSession('userId');
       
        $i = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
       
        $e = $this->input('email');
        $h = $this->input('hospital');
        $p = $this->input('province');
        $d = $this->input('district');
       
        move_uploaded_file($image_tmp,"../../web/public/assets/dbimages/$i");


        if($this->doctorModel->updateprofile($u,$i,$e,$h,$p,$d)){
            $this->setFlash('updtpro', 'Profile updated!');
            $this->redirect('doctor/profile');
         }
        else {
        $this->view('doctor/editprofile');
        }
    }


    public function deletearticle($id)
    {
       
        if($this->doctorModel->deleteArticle($id)){
            $this->setFlash('dltart', 'Article deleted successfully!');
            $this->redirect('doctor/articles');
            // add user has succesfully deleted message ( same as used in registering)
          }  
          else{
              $this->view('doctor/articles');
          } 
    }


    public function reviews(){
        $userId = $this->getSession('userId');
           if($this->getSession('userRole')==2){
           $data=$this->doctorModel->getReviews($userId);
           $data2=$this->doctorModel->getCount2();
           $this->view('doctor/reviewssection',[$data,$data2]);
       }
       else{
           $this->view('404');
       }
   }
    
    public function casestudy(){
        $userId = $this->getSession('userId');
        if($this->getSession('userRole')==2){   
          $data=$this->doctorModel->getCaseStudy();
         
          $this->view('doctor/casestudy',$data);
        } 
        else{
            $this->view('404');
        } 
    }
    public function filter(){
        $d=$this->input('doctors');
        $i=$this->input('injury');
       
        if($this->getSession('userRole')==2){   
          $data=$this->doctorModel->getCaseStudyFilter($d,$i);
        
          $this->view('doctor/casestudy',$data);
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


    public function reviewapprove(){
        $id=$this->input('id');
        if($this->getSession('userRole')==2){
        if ($this->doctorModel->reviewapprove($id)){
          $this->setFlash('approveart', 'Review approved!');
          $this->redirect('doctor/reviews');
        } 
        } 
        else{
            $this->view('doctor/reviews');
        }
    }
    public function reviewreject(){
        $id=$this->input('postid');
        $r=$this->input('feedback');
        if($this->getSession('userRole')==2){
        if ($this->doctorModel->reviewreject($id,$r)){
          $this->setFlash('rejecteart', 'Review removed!');
          $this->redirect('doctor/reviews');
        } 
        } 
        else{
            $this->view('doctor/reviews');
        }
    }

    
    
   
   
   

}
?>    