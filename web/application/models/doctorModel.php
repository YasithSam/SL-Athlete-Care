<?php

class doctorModel extends database
{
    public function getCounts($id){

        if($this->Query("SELECT count(*) AS COUNT1 FROM athlete_profile union all SELECT count(*) AS COUNT1 FROM case_study where doctor_id=? union all SELECT count(*) AS COUNT1 FROM athlete_reported_injury where doctor_id=?",[$id,$id])){
            $data = $this->fetchall();
            return $data;

        }

    }   
     public function getForumItems($id){
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id from athlete_reported_injury AS r inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where r.doctor_id=? || r.doctor_id=0",[$id])){
            $x=$this->fetchall();
            return $x;

        }
    }
    public function getProfile($id){
        if($this->Query("SELECT uuid,full_name,province,sex,email,hospital from doctor_profile where uuid=?",[$id])){
            $x=$this->fetch();
            return $x;

        }
    }
    public function getCaseStudyProfile($id){
        if($this->Query("SELECT c.case_id,c.title FROM case_study c where doctor_id=? && status=?",[$id,1])){
            $x=$this->fetchall();
            return $x;

        }
    }
    public function getNutritionist(){
        if($this->Query("SELECT uuid,username FROM application_user where role_id=?",[5])){
            $x=$this->fetchall();
            return $x;

        }

    }
    public function getPhysio(){
        if($this->Query("SELECT uuid,username FROM application_user where role_id=?",[3])){
            $x=$this->fetchall();
            return $x;

        }
        
    }
    public function getCaseStudy($id){
        $current=[];
        $old=[];
        if($this->Query("SELECT c.case_id,c.title,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id where doctor_id=? && status=?",[$id,1])){
   
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $current[$i]=$obj;
                    $i++;
                     
                }         
            
            } 
            if($this->Query("SELECT c.case_id,c.title,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id where doctor_id=? && status=?",[$id,0])){
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
       
        return [$current,$old];


    }

    public function getArticle($id){
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id from athlete_reported_injury AS r inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where r.doctor_id=? || r.doctor_id=0",[$id])){
            $x=$this->fetchall();
            return $x;

        }
    }
    public function getInjuryData(){
        if($this->Query("SELECT id,injury FROM injury")){    
            if($this->rowCount() > 0 ){
                $x=$this->fetchall();
                return $x; 
            
            }
            
            
        }
       
     }
     public function AssignPara($data){
        
        if(empty($data['phid'])){
            $y=[$data['nid'],$data['caseid']];
            if($this->Query("INSERT INTO paramedical_case_study (paramedical_id,case_study_id) VALUES (?,?)", $y)){
                return true;
            }
        }
        else if(empty($data['nid'])){
            $y=[$data['phid'],$data['caseid']];   
            if($this->Query("INSERT INTO paramedical_case_study (paramedical_id,case_study_id) VALUES (?,?)", $y)){
        
                return true;
           }
        }
        else{
            $y=[$data['nid'],$data['caseid']];
            $x=[$data['phid'],$data['caseid']];
            if($this->Query("INSERT INTO paramedical_case_study (paramedical_id,case_study_id) VALUES (?,?)", $y)){
                return true;
            }
            if($this->Query("INSERT INTO paramedical_case_study (paramedical_id,case_study_id) VALUES (?,?)", $x)){
                return true;
            }
        }
        

     }
     public function getAthleteData(){
        if($this->Query("SELECT uuid,username FROM application_user where role_id=?",[4])){    
            if($this->rowCount() > 0 ){
                $x=$this->fetchall();
                return $x; 
            
            }
            
            
        }
       
     }
     public function createCaseStudy($data){
        $y=[$data['athlete'],$data['injury'],$data['userid'],1,$data['title'],$data['description'],1];
 
        if($this->Query("INSERT INTO case_study (athlete_id, injury_id,doctor_id,status,title,description,view_status) VALUES (?,?,?,?,?,?,?)", $y)){
            return true;
        }

     }
     public function postInjury($athleteId,$injuryId,$doc,$con,$d){

        $injuryId=$this->findInjury($injuryId);

        // if($this->Query("INSERT INTO athlete_reported_injury(athlete_id,injury_id,status,doctor_id,con,description) VALUES (?,?,?,?,?,?)",[$athleteId,$injuryId,0,$doctor,$con,$d])){
        //     return ['status' => 'ok'];
        // }else{
        //     return false;
        // }
     }
  
     public function findInjury($injury){
        if($this->Query("SELECT * FROM injury WHERE injury=?",[$injury])){
            $r=$this->fetch();
           
            return $r->id;
        }

    }



     // public function getUpdates($id){
    //     if($this->Query("SELECT * from athlete_reported_injury ")){

    //     }
    // }


}