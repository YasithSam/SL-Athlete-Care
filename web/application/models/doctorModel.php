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
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id 
                         from athlete_reported_injury AS r 
                         inner join athlete_profile AS a On r.athlete_id=a.uuid 
                         inner join injury As i on i.id=r.injury_id 
                         where (r.doctor_id=? || r.doctor_id=?) && r.status=?",[$id,0,0])){
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
        if($this->Query("SELECT a.full_name,c.case_id,c.title FROM case_study c inner join athlete_profile a on a.uuid=c.athlete_id where doctor_id=? && status=?",[$id,1])){
            $x=$this->fetchall();
            return $x;

        }
    }
    //////////////////
    public function getPatients(){
        if($this->Query("SELECT a.uuid,a.full_name,au.phone
                         from application_user au
                         inner join athlete_profile a on a.uuid=au.uuid
                         where role_id=? ",[4])){
            $x=$this->fetchall();
            return $x;

        }
    }
    
    public function getAthlete($id){
        if($this->Query("SELECT a.full_name,a.email,a.sex,a.city,a.responsible_person_email,au.phone,ap.weight,ap.height,ap.bmi,ap.body_fat
                         from athlete_profile a
                         inner join application_user au on au.uuid=a.uuid
                         inner join athlete_physical ap on a.uuid=ap.athlete_id
                         where a.uuid=?",[$id])){
            $x=$this->fetch();
            return $x;
        }
    }
    public function getAthleteSport($id){
        if($this->Query("SELECT asp.institution,asp.level,s.name
                         from athlete_sport asp
                         inner join sport s on asp.sport_id=s.id
                         where asp.athlete_id=?",[$id])){
            $x=$this->fetchall();
            return $x;
        }
    }
    public function getAthleteCS($id){
        if($this->Query("SELECT c.title, c.case_id, d.full_name
                         from case_study c
                         /* inner join injury i on c.injury_id=i.id */
                         inner join doctor_profile d on c.doctor_id=d.uuid
                         where c.athlete_id=?",[$id])){
            $x=$this->fetchall();
            return $x;
        }
    }
    /////////////////
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
    public function getCaseStudy(){
        $current=[];
        $old=[];
        if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime,a.username FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=?",[1])){
   
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $current[$i]=$obj;
                    $i++;
                     
                }         
            
            } 
            if($this->Query("SELECT c.case_id,c.title,i.injury,c.datetime,a.username FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid where c.view_status=?",[0])){
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
    public function getCaseStudyFilter($d,$a,$i){
        $current=[];
        $old=[];
        if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime,a.username FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && d.full_name=? && i.id=? && a.username=?",[1,$d,$i,$a])){
   
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $current[$i]=$obj;
                    $i++;
                     
                }         
            
            } 
            if($this->Query("SELECT c.case_id,c.title,i.injury,c.datetime,a.username FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid where c.view_status=? && d.full_name=? && i.id=? && a.username=?",[0,$d,$i,$a])){
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



     public function getUpdates($id){
        $u=[];
        if($this->Query("SELECT t.name,u.username,c.datetime FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid inner join case_study d on where c.doctor_id=? order by datetime desc",[$id])){
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
        return $u;
    }
    public function getArticles(){
        if($this->Query("SELECT p.id, p.type, p.heading, p.description 
                         from post p
                         where p.type<? && p.type!=? && p.approval_status=?",[7,1,1])){
            $x=$this->fetchall();
            return $x;
        }
    }

    public function createArticle($data){
        $category = $data['category'];
        switch ($category) {
        case "Cricket":
            $type = 2;
            break;
        case "Football":
            $type = 3;
            break;
        case "Rugby":
            $type = 4;
            break;
        case "Athletics":
            $type = 5;
            break;
        case "Other":
            $type = 6;
            break;
        }
        $y=[$data['userid'],$type,$data['heading'],$data['content']]; 
            if($this->Query("INSERT INTO post (author_id,type,heading,description) VALUES (?,?,?,?)",$y)){
                 return true;
            }
    }
    public function deleteArticle($id)
    {
        
        $link="";
       
        if($this->Query("SELECT url from post_attachments where post_id=?",[$id]))
        {
           
            if($this->rowCount()>0)
            {
                $obj=$this->fetch();
                $link=$obj->url;
                if($this->Query("DELETE from post_attachments where post_id=?",[$id]))
                { 
                    unlink('../../public/assets/dbimages/'.$link);
                }
            }     
        }  
        if($this->Query("DELETE from post where id=?",[$id]))
        { 
            
            if($this->rowCount()>0){
                return true; 
            }  
        }  
        
        return false;

    }

}