<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class caseStudyAPI extends database
{
    public function getCaseStudy($id){
        $current=[];
        $old=[];
        if($this->Query("SELECT case_id,title,description FROM case_study where athlete_id=? && status=?",[$id,1])){
   
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $current[$i]=$obj;
                    $i++;
                     
                }         
            
            } 
            if($this->Query("SELECT case_id,title,description FROM case_study where athlete_id=? && status=?",[$id,0])){
                if($this->rowCount() > 0 ){
                    $row=$this->fetchall();
                    $i=0;
                    foreach ($row as $obj)
                    {
                        $old[$i]=$obj;
                        $i++;
                         
                    }         
                
                } 
                
            }

            
        }
        else {
            return ['status' => 'n'];
        }
       
        return ['status'=>'ok','current'=>$current,'old'=>$old];

    }
    public function getById($id){
        if($this->Query("SELECT title,description FROM case_study where case_id=?",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $t = $row->title;
                $d=$row->description; 
                return ['status' => 'ok', 'data' => [$t,$d]];


            } else {
                return ['status' => 'n'];
            }

        }
    }
    public function getUpdates($id){
        $u=[];
        if($this->Query("SELECT t.name,u.username,c.datetime FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid where c.case_id=? order by datetime desc",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

        
    }
    public function getMedicine($id){
        $m=[];
        if($this->Query("SELECT heading,description FROM case_study_records where type_id=? && case_id=? order datetime desc",[1,$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$m];

    }
    public function getAdvices($id){
        $a=[];
        if($this->Query("SELECT heading,description,datetime FROM case_study_records where type_id=? && case_id=? order datetime desc",[2,$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $a[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$a];

    }
    public function getImages($id){
        $u=[];
        if($this->Query("SELECT heading,description,datetime FROM case_study_records where type_id=? && case_id=? order datetime desc",[1,$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

    }
    public function getDiet($id){
        $w=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join diet_schedule d on s.id=d.schedule_id where s.case_study_id =? && type=?",[$id,1])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$w];

    }
    public function getWorkout($id){
        $d=[];
        if($this->Query("SELECT w.id,w.title,w.description FROM schedule s inner join workout_schedule w on s.id=w.schedule_id where s.case_study_id =? && type=?",[$id,2])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

    }
    public function getWorkoutEvents($id){
        $e=[];
        if($this->Query("SELECT title,reps,description FROM workout_events where workout_schdule_id =?",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $e[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$e];

    }
    public function getDietEvents($id){
        $e=[];
        if($this->Query("SELECT title,amount,description FROM diet_events where diet_id =?",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $e[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$e];

    }









}