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
        $uid=$_SESSION['userId'];
        if($this->Query("UPDATE paramedical_case_study SET status=-1 where paramedical_id=? && case_study_id=?",[$uid,$id])){
            if($this->Query("SELECT doctor_id,email,case_id from case_study c inner join doctor_profile d on c.doctor_id=d.uuid where case_id=?",[$id])){
                $data=$this->fetch();
                return $data;
            }
        }
    }

    public function acceptRequest($id,$uid){
      
        if($this->Query("UPDATE paramedical_case_study SET status=1 where paramedical_id=? && case_study_id=?",[$uid,$id])){
              
                return true;
            }
    }
    public function getArticles($userid){
        if($this->Query("SELECT p.id, p.type, p.heading, p.description, pa.url from post p inner join post_attachments pa on pa.post_id=p.id where p.type < ? && p.type!=? && p.approval_status=? && p.author_id=?",[7,1,2,$userid])){
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
            $x=[$data['userid'],$type,$data['heading'],$data['content'],$data['filename']]; 
            if($this->Query("INSERT INTO post (author_id,type,heading,description) VALUES (?,?,?,?);SET @last_id_in_table1 = LAST_INSERT_ID();INSERT INTO post_attachments (post_id,url) VALUES (@last_id_in_table1,?)",$x)){
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
        if($this->Query("DELETE from comments where post_id=?",[$id]))
                { 
                    if($this->Query("DELETE from post where id=?",[$id]))
                    { 
                        
                        if($this->rowCount()>0){
                            return true; 
                        }  
                    }  
                }
       /*  if($this->Query("DELETE from post where id=?",[$id]))
        { 
            
            if($this->rowCount()>0){
                return true; 
            }  
        }  
         */
        return false;

    }
////////////////-----Articles----------///////////////////////////////
public function getProfile($userid){
    if($this->Query("SELECT p.full_name,p.type,p.district,p.email,p.hospital,u.role,p.sex,p.paramedical_number,p.province,p.profile_image_url
                    from paramedical_profile p
                    inner join user_role u on p.type=u.id
                    where p.uuid=?",[$userid])){
        $x=$this->fetch();
        return $x;
    }
}
public function updateprofile($u,$e,$h,$p,$d,$f){
    
    if($this->Query("UPDATE paramedical_profile set email='$e',hospital='$h',province='$p',district='$d',profile_image_url='$f' where uuid=?",[$u] )){       
         return true;
    }
}

    public function getCaseStudy(){
        $current=[];
        $old=[];
        if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && c.status=?",[1,0])){
   
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $current[$i]=$obj;
                    $i++;
                     
                }         
            
            } 
            if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && c.status=?",[1,1])){
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
    public function getCaseStudyFilter($d,$a){
        $current=[];
        $old=[];
       
        if($d==1 && $a!=0){       
               if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && c.status=? && c.injury_id=?",[1,0,$a])){
                    if($this->rowCount() > 0 ){
                        $row=$this->fetchall();
                        $i=0;
                        foreach ($row as $obj)
                        {
                            $current[$i]=$obj;
                            $i++;
                            
                        }                      
                    } 
               }    
                if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id inner join application_user a on c.athlete_id=a.uuid inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && c.status=? && c.injury_id=?",[1,1,$a])){  
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
            

        }else if($d!=1 && $a==0){
           
                if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id  inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && d.full_name=? && c.status=?",[1,$d,0])){
   
                    if($this->rowCount() > 0 ){
                        $row=$this->fetchall();
                        $i=0;
                        foreach ($row as $obj)
                        {
                            $current[$i]=$obj;
                            $i++;
                            
                        }         
                    
                    } 
                }    
                if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id  inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && d.full_name=? && c.status=?",[1,$d,1])){
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
        else{
                if($this->Query("SELECT c.case_id,d.full_name,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id  inner join doctor_profile d on c.doctor_id=d.uuid where c.view_status=? && d.full_name=? && c.injury_id=? && c.status=?",[1,$d,$a,0])){
    
                    if($this->rowCount() > 0 ){
                        $row=$this->fetchall();
                        $i=0;
                        foreach ($row as $obj)
                        {
                            $current[$i]=$obj;
                            $i++;
                            
                        }         
                    
                    } 
                }
                if($this->Query("SELECT c.case_id,c.title,i.injury,c.datetime FROM case_study c inner join injury i on c.injury_id=i.id  where c.view_status=? && d.full_name=? && i.id=? && c.status=?",[1,$d,$a,1])){
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
        return [$current,$old];


    }

} 