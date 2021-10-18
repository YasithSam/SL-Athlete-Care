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

    public function getCaseStudy($id){
        if($this->Query("SELECT c.title,a.full_name,i.injury from case_study AS c inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where c.doctor_id=?",[$id])){
            $x=$this->fetchall();
            return $x;

        }
    }

    public function getArticle($id){
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id from athlete_reported_injury AS r inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where r.doctor_id=? || r.doctor_id=0",[$id])){
            $x=$this->fetchall();
            return $x;

        }
    }


     // public function getUpdates($id){
    //     if($this->Query("SELECT * from athlete_reported_injury ")){

    //     }
    // }


}