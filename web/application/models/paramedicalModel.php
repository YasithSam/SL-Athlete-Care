<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class paramedicalModel extends database
{

    public function getArticles($userid){
        if($this->Query("SELECT p.id, p.type, p.heading, p.description 
                         from post p
                         where p.type<? && p.type!=? && p.approval_status=? && p.author_id=?",[7,1,1,$userid])){
            $x=$this->fetchall();
            return $x;
        }
    }

    public function getCounts($id){
        if($this->Query("SELECT count(*) AS COUNT1 FROM paramedical_case_study where paramedical_id=?",[$id])){
            $data = $this->fetch();
            return $data;

        }

    }


    public function getForumItems($id){
        if($this->Query("SELECT pr.id,pr.case_study_id,pr.doctor_id,c.athlete_id,c.title,a.full_name athlete,a.email,d.full_name doctor,pr.status FROM paramedical_case_study pr 
        inner join case_study c on pr.case_study_id=c.case_id 
        inner join athlete_profile a on c.athlete_id=a.uuid 
        inner join doctor_profile d on d.uuid=pr.doctor_id 
        where pr.paramedical_id=? && pr.status=0 ",[$id])){
            $data = $this->fetchall();
            return $data;
        }

    }

    public function declineRequest($id){
        if($this->Query("UPDATE paramedical_case_study SET status=-1 where case_study_id=?",[$id])){
            if($this->Query("SELECT doctor_id,email from case_study c inner join doctor_profile d on c.doctor_id=d.uuid where case_id=?",[$id])){
                $data=$this->fetch();
                return $data;
            }

        }
    }


    public function acceptRequest($id){
        if($this->Query("UPDATE paramedical_case_study SET status=1 where case_study_id=?",[$id])){
                $data=$this->fetch();
                return $data;
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
////////////////-----Articles----------///////////////////////////////
    public function getProfile($userid){
        if($this->Query("SELECT p.full_name,p.type,p.district,p.email,p.hospital,u.role,p.sex,p.paramedical_number,p.province
                        from paramedical_profile p
                        inner join user_role u on p.type=u.id
                        where p.uuid=?",[$userid])){
            $x=$this->fetch();
            return $x;
        }
    }
    public function updateprofile($u,$e,$h,$p,$d){
    
        if($this->Query("UPDATE paramedical_profile set email='$e',hospital='$h',province='$p',district='$d' where uuid=?",[$u] )){       
             return true;
        }
    }

    public function getuserName($id){
        if($this->Query("SELECT au.username,au.role_id,ur.role,pp.profile_image_url
                         from application_user au
                         inner join user_role ur on ur.id=au.role_id
                         inner join paramedical_profile pp on pp.uuid=au.uuid
                         where au.uuid=? ",[$id])){
            $data=$this->fetch();
            return $data;
        }
    }




}