<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class caseStudyModel extends database
{
    public function getCaseStudybyId($id){

        if($this->Query("SELECT count(*) AS COUNT1 FROM athlete_profile union all SELECT count(*) AS COUNT1 FROM case_study where doctor_id=? union all SELECT count(*) AS COUNT1 FROM athlete_reported_injury where doctor_id=?",[$id,$id])){
            $data = $this->fetchall();
            return $data;

        }

    }  
    
    public function access($id,$userId){
        // $q1=$this->Query("SELECT * from case_study where doctor_id=?",[$userId]);
        // $count1=$q1->rowCount();
        // $q1=$this->Query("SELECT * from case_study where doctor_id=?",[$userId]);
        // if(){
        //     $row=$this->
        //     if()

        // }
    } 
    // public function getForumItemns($id){
    //     if($this->Query("SELECT * from athlete_reported_injury ")){

    //     }
    // }

    


//Case Study Report
    
    //Case Study Report - getReportDetails
     public function getReportDetails($id){
        if($this->Query("SELECT a.full_name AS aname,d.full_name AS dname, i.id, i.injury, c.title,c.description,c.datetime from case_study c inner join athlete_profile a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid inner join injury i on c.injury_id =i.id where c.case_id=?",[$id])){
            $data=$this->fetch();
            $a=explode(" ",$data->datetime);
            $data->datetime=$a[0];
            return $data;
        }
    }

    //Case Study Report - Get physiotherapist
    public function getReportDetailsPhysiotherapist($id){
        if($this->Query("SELECT x.full_name from case_study c inner join paramedical_case_study p on p.case_study_id=c.case_id inner join paramedical_profile x on p.paramedical_id=x.uuid inner join application_user a on a.uuid=x.uuid where x.uuid= p.paramedical_id && a.role_id=3")){
            $data=$this->fetch();
            return $data;
        }
   }

   //Case Study Report - Get Nutritionist
   public function getReportDetailsNutritionist($id){
    if($this->Query("SELECT x.full_name from case_study c inner join paramedical_case_study p on p.case_study_id=c.case_id inner join paramedical_profile x on p.paramedical_id=x.uuid inner join application_user a on a.uuid=x.uuid where x.uuid= p.paramedical_id && a.role_id=5")){
        $data=$this->fetch();
        return $data;
    }
}


     //Case Study Report - getReportMedicine
     public function getReportMedicine($id){
        $m=[];
        if($this->Query("SELECT id,heading,description,datetime FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[1,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }

     //Case Study Report - getReportPreAttachments
     public function getReportPreAttachments($id){
        $m=[];
        if($this->Query("SELECT c.id,c.heading,c.description,a.link FROM case_study_records c left join case_study_attachements a on c.id=a.case_study_record where c.type_id=? && c.case_id=? && c.state=?",[5,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;


    }

     //Case Study Report - getReportPreWorkout
     public function getReportPreWorkout($id)
    {
        $data=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join workout_schedule d on s.id=d.schedule_id where s.case_study_id =? && d.state=?",[$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                foreach ($row as $ob)
                {
                    $events=[];
                    if($this->Query("SELECT title,reps,description,time FROM workout_events where workout_schdule_id =?",[$ob->id])){
                        if($this->rowCount() > 0 ){
                            $row = $this->fetchall();
                            foreach ($row as $obj)
                            {
                                array_push($events,$obj);
                                 
                            }    
                   
            
                        } 
            
                    }
                    $ob->events=$events;
                    array_push($data,$ob);         
                }    

            } else {
                return ['status' => 'n'];
            }

        }
        return $data;
        
    }


     //Case Study Report - getReportPreDiet
     public function getReportPreDiet($id)
     {
         $data=[];
         if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join diet_schedule d on s.id=d.schedule_id where s.case_study_id =? && d.state=?",[$id,0])){
             if($this->rowCount() > 0 ){
                 $row = $this->fetchall();
                 foreach ($row as $ob)
                 {
                     $events=[];
                     if($this->Query("SELECT title,amount,descritption FROM diet_events where diet_id =?",[$ob->id])){
                         if($this->rowCount() > 0 ){
                             $row = $this->fetchall();
                             foreach ($row as $obj)
                             {
                                 array_push($events,$obj);
                                  
                             }    
                    
             
                         } 
             
                     }
                     $ob->events=$events;
                     array_push($data,$ob);         
                 }    
 
             } else {
                 return ['status' => 'n'];
             }
 
         }
         return $data;
         
     }

     //Case Study Report - getReportAdvices
     public function getReportAdvices($id){
        $m=[];
        if($this->Query("SELECT heading,description,datetime FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[2,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


     //Case Study Report - getReportPostAttachments
     public function getReportPostAttachments($id){
        $m=[];
        if($this->Query("SELECT c.id,c.heading,c.description,a.link FROM case_study_records c left join case_study_attachements a on c.id=a.case_study_record where c.type_id=? && c.case_id=? && c.state=?",[5,$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


    //Case Study Report - getReportPostWorkout
    public function getReportPostWorkout($id)
    {
        $data=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join workout_schedule d on s.id=d.schedule_id where s.case_study_id =? && d.state=?",[$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                foreach ($row as $ob)
                {
                    $events=[];
                    if($this->Query("SELECT title,reps,description,time FROM workout_events where workout_schdule_id =?",[$ob->id])){
                        if($this->rowCount() > 0 ){
                            $row = $this->fetchall();
                            foreach ($row as $obj)
                            {
                                array_push($events,$obj);
                                 
                            }    
                   
            
                        } 
            
                    }
                    $ob->events=$events;
                    array_push($data,$ob);         
                }    

            } else {
                return ['status' => 'n'];
            }

        }
        return $data;
        
    }

     //Case Study Report - getReportPostDiet
     public function getReportPostDiet($id)
     {
         $data=[];
         if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join diet_schedule d on s.id=d.schedule_id where s.case_study_id =? && d.state=?",[$id,1])){
             if($this->rowCount() > 0 ){
                 $row = $this->fetchall();
                 foreach ($row as $ob)
                 {
                    $events=[];
                     if($this->Query("SELECT title,amount,descritption FROM diet_events where diet_id =?",[$ob->id])){
                         if($this->rowCount() > 0 ){
                             $row = $this->fetchall();
                             foreach ($row as $obj)
                             {
                                 array_push($events,$obj);
                                  
                             }    
                    
             
                         } 
             
                     }
                     $ob->events=$events;
                     array_push($data,$ob);         
                 }    
 
             } else {
                 return ['status' => 'n'];
             }
 
         }
         return $data;
         
     }



     //Case Study Report - getReportDoctorFeedback
     public function getReportDoctorFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.feedback,f.datetime,a.role_id FROM feedback f inner join case_study_type t on f.type=t.id inner join application_user a on a.uuid=f.user_id where f.case_id=? && a.role_id=? order by datetime desc",[$id,2])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }

    //Case Study Report - getReportPhysioFeedback
    public function getReportPhysioFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.feedback,f.datetime,a.role_id FROM feedback f inner join case_study_type t on f.type=t.id inner join application_user a on a.uuid=f.user_id where f.case_id=? && a.role_id=? order by datetime desc",[$id,3])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }

    //Case Study Report - getReportNutriFeedback
    public function getReportNutriFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.feedback,f.datetime,a.role_id FROM feedback f inner join case_study_type t on f.type=t.id inner join application_user a on a.uuid=f.user_id where f.case_id=? && a.role_id=? order by datetime desc",[$id,5])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }

    //Case Study Report - getReportAthleteFeedback
    public function getReportAthleteFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.feedback,f.datetime,a.role_id FROM feedback f inner join case_study_type t on f.type=t.id inner join application_user a on a.uuid=f.user_id where f.case_id=? && a.role_id=? order by datetime desc",[$id,4])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//End Case Study Report Queries




//Updates

    public function getUpdates($id){
       if($this->Query("SELECT c.case_id,t.name,u.username,c.datetime,c.heading FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid where c.case_id=? order by datetime desc",[$id])){
           $data = $this->fetchall();
           return $data;
         }
     }

//Case study Details Part

     public function getCaseStudyDetails($id){
        if($this->Query("SELECT a.full_name,c.title,c.description from case_study c inner join athlete_profile a on c.athlete_id=a.uuid where c.case_id=?",[$id])){
            $data=$this->fetch();
            return $data;
        }
    }


//Add Workout - Pre

     public function addworkout($data){  
        $y=[$data[0]['id'],6];
        
        if($this->Query("INSERT into schedule (case_study_id,type) VALUES (?,?)",$y)){
            if($this->Query("SELECT id FROM schedule where id=(select max(id) from schedule)")){
                if($this->rowCount() > 0 ){
                    $row = $this->fetch();
                    $id = $row->id;
                    $x=[$id,$data[0]['title'],$data[0]['description'],0];
                    if($this->Query("INSERT into workout_schedule (schedule_id,title,description,state) VALUES (?,?,?,?)",$x)){
                        if($this->Query("SELECT id FROM workout_schedule where id=(select max(id) from workout_schedule)")){
                               $row2 = $this->fetch();
                               $id2= $row2->id;
                              
                               for ($i=1;$i<count($data);$i++){
                                    $z=[$id2,$data[$i]['title'],$data[$i]['description'],$data[$i]['time'],$data[$i]['reps']];
                                    if($this->Query("INSERT into workout_events (workout_schdule_id,title,description,time,reps) VALUES (?,?,?,?,?)",$z)){
                                       
                                    }
                                 

                               }
                               return true;

                        }
                    }
                    
                }


            }
 
            return true;
        }

     }



//Add Workout - Post

public function addpostworkout($data){  
    $y=[$data[0]['id'],6];
    
    if($this->Query("INSERT into schedule (case_study_id,type) VALUES (?,?)",$y)){
        if($this->Query("SELECT id FROM schedule where id=(select max(id) from schedule)")){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $id = $row->id;
                $x=[$id,$data[0]['title'],$data[0]['description'],1];
                if($this->Query("INSERT into workout_schedule (schedule_id,title,description,state) VALUES (?,?,?,?)",$x)){
                    if($this->Query("SELECT id FROM workout_schedule where id=(select max(id) from workout_schedule)")){
                           $row2 = $this->fetch();
                           $id2= $row2->id;
                          
                           for ($i=1;$i<count($data);$i++){
                                $z=[$id2,$data[$i]['title'],$data[$i]['description'],$data[$i]['time'],$data[$i]['reps']];
                                if($this->Query("INSERT into workout_events (workout_schdule_id,title,description,time,reps) VALUES (?,?,?,?,?)",$z)){
                                   
                                }
                             

                           }
                           return true;

                    }
                }
                
            }


        }

        return true;
    }

 }


//Add Diet - Pre

     public function adddiet($data){  
         $y=[$data[0]['id'],5];
       
        if($this->Query("INSERT into schedule (case_study_id,type) VALUES (?,?)",$y)){
            if($this->Query("SELECT id FROM schedule where id=(select max(id) from schedule)")){
                if($this->rowCount() > 0 ){
                    $row = $this->fetch();
                    $id = $row->id;
                    $x=[$id,$data[0]['title'],$data[0]['description'],0];
                    if($this->Query("INSERT into diet_schedule (schedule_id,title,description,state) VALUES (?,?,?,?)",$x)){
                        if($this->Query("SELECT id FROM diet_schedule where id=(select max(id) from diet_schedule)")){
                               $row2 = $this->fetch();
                               $id2= $row2->id;
                              
                               for ($i=1;$i<count($data);$i++){
                                    $z=[$id2,$data[$i]['title'],$data[$i]['description'],$data[$i]['time']];
                                    if($this->Query("INSERT into diet_events (diet_id,title,descritption,amount) VALUES (?,?,?,?)",$z)){
                                       
                                    }
                                 

                               }
                               return true;

                        }
                    }
                    
                }


            }
           
            return true;
        }

    }
    

//Add Diet - Post

public function addpostdiet($data){  
    $y=[$data[0]['id'],5];
  
   if($this->Query("INSERT into schedule (case_study_id,type) VALUES (?,?)",$y)){
       if($this->Query("SELECT id FROM schedule where id=(select max(id) from schedule)")){
           if($this->rowCount() > 0 ){
               $row = $this->fetch();
               $id = $row->id;
               $x=[$id,$data[0]['title'],$data[0]['description'],1];
               if($this->Query("INSERT into diet_schedule (schedule_id,title,description,state) VALUES (?,?,?,?)",$x)){
                   if($this->Query("SELECT id FROM diet_schedule where id=(select max(id) from diet_schedule)")){
                          $row2 = $this->fetch();
                          $id2= $row2->id;
                         
                          for ($i=1;$i<count($data);$i++){
                               $z=[$id2,$data[$i]['title'],$data[$i]['description'],$data[$i]['time']];
                               if($this->Query("INSERT into diet_events (diet_id,title,descritption,amount) VALUES (?,?,?,?)",$z)){
                                  
                               }
                            

                          }
                          return true;

                   }
               }
               
           }


       }
      
       return true;
   }

}



//Medicine

     public function getMedicine($id){
        $m=[];
        if($this->Query("SELECT id,heading,description,datetime FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[1,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//Advice

    public function getAdvice($id){
        $m=[];
        if($this->Query("SELECT id, heading,description,datetime FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[2,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//Get feedback - Pre 

    public function getFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.id, f.feedback,f.datetime,f.id FROM feedback f inner join case_study_type t on f.type=t.id where f.case_id=? && f.state=? order by datetime desc",[$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//Get feedback - Post

    public function getPostFeedback($id){
        $m=[];
        if($this->Query("SELECT t.name, f.id, f.feedback,f.datetime FROM feedback f inner join case_study_type t on f.type=t.id where f.case_id=? && f.state=? order by datetime desc",[$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }
    

  

//Delete Advice

    public function deleteAdvice($id)
    {
        if($this->Query("DELETE from case_study_records where id=?",[$id]))
        {
            if($this->rowCount()>0){
                return true; 
            }  
        }  
        
        return false;

}


//Delete Medicine

    public function deleteMedicine($id)
    {
        if($this->Query("DELETE from case_study_records where id=?",[$id]))
        {
            if($this->rowCount()>0){
                return true; 
            }  
        }  
        
        return false;

    }


//Delete Feedback 

public function deleteFeedback($id)
{
    if($this->Query("DELETE from feedback where id=?",[$id]))
    {
        if($this->rowCount()>0){
            return true; 
        }  
    }  
    
    return false;

}



//Workout - Pre

public function getWorkout($id){
        $m=[];
        if($this->Query("SELECT w.id,w.title,w.description FROM workout_schedule w inner join schedule s on w.schedule_id=s.id where s.case_study_id =? && w.state=?",[$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }



//Workout - Post

    public function getPWorkout($id){
        $m=[];
        if($this->Query("SELECT w.id,w.title,w.description FROM workout_schedule w inner join schedule s on w.schedule_id=s.id where s.case_study_id =? && w.state=?",[$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }

 
    
//Diet - Pre

    public function getDiet($id){
        $m=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM diet_schedule d inner join schedule s on d.schedule_id=s.id where s.case_study_id =? && d.state=?",[$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                    
                }    
    

            } else {
                return $m;
            }

        }
    return $m;

}


//Diet - Post

    public function getPDiet($id){
        $m=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM diet_schedule d inner join schedule s on d.schedule_id=s.id where s.case_study_id =? && d.state=?",[$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//Images - Pre

    public function getImages($id){
        $m=[];
        if($this->Query("SELECT c.id,c.heading,c.description,a.link FROM case_study_records c left join case_study_attachements a on c.id=a.case_study_record where c.type_id=? && c.case_id=? && c.state=?",[5,$id,0])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;


    }



//Images - Post

    public function getPostImages($id){
        $m=[];
        if($this->Query("SELECT c.id,c.heading,c.description,a.link FROM case_study_records c left join case_study_attachements a on c.id=a.case_study_record where c.type_id=? && c.case_id=? && c.state=?",[5,$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;


    }

   

//Add Medicine

    public function addMedicine($data){
        $x=[$data['id'],1,$data['uid'],$data['heading'],$data['description'],0];
        if($this->Query("INSERT into case_study_records (case_id,type_id,recording_user_id,heading,description,state) VALUES (?,?,?,?,?,?)",$x)){
            return true;
        }
        return false;

    }
  


//Add Advice

    public function addAdvice($data){
        $x=[$data['id'],2,$data['uid'],$data['heading'],$data['description'],0];
        if($this->Query("INSERT into case_study_records (case_id,type_id,recording_user_id,heading,description,state) VALUES (?,?,?,?,?,?)",$x)){
            return true;
        }
        return false;

    }
  

//Add Feedback - Pre

    public function addFeedbackPre($data){
        $x=[$data['type'],$data['feedback'],$data['id'],$data['uid'],0];
        if($this->Query("INSERT into feedback (type,feedback,case_id,user_id,state) VALUES (?,?,?,?,?)",$x)){
            return true;
        }
        return false;

    }


//Add Feedback - Post

public function addFeedbackPost($data){
    $x=[$data['type'],$data['feedback'],$data['id'],$data['uid'],1];
    if($this->Query("INSERT into feedback (type,feedback,case_id,user_id,state) VALUES (?,?,?,?,?)",$x)){
        return true;
    }
    return false;

}


//Diet Schedule Events

public function getDietById($id){
        $m=[];
        if($this->Query("SELECT e.id,e.title,e.amount,e.descritption, d.title AS htitle,d.description AS hdesc FROM diet_events e inner join diet_schedule d on d.id=e.diet_id where d.id=? ",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }


//Workout Schedule Events  
  
    public function getWorkoutById($id){
        $m=[];
        if($this->Query("SELECT e.id,e.title,e.description,e.reps,time,d.title AS htitle, d.description AS hdesc FROM workout_events e inner join workout_schedule d on d.id=e.workout_schdule_id where d.id=? ",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }







}

?>