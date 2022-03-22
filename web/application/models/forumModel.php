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
    
    public function updateStatus($id){
        if($this->Query("UPDATE doctor_notifications set status=1 where forum_id=?",[$id])){
            return true;
        }
        return false;
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


    public function getUserForumCommentsD($id){
        $data=[];
        if( $this->Query("SELECT f.comment,f.date,u.username from forum_comment f inner join application_user u on f.user_id=u.uuid WHERE f.forum_id=? order by date desc",[$id])){
            if($this->rowCount()>0){
                $row = $this->fetchall();
                foreach ($row as $obj)
                {
                    $datetime1 = new DateTime();
                    $datetime2 = new DateTime($obj->date);
                    $interval = $datetime1->diff($datetime2);
                    $intervalFormat=$interval->format('%H');
                    $obj->date=$intervalFormat;
                    array_push($data,$obj);
                     
                }    

            } else {
                return ['status' => 'n'];
            }
            

        }
        return $data;
       

    }

    public function getNotices(){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        left join post_attachments pa on p.id=pa.post_id 
        where p.type='1' ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

    public function getotherNotices($id){
        if($this->Query("SELECT p.id,p.heading,pa.url from post p 
        left join post_attachments pa on p.id=pa.post_id 
        where p.type='1' and p.id<>$id  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

     public function getNoticeitem($id){
        if($this->Query("SELECT p.id,p.heading,p.description,pa.url from post p 
        left join post_attachments pa on p.id=pa.post_id 
        where p.id=$id")){
            $data = $this->fetch();
            return $data;

        }
    } 
    
    public function getArticles(){
        if($this->Query("SELECT p.id,p.heading,pa.url,p.datetime,p.author_id,pt.type,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        left join post_attachments pa on p.id=pa.post_id 
        inner join post_type pt on pt.id=p.type 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.type in (2,3,4,5,6) ORDER BY p.datetime DESC;")){
            $data = $this->fetchall();

            return $data;

        }
    }

    public function getotherArticles($id){
        if($this->Query("SELECT p.id,p.heading,pa.url,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        left join post_attachments pa on p.id=pa.post_id 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.type in (2,3,4,5,6) and p.id<>$id  ORDER BY p.datetime DESC limit 4")){
            $data = $this->fetchall();
            return $data;

        }
    }

     public function getArticlesitem($id){
        if($this->Query("SELECT p.id,p.heading,p.description,p.likes,p.comments,p.datetime,pa.url,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        left join post_attachments pa on p.id=pa.post_id 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.id=$id")){
            $data = $this->fetch();
            return $data;

        }
    } 

    public function getQuetions(){
        if($this->Query("SELECT p.id,p.heading,pt.type,p.datetime,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        inner join post_type pt on pt.id=p.type 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.type in (7,8,9,10,11) ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

    public function getotherQuetions($id){
        if($this->Query("SELECT p.id,p.heading,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.type in (7,8,9,10,11) and p.id<>$id  ORDER BY p.datetime DESC")){
            $data = $this->fetchall();
            return $data;

        }
    }

     public function getQuetionsitem($id){
        if($this->Query("SELECT p.id,p.heading,p.description,p.likes,p.comments,p.datetime,au.username,au.role_id,ap.profile_image AS 'athleteImg',dp.profile_image_url AS 'doctorImg',pp.profile_image_url AS 'paraImg' from post p 
        inner join application_user au on au.uuid=p.author_id
        left join athlete_profile ap on ap.uuid=p.author_id
        left join doctor_profile dp on dp.uuid=p.author_id
        left join paramedical_profile pp on pp.uuid=p.author_id
        where p.id=$id")){
            $data = $this->fetch();
            return $data;

        }
    } 



}
?>