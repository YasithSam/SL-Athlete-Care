<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class forumModel extends database
{
    public function getForumbyId($id){
        if($this->Query("SELECT r.id,a.full_name,i.injury,r.con,r.doctor_id,r.date,r.description from athlete_reported_injury r inner join athlete_profile a On r.athlete_id=a.uuid inner join injury i on i.id=r.injury_id where r.id=?",[$id])){
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
      if($status==1){
        if($this->Query("UPDATE athlete_reported_injury set status=? where id=?",[$status,$id])){
            if($this->Query("SELECT p.email as e,d.email,d.full_name from athlete_reported_injury r inner join athlete_profile p on p.uuid=r.athlete_id inner join doctor_profile d on d.uuid=r.doctor_id where r.id=?",[$id])){
                $data = $this->fetch();
                $e=$data->e;
                $d=$data->email;
                $n=$data->full_name;  
                return [$e,$d,$n];
            
            }
           
        }else{
            echo "Record error";
        }

      }else{
        if($this->Query("UPDATE athlete_reported_injury set status=2 where id=?",[$id])){

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


    public function getNotices(){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.type='1'  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

    public function getotherNotices($id){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.type='1' and p.id<>$id  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

     public function getNoticeitem($id){
        if($this->Query("SELECT p.id,p.heading,p.description,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.id=$id")){
            $data = $this->fetch();
            return $data;

        }
    } 

    
/*     public function getArticle(){
        if($this->Query("SELECT p.id,p.heading,p.datetime,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.type='Article' ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    } */

    public function getArticles(){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.type in (2,3,4,5,6)  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

    public function getotherArticles($id){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.type in (2,3,4,5,6) and p.id<>$id  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

     public function getArticlesitem($id){
        if($this->Query("SELECT p.id,p.heading,p.description,p.likes,p.comments,p.datetime,pa.url from post p 
        inner join post_attachments pa on p.id=pa.post_id 
        where p.id=$id")){
            $data = $this->fetch();
            return $data;

        }
    } 




}
?>