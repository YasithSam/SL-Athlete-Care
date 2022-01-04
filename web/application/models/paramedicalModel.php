<?php

class paramedicalModel extends database
{
////////////////-----Articles----------///////////////////////////////
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

}