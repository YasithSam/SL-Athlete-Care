<?php

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

    public function getUpdates($id){
       if($this->Query("SELECT c.case_id,t.name,u.username,c.datetime,c.heading FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid where c.case_id=? order by datetime desc",[$id])){
           $data = $this->fetchall();
           return $data;
         }
     }
     public function addworkout($data){


     }
     public function adddiet($data){

    }
    
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
    public function getAdvice($id){
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
    public function addMedicine($id,$data){
        $x=[$data['id'],$data['heading'],$data['description'],0];
        if($this->Query("INSERT into case_study_records (case_id,heading,description,state) VALUES (?,?,?,?)",$x)){
            return true;
        }
        return false;

    }
    public function getDietById($id){
        $m=[];
        if($this->Query("SELECT id,title,description FROM diet_events where diet_id=? ",[$id])){
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
    public function getWorkoutById($id){
        $m=[];
        if($this->Query("SELECT id,title,description,reps,time FROM workout_events where workout_schdule_id=? ",[$id])){
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