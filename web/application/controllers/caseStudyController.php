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
        $data2=[$data,$id];
        $this->view("casestudy/main",$data2);      

    }
    public function pre($id){
        $data=$this->caseStudyModel->getMedicine($id);  
        $data2=$this->caseStudyModel->getImages($id);  
        $data3=$this->caseStudyModel->getWorkout($id); 
        $data4=$this->caseStudyModel->getDiet($id);
        $top=array_slice($data, 0, 3);
        $top2=array_slice($data2, 0, 3);
        $top3=array_slice($data3, 0, 3);
        $top4=array_slice($data4, 0, 3);
  
        $dataA=[$top,$id,$top3,$top4,$top2];
      
        $this->view("casestudy/pre",$dataA);
      

    }
    public function post($id){
        // $data=$this->caseStudyModel->getAdvices($id);  
        // $data2=$this->caseStudyModel->getImages($id);  
        // $data3=$this->caseStudyModel->getWorkout($id); 
        // $data4=$this->caseStudyModel->getDiet($id);
        // $top=array_slice($data, 0, 3);
        // $top2=array_slice($data2, 0, 3);
        // $top3=array_slice($data3, 0, 3);
        // $top4=array_slice($data4, 0, 3);
        // $dataA=[$top,$id,$top2,$top3,$top4];
        $this->view("casestudy/post");
      
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
    public function medicine($id){
        $data=$this->caseStudyModel->getMedicine($id);
        $this->view('casestudy/medicine',[$data,$id]);

    }
    public function addMedicine($id){   
        $data = [

            'heading'        => $this->input('title'),
            'description'    => $this->input('description'),
            'id' => $id
          
        ];
        if(count(array_filter($data)) == 0){
            //$this->caseStudyModel->editMedicine($id,$data); 
            $this->view('casestudy/forms/pre' . $id); 
            
        }
        else{
            $this->caseStudyModel->addMedicine($data);
            $this->redirect('caseStudyController/medicine/'.$id);     
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
        $this->view('casestudy/advices');

    }
    public function workoutsingle($id){
        $data3=$this->caseStudyModel->getWorkoutById($id); 
        $this->view('casestudy/view-workout-schedule',$data3);

    }
    public function dietsingle($id){
        $data=$this->caseStudyModel->getDietById($id); 
        $this->view('casestudy/view-diet-schedule',$data);

    }
    public function addworkout(){
        $this->view('casestudy/forms/add-workout');

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
       

    }



    
   
   
   

}
?>    