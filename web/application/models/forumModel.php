<?php

class forumModel extends database
{
    public function getForumbyId($id){
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id,r.date,r.description from athlete_reported_injury AS r inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where r.id=?",[$id])){
            $data = $this->fetch();
            return $data;

        }

    } 
    public function getForums($id){
       
        if($this->Query("SELECT injury_id from athlete_reported_injury where id=?",[$id])){
            $data = $this->fetch();
            
        }
        $x=$data->injury_id;
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.date from athlete_reported_injury AS r inner join athlete_profile AS a On r.athlete_id=a.uuid inner join injury As i on i.id=r.injury_id where r.injury_id=? && r.id!=?",[$x,$id])){
            $datax = $this->fetchall();
            return $datax;

        }

    } 
    public function updateForumbyId($id,$status){
      if($status=="Accepted"){
        if($this->Query("UPDATE athlete_reported_injury set status='Accepted' where id=?",[$id])){

        }
        else{
            echo "Record error";
        }

      }else{
        if($this->Query("UPDATE athlete_reported_injury set status='Rejected' where id=?",[$id])){

        }
        else{
            echo "Record error";
        } 

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