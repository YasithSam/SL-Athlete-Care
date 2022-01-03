<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class paramedicalModel extends database
{

    public function getCounts($id){
        if($this->Query("SELECT count(*) AS COUNT1 FROM paramedical_case_study where paramedical_id=?",[$id])){
            $data = $this->fetch();
            return $data;

        }

    } 

    public function getForumItems($id){
        if($this->Query("SELECT cr.id,cr.case_study_id,cr.req_user_id,c.athlete_id,c.title,a.full_name athlete,a.email,d.full_name doctor,cr.status FROM case_study_request cr inner join case_study c on cr.case_study_id=c.case_id inner join athlete_profile a on c.athlete_id=a.uuid inner join doctor_profile d on d.uuid=cr.req_user_id where cr.rec_user_id=? && cr.status IS NULL",[$id])){
            $data = $this->fetchall();
            return $data;
        }

    }

    public function declineRequest($id){
        if($this->Query("UPDATE case_study_request SET status=0 where case_study_id=?",[$id])){
            if($this->Query("SELECT doctor_id,email from case_study c inner join doctor_profile d on c.doctor_id=d.uuid where case_id=?",[$id])){
                $data=$this->fetch();
                return $data;
            }

        }
    }

    public function acceptRequest($id){
        if($this->Query("UPDATE case_study_request SET status=1 where case_study_id=?",[$id])){
                $data=$this->fetch();
                return $data;
            }
    }



   

}