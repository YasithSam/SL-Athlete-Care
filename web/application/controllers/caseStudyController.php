<?php

class caseStudyController extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
       $this->caseStudyModel = $this->model('caseStudyModel');

    }

    public function index($id){
        $data=$this->caseStudyModel->getUpdates($id);
        $data3=$this->caseStudyModel->getCaseStudyDetails($id);
        $data2=[$data,$id,$data3];
        $this->view("casestudy/main",$data2);      
    }

    public function pre($id){
        $data=$this->caseStudyModel->getMedicine($id);  
        $data2=$this->caseStudyModel->getImages($id);  
        $data3=$this->caseStudyModel->getWorkout($id); 
        $data4=$this->caseStudyModel->getDiet($id);
        $data5=$this->caseStudyModel->getCaseStudyDetails($id);
        $data6=$this->caseStudyModel->getFeedback($id);

        $top=array_slice($data, 0, 3);
        $top2=array_slice($data2, 0, 3);
        $top3=array_slice($data3, 0, 3);
        $top4=array_slice($data4, 0, 3);
        $top6=array_slice($data6, 0, 3);
  
        $dataA=[$top,$id,$top3,$top4,$top2,$data5,$top6];
      
        $this->view("casestudy/pre",$dataA);
      

    }

    public function post($id){
        $data=$this->caseStudyModel->getAdvice($id);  
        $data2=$this->caseStudyModel->getPostImages($id);  
        $data3=$this->caseStudyModel->getPWorkout($id); 
        $data4=$this->caseStudyModel->getPDiet($id);
        $data5=$this->caseStudyModel->getCaseStudyDetails($id);
        $data6=$this->caseStudyModel->getPostFeedback($id);

        $top=array_slice($data, 0, 3);
        $top2=array_slice($data2, 0, 3);
        $top3=array_slice($data3, 0, 3);
        $top4=array_slice($data4, 0, 3);
        $top5=array_slice($data6, 0, 3);

        $dataA=[$top,$id,$top3,$top4,$data5,$top5,$top2];

        $this->view("casestudy/post" ,$dataA);
      
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
    public function image($id){
      $data2=$this->caseStudyModel->getImages($id);  
      $this->view('casestudy/images',[$data2,$id]);

    }
    public function diet($id){
        $data3=$this->caseStudyModel->getDiet($id); 

        $this->view('casestudy/diet',[$data3,$id]);

    }

//post images

    public function postimage($id){
        $data2=$this->caseStudyModel->getPostImages($id);  
        $this->view('casestudy/postimages',[$data2,$id]);

     }

//post diet

    public function pdiet($id){
        $data3=$this->caseStudyModel->getPDiet($id); 

        $this->view('casestudy/pdiet',[$data3,$id]);

    }

//post workout

    public function pworkout($id){
        $data3=$this->caseStudyModel->getPWorkout($id); 
        $this->view('casestudy/pworkout',[$data3,$id]);

    }


    public function medicine($id){
        $data=$this->caseStudyModel->getMedicine($id);
        $this->view('casestudy/medicine',[$data,$id]);

    }
    public function addMedicine($id){
        $uid=$this->getSession('userId');
        $data = [

            'heading'        => $this->input('title'),
            'description'    => $this->input('description'),
            'id' => $id,
            'uid'=>$uid
          
        ];
        if(!empty($data['heading']) && !empty($data['description'])){
            if($this->caseStudyModel->addMedicine($data)){
                
                $this->redirect('caseStudyController/medicine/'.$id);     
            }

        } 
        else{
            $this->redirect('caseStudyController/pre/'.$id);   

        }
      
       

    }

    //Feedback - Pre
    public function feedback($id){
        $data6=$this->caseStudyModel->getFeedback($id);
        $this->view('casestudy/feedback',[$data6,$id]);

    }

    //Feedback - Post
    public function feedback_post($id){
        $data6=$this->caseStudyModel->getPostFeedback($id);
        $this->view('casestudy/feedback_post',[$data6,$id]);

    }

 
  






    public function addAdvice($id){
        
        $uid=$this->getSession('userId');
        $data = [

            'heading'        => $this->input('title'),
            'description'    => $this->input('description'),
            'id' => $id,
            'uid'=>$uid
          
        ];
        if(!empty($data['heading']) && !empty($data['description'])){
            if($this->caseStudyModel->addAdvice($data)){
                
                $this->redirect('caseStudyController/advices/'.$id);     
            }

        } 
        else{
            $this->redirect('caseStudyController/post/'.$id);   

        }   

    }
   


    public function editAdvices($id){   
        $data = [

            'heading'        => $this->input('title'),
            'description'    => $this->input('description'),
          
        ];
        if(count(array_filter($data)) == 0){
            //$this->caseStudyModel->editMedicine($id,$data); 
            $this->view('casestudy/forms/update-advice'); 
            
        }
        else{
            $this->caseStudyModel->updateMedicine($id);
            $this->redirect('caseStudyController/advices/'.$id);     
        } 

    }

    public function workout($id){
        $data3=$this->caseStudyModel->getWorkout($id); 
        $this->view('casestudy/workout',[$data3,$id]);

    }
    public function advices($id){
        $data3=$this->caseStudyModel->getAdvice($id);
        $this->view('casestudy/advices',[$data3,$id]);

    }
    
    public function workoutsingle($id){
        $data3=$this->caseStudyModel->getWorkoutById($id); 
        $this->view('casestudy/view-workout-schedule',$data3);

    }
    public function dietsingle($id){
        $data=$this->caseStudyModel->getDietById($id); 
        $this->view('casestudy/view-diet-schedule',$data);

    }
    public function addworkout($id){

        $this->view('casestudy/forms/add-workout',$id);

    }

    public function adddiet(){
        $this->view('casestudy/forms/add-diet');

    }

    public function addworkoutlist($id){
        $userData = [

            'title'        => $this->input('title'),
            'description'      => $this->input('description'),
            'itemtitle'        => $this->input('itemheading'),
            'itemdescription'  => $this->input('itemdesc'),
            'time'    => $this->input('time'),
            'reps' => $this->input('reps'),
            'id' => $id
        ];
        $data=$this->caseStudyModel->addworkout($userData); 
        if($data){
            $this->redirect('caseStudyController/workout/'.$id);     
        }
        $this->view('casestudy/forms/add-workout');

    }

    public function adddietlist($id){
        $userData = [

            'title'        => $this->input('title'),
            'description'      => $this->input('description'),
            'itemtitle'        => $this->input('itemheading'),
            'itemdescription'  => $this->input('itemdesc'),
            'amount'  => $this->input('amount'),
            'id' => $id
        ];
        $data=$this->caseStudyModel->addDiet($userData); 
        if($data){
            $this->redirect('caseStudyController/diet/'.$id);     
        }
       
        $this->view('casestudy/forms/add-diet');
    }



    
   
   
   

}
?>    