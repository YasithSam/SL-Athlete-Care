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
    public function getMedicine($id,$state){
        $m=[];
        if($this->Query("SELECT heading,description FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[1,$id,$state])){
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
    public function getAdvices($id,$s){
        $a=[];
        if($this->Query("SELECT heading,description,datetime FROM case_study_records where type_id=? && case_id=? && state=? order by datetime desc",[2,$id,$s])){
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
    public function getImages($id,$s){
        // http://localhost/SL-Athlete-Care/web/public/assets/dbimages/
        $u=[];
        if($this->Query("SELECT r.heading,r.description,a.link FROM case_study_records r inner join case_study_attachements a on r.id=a.case_study_record where r.case_id=? && r.state=?",[$id,$s])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $obj->link="http://192.168.8.143/SL-Athlete-Care/web/public/assets/dbimages/".$obj->link;
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

    }
    public function getSchedules($id,$t){
        $w=[];
        $d=[];
        if($this->Query("SELECT d.id,d.title,d.description FROM schedule s inner join diet_schedule d on s.id=d.schedule_id where s.case_study_id =? && d.state=?",[$id,$t])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $d[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        if($this->Query("SELECT w.id,w.title,w.description FROM schedule s inner join workout_schedule w on s.id=w.schedule_id where s.case_study_id =? && w.state=?",[$id,$t])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $w[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','diet'=>$d,'workout'=>$w];

    }
 
    public function getWorkoutEvents($id){
        $e=[];
        if($this->Query("SELECT title,reps,description,time FROM workout_events where workout_schdule_id =?",[$id])){
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
    public function uploadImage($c,$u,$data,$t,$d,$s){
        $x=[$c,5,$u,$t,$d,$s];
        if($this->Query("INSERT INTO case_study_records (case_id,type_id,recording_user_id,heading,description,state) VALUES (?,?,?,?,?,?)",$x)){
            if($this->Query("SELECT id FROM case_study_records order by datetime desc Limit 1")){
                $row=$this->fetch();
                $id=$row->id;
        
                $link=strval($id).".jpeg";
                if($this->Query("INSERT INTO case_study_attachements(case_study_record,link,type) values(?,?,?)",[$id,$link,5])){
                    file_put_contents("/Applications/XAMPP/xamppfiles/htdocs/SL-Athlete-Care/web/public/assets/dbimages/".$link,base64_decode($data));
                    return true;
                }

            }
           
        }else{
            echo "noo";
            return false;
        }

    }
    public function addFeedback($f,$u,$c,$t,$s){
      $x=[$t,$f,$c,$u,$s];
      if($this->Query("INSERT INTO feedback (type,feedback,case_id,user_id,state) VALUES (?,?,?,?,?)",$x)){
        return ['status'=>'ok'];
       
      }else{      
        return ['status'=>'n'];
      }


    }
    public function getFeedbacks($user,$id,$state){
        $feedbacks=[];
        if($this->Query("SELECT type,feedback,datetime,user_id from feedback where state=? && case_id=?",[$state,$id])){
             if($this->rowCount()>0){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    if(strcmp($obj->user_id,$user)==0){
                      $obj->type="0";
                    }
                    $feedbacks[$i]=$obj;
                    $i++;
                     
                }    
             }
            return ['status'=>'ok','data'=>$feedbacks];
        }
        return ['status'=>'n'];

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