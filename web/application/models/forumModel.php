<?php

class forumModel extends database
{
    public function getForumbyId($id){

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

     // public function getUpdates($id){
    //     if($this->Query("SELECT * from athlete_reported_injury ")){

    //     }
    // }


}
?>