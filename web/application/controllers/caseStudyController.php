<?php

class caseStudyController extends main{
    public function __construct(){
        if(!($this->getSession('userId'))){
            $this->redirect("accountController");
        }
        $this->helper("link");
    
       $this->caseStudyModel = $this->model('caseStudyModel');

    }


//Updates

    public function index($id){
        $data=$this->caseStudyModel->getUpdates($id);
        $data3=$this->caseStudyModel->getCaseStudyDetails($id);
        $data2=[$data,$id,$data3];
        $this->view("casestudy/main",$data2);      
    }


//Pre

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


//Post

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


//Report

     public function report($id){
        $data1=$this->caseStudyModel->getReportDetails($id);  
        $data2=$this->caseStudyModel->getReportMedicine($id);  
        $data3=$this->caseStudyModel->getReportPreAttachments($id); 
        $data4=$this->caseStudyModel->getReportPreWorkout($id);
        $data5=$this->caseStudyModel->getReportPreDiet($id);
        $data6=$this->caseStudyModel->getReportAdvices($id);
        $data7=$this->caseStudyModel->getReportPostAttachments($id); 
        $data8=$this->caseStudyModel->getReportPostWorkout($id);
        $data9=$this->caseStudyModel->getReportPostDiet($id);
        $data10=$this->caseStudyModel->getReportDoctorFeedback($id);
        $data11=$this->caseStudyModel->getReportPhysioFeedback($id);
        $data12=$this->caseStudyModel->getReportNutriFeedback($id);
        $data13=$this->caseStudyModel->getReportAthleteFeedback($id);
        $data14=$this->caseStudyModel->getReportDetailsPhysiotherapist($id);
        $data15=$this->caseStudyModel->getReportDetailsNutritionist($id);


        $dataA=[$data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $data13, $data14, $data15];

        $this->view("casestudy/report" ,$dataA);
       
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



//Medicine

    public function medicine($id){
        $data=$this->caseStudyModel->getMedicine($id);
        $this->view('casestudy/medicine',[$data,$id]);

    }


//Advice

public function advices($id){
    $data3=$this->caseStudyModel->getAdvice($id);
    $this->view('casestudy/advices',[$data3,$id]);

}


//Images - Pre

    public function image($id){
      $data2=$this->caseStudyModel->getImages($id);  
      $this->view('casestudy/images',[$data2,$id]);

    }

//Images - Post

    public function postimage($id){
        $data2=$this->caseStudyModel->getPostImages($id);  
        $this->view('casestudy/postimages',[$data2,$id]);

   }


//Workout - Pre

public function workout($id){
    $data3=$this->caseStudyModel->getWorkout($id); 
    $this->view('casestudy/workout',[$data3,$id]);

}


//Workout - Post

    public function pworkout($id){
        $data3=$this->caseStudyModel->getPWorkout($id); 
        $this->view('casestudy/pworkout',[$data3,$id]);

}


//Diet - Pre

    public function diet($id){
        $data3=$this->caseStudyModel->getDiet($id); 

        $this->view('casestudy/diet',[$data3,$id]);

    }


//Diet - Post

    public function pdiet($id){
        $data3=$this->caseStudyModel->getPDiet($id); 

        $this->view('casestudy/pdiet',[$data3,$id]);

}


//Workout Schedule Events

public function workoutsingle($id){
    $data3=$this->caseStudyModel->getWorkoutById($id); 
    $this->view('casestudy/view-workout-schedule',$data3);

}


//Diet Schedule Events

public function dietsingle($id){
    $data=$this->caseStudyModel->getDietById($id); 
    $this->view('casestudy/view-diet-schedule',$data);

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

 

//Delete Advice

    public function deleteAdvice()
    {
        $x=$this->input('id');
        $v=$this->input('case_id');
        if($this->caseStudyModel->deleteAdvice($x)){
            $this->redirect('caseStudyController/advices/'.$v);
            }

        
        else{
            $this->redirect('caseStudyController/advices/'.$v);

        }   
    }


//Delete Medicine

    public function deleteMedicine()
    {
        $c=$this->input('id');
        $z=$this->input('case_id');
        if($this->caseStudyModel->deleteMedicine($c)){
            $this->redirect('caseStudyController/medicine/'.$z);
            }

        
        else{
            $this->redirect('caseStudyController/medicine/'.$z);

        }   

    }
    

//Delete Feedback - Pre

public function deleteFeedback()
{
    $id=$this->input('id');
    $z=$this->input('case_id');
    if($this->caseStudyModel->deleteFeedback($id)){
        $this->redirect('caseStudyController/feedback/'.$z);
        }

    
    else{
        $this->redirect('caseStudyController/feedback/'.$z);

    }   

}

//Delete Feedback - Post

public function deletePostFeedback()
{
    $id=$this->input('id');
    $z=$this->input('case_id');
    if($this->caseStudyModel->deleteFeedback($id)){
        $this->redirect('caseStudyController/feedback_post/'.$z);
        }

    
    else{
        $this->redirect('caseStudyController/feedback_post/'.$z); 

    }   

}



//Add Medicine

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

  
//Add Advice

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


//Add Feedback - Pre

public function addFeedbackPre($id){
        
    $uid=$this->getSession('userId');
    $data = [

        'type'        => $this->input('type'),
        'feedback'    => $this->input('feedback'),
        'id' => $id,
        'uid'=>$uid
      
    ];
    if(!empty($data['type']) && !empty($data['feedback'])){
        if($this->caseStudyModel->addFeedbackPre($data)){
            
            $this->redirect('caseStudyController/pre/'.$id);     
        }

    } 
    else{
        $this->redirect('caseStudyController/pre/'.$id);   

    }   

}


//Add Feedback - Post

public function addFeedbackPost($id){
        
    $uid=$this->getSession('userId');
    $data = [

        'type'        => $this->input('type'),
        'feedback'    => $this->input('feedback'),
        'id' => $id,
        'uid'=>$uid
      
    ];
    if(!empty($data['type']) && !empty($data['feedback'])){
        if($this->caseStudyModel->addFeedbackPost($data)){
            
            $this->redirect('caseStudyController/post/'.$id);     
        }

    } 
    else{
        $this->redirect('caseStudyController/post/'.$id);   

    }   

}


/*Edit Advice*/

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


/*Add Workout - Pre*/

    public function addworkout($id){

        $this->view('casestudy/forms/add-workout',$id);

    }


/*Add Workout - Post*/

    public function addpostworkout($id){

        $this->view('casestudy/forms/add-post-workout',$id);

    }


//Add Diet - Pre

    public function adddiet($id){
        $this->view('casestudy/forms/add-diet',$id);

    }


//Add Diet - Post

public function addpostdiet($id){
    $this->view('casestudy/forms/add-post-diet',$id);

}



//Add Workout Schedule Events - Pre

    public function addworkoutlist($id){
        $x=$this->input('id');
        $mainData = [

            'title'        => $this->input('title'),
            'description'      => $this->input('description'),
            'id' => $this->input('id')
        ];
        $item1 = [

            'title'        => $this->input('itemheading1'),
            'description'      => $this->input('itemdesc1'),
            'time'        => $this->input('time1'),
            'reps'      => $this->input('reps1')
            
        ];
        $item2 = [

            'title'        => $this->input('itemheading2'),
            'description'      => $this->input('itemdesc2'),
            'time'        => $this->input('time2'),
            'reps'      => $this->input('reps2')
        ];
        $item3 = [

            'title'        => $this->input('itemheading3'),
            'description'      => $this->input('itemdesc3'),
            'time'        => $this->input('time3'),
            'reps'      => $this->input('reps3')
        ];
        $item4 = [
            'title'        => $this->input('itemheading4'),
            'description'      => $this->input('itemdesc4'),
            'time'        => $this->input('time4'),
            'reps'      => $this->input('reps4')
        ];
        $item5 = [

            'title'        => $this->input('itemheading5'),
            'description'      => $this->input('itemdesc5'),
            'time'        => $this->input('time5'),
            'reps'      => $this->input('reps5')
        ];

        $item6 = [

            'title'        => $this->input('itemheading6'),
            'description'      => $this->input('itemdesc6'),
            'time'        => $this->input('time6'),
            'reps'      => $this->input('reps6')
        ];

        $item7 = [

            'title'        => $this->input('itemheading7'),
            'description'      => $this->input('itemdesc7'),
            'time'        => $this->input('time7'),
            'reps'      => $this->input('reps7')
        ];

        $arr=[$mainData,$item1,$item2,$item3,$item4,$item5,$item6,$item7];
        $a=array_filter($arr, function($v){return array_filter($v) != array();});
       
        $data=$this->caseStudyModel->addworkout($a); 
        if($data){
            $this->redirect('caseStudyController/workout/'.$x);     
        }
        $this->view('casestudy/forms/add-workout');

    }


//Add Workout Schedule Events - Post

public function addpostworkoutlist($id){
    $x=$this->input('id');
    $mainData = [

        'title'        => $this->input('title'),
        'description'      => $this->input('description'),
        'id' => $this->input('id')
    ];
    $item1 = [

        'title'        => $this->input('itemheading1'),
        'description'      => $this->input('itemdesc1'),
        'time'        => $this->input('time1'),
        'reps'      => $this->input('reps1')
        
    ];
    $item2 = [

        'title'        => $this->input('itemheading2'),
        'description'      => $this->input('itemdesc2'),
        'time'        => $this->input('time2'),
        'reps'      => $this->input('reps2')
    ];
    $item3 = [

        'title'        => $this->input('itemheading3'),
        'description'      => $this->input('itemdesc3'),
        'time'        => $this->input('time3'),
        'reps'      => $this->input('reps3')
    ];
    $item4 = [
        'title'        => $this->input('itemheading4'),
        'description'      => $this->input('itemdesc4'),
        'time'        => $this->input('time4'),
        'reps'      => $this->input('reps4')
    ];
    $item5 = [

        'title'        => $this->input('itemheading5'),
        'description'      => $this->input('itemdesc5'),
        'time'        => $this->input('time5'),
        'reps'      => $this->input('reps5')
    ];

    $item6 = [

        'title'        => $this->input('itemheading6'),
        'description'      => $this->input('itemdesc6'),
        'time'        => $this->input('time6'),
        'reps'      => $this->input('reps6')
    ];

    $item7 = [

        'title'        => $this->input('itemheading7'),
        'description'      => $this->input('itemdesc7'),
        'time'        => $this->input('time7'),
        'reps'      => $this->input('reps7')
    ];

    $arr=[$mainData,$item1,$item2,$item3,$item4,$item5,$item6,$item7];
    $a=array_filter($arr, function($v){return array_filter($v) != array();});
   
    $data=$this->caseStudyModel->addpostworkout($a); 
    if($data){
        $this->redirect('caseStudyController/pworkout/'.$x);     
    }
    $this->view('casestudy/forms/add-post-workout');

}
  

//Add Diet Schedule Events - Pre

    public function adddietlist($id){
        $x=$this->input('id');
        $mainData = [

            'title'        => $this->input('title'),
            'description'      => $this->input('description'),
            'id' => $this->input('id')
        ];
        $item1 = [

            'title'        => $this->input('itemheading1'),
            'description'      => $this->input('itemdesc1'),
            'time'        => $this->input('time1'),
       
            
        ];
        $item2 = [

            'title'        => $this->input('itemheading2'),
            'description'      => $this->input('itemdesc2'),
            'time'        => $this->input('time2'),
     
        ];
        $item3 = [

            'title'        => $this->input('itemheading3'),
            'description'      => $this->input('itemdesc3'),
            'time'        => $this->input('time3'),
          
        ];
        $item4 = [
            'title'        => $this->input('itemheading4'),
            'description'      => $this->input('itemdesc4'),
            'time'        => $this->input('time4'),
            
        ];
        $item5 = [

            'title'        => $this->input('itemheading5'),
            'description'      => $this->input('itemdesc5'),
            'time'        => $this->input('time5'),
          
        ];

        $item6 = [

            'title'        => $this->input('itemheading6'),
            'description'      => $this->input('itemdesc6'),
            'time'        => $this->input('time6'),
          
        ];
        $item7 = [

            'title'        => $this->input('itemheading7'),
            'description'      => $this->input('itemdesc7'),
            'time'        => $this->input('time7'),
          
        ];

        $arr=[$mainData,$item1,$item2,$item3,$item4,$item5,$item6,$item7];
        $a=array_filter($arr, function($v){return array_filter($v) != array();});
       
        $data=$this->caseStudyModel->adddiet($a); 
        if($data){
            $this->redirect('caseStudyController/diet/'.$x);     
        }
       
        $this->view('casestudy/forms/add-diet');
    }


//Add Diet Schedule Events - Post

public function addpostdietlist($id){
    $x=$this->input('id');
    $mainData = [

        'title'        => $this->input('title'),
        'description'      => $this->input('description'),
        'id' => $this->input('id')
    ];
    $item1 = [

        'title'        => $this->input('itemheading1'),
        'description'      => $this->input('itemdesc1'),
        'time'        => $this->input('time1'),
   
        
    ];
    $item2 = [

        'title'        => $this->input('itemheading2'),
        'description'      => $this->input('itemdesc2'),
        'time'        => $this->input('time2'),
 
    ];
    $item3 = [

        'title'        => $this->input('itemheading3'),
        'description'      => $this->input('itemdesc3'),
        'time'        => $this->input('time3'),
      
    ];
    $item4 = [
        'title'        => $this->input('itemheading4'),
        'description'      => $this->input('itemdesc4'),
        'time'        => $this->input('time4'),
        
    ];
    $item5 = [

        'title'        => $this->input('itemheading5'),
        'description'      => $this->input('itemdesc5'),
        'time'        => $this->input('time5'),
      
    ];

    $item6 = [

        'title'        => $this->input('itemheading6'),
        'description'      => $this->input('itemdesc6'),
        'time'        => $this->input('time6'),
      
    ];
    $item7 = [

        'title'        => $this->input('itemheading7'),
        'description'      => $this->input('itemdesc7'),
        'time'        => $this->input('time7'),
      
    ];

    $arr=[$mainData,$item1,$item2,$item3,$item4,$item5,$item6,$item7];
    $a=array_filter($arr, function($v){return array_filter($v) != array();});
   
    $data=$this->caseStudyModel->addpostdiet($a); 
    if($data){
        $this->redirect('caseStudyController/pdiet/'.$x);     
    }
   
    $this->view('casestudy/forms/add-post-diet');
}


    
   
   
   

}
?>    