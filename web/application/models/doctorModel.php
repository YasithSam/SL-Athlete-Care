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

    //Doctor article
    public function getDoctorArticles($id){
        if($this->Query("SELECT p.heading, p.description FROM post p left join doctor_profile d on d.uuid=p.author_id 
        where d.uuid=? && p.type!=1 && p.type<7 && p.approval_status=? order by datetime desc",[$id,1])){
            $x=$this->fetchall();
            return $x;

        }
    }

    public function getProfile($id){
        if($this->Query("SELECT uuid,full_name,province,district,sex,email,profile_image_url,hospital,doctor_number 
        from doctor_profile where uuid=?",[$id])){
            $x=$this->fetch();
            return $x;

        }
    }


    //Doctor profile update
    public function updateprofile($u,$i,$e,$h,$p,$d){
        
        if($this->Query("UPDATE doctor_profile set profile_image_url='$i', email='$e',hospital='$h',province='$p',district='$d' where uuid=?",[$u] )){         
             return true;
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
    public function getArticles($userid){
        if($this->Query("SELECT p.id, p.type, p.heading, p.description 
                         from post p
                         where p.type<? && p.type!=? && p.approval_status=? && p.author_id=?",[7,1,1,$userid])){
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

    public function getCount2(){
        if($this->Query("SELECT count(*) as Count from post where type!=1")){
            $row=$this->fetch();
            return $row->Count;

        }

    }

    public function getReviews($userId){
        $m=[];
        if($this->Query("SELECT p.type, p.heading, p.description, dp.full_name, r.reviewer_id,r.id /*, pa.type pt*/
                        from reviewers r 
                        inner join post p on r.post_id=p.id
                        inner join doctor_profile dp on dp.uuid=r.reviewer_id
                        /*inner join post_attachments pa on pa.post_id=p.id*/
                        where r.approval=? && r.reviewer_id=?",[1,$userId]
                        /* order by p.datetime desc  */)){
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

    public function reviewapprove($id){
        if($this->Query("UPDATE reviewers SET approval=2 where id=?",[$id])){
                return true;
            }
    }
    public function reviewreject($id,$r){
        echo $id;
        if($this->Query("UPDATE reviewers SET approval=3, reason='$r' where id=?",[$id])){
                return true;
            }
    }


    public function getuserName($id){
        if($this->Query("SELECT au.username,au.role_id,ur.role,dp.profile_image_url
                         from application_user au
                         inner join user_role ur on ur.id=au.role_id
                         inner join doctor_profile dp on dp.uuid=au.uuid
                         where au.uuid=? ",[$id])){
            $data=$this->fetch();
            return $data;
        }
    }



}