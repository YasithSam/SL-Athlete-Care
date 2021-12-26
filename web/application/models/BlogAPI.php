<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";

class BlogAPI extends database
{

    public function GetNotices()
    {
        $n=[];
        if($this->Query("SELECT p.heading,p.description,p.status,p.datetime,p.likes,p.comments,a.url FROM post p inner join post_attachments a on p.id=a.post_id where p.type=?",[1])){
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $obj->url="http://192.168.8.106/SL-Athlete-Care/web/public/assets/dbimages/".$obj->url;
                    $n[$i]=$obj;
                    $i++;                  
                }            
            } 
        }
        else {
            return ['status' => 'n'];
        }
        return ['status'=>'ok','data'=>$n];

    }
    public function addComment($c,$i,$p)
    {
        $x=[$c,0,$p,$i];
        if($this->Query("INSERT INTO comments (comment,approve,post_id,user_id) VALUES (?,?,?,?)",$x)){
          return true;
                 
        }else{
            echo "noo";
            return false;
        }

    }
    public function GetComments($id)
    {
        $c=[];
        if($this->Query("SELECT c.comment,c.datetime,a.username FROM comments c inner join application_user a on c.user_id=a.uuid where c.post_id=? && c.approve=1",[$id])){
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $c[$i]=$obj;
                    $i++;                  
                }            
            } 
        }
        else {
            return ['status' => 'n'];
        }
        return ['status'=>'ok','data'=>$c];

    }
    public function getBlogs($id)
    {
        $a=[];
        $q=[];
        if($this->Query("SELECT p.id,p.heading,p.type,p.description,p.approval_status,p.datetime,p.likes,p.comments,a.url FROM post p left join post_attachments a on p.id=a.post_id where p.type!=1 && p.author_id=?",[$id])){
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
                foreach ($row as $obj)
                {
                    if(!is_null($obj->url)){
                        $obj->url="http://192.168.8.100/SL-Athlete-Care/web/public/assets/dbimages/".$obj->url;
                    }
                    else{
                        $obj->url="";
                    }
                    if($obj->type > 1 && $obj->type < 7){
                        array_push($a,$obj);
                    }
                    else{
                        array_push($q,$obj);
                    }
                               
                }            
            } 
        }
        else {
            return ['status' => 'n'];
        }
        return ['status'=>'ok','articles'=>$a,'questions'=>$q];

    }
    public function deleteBlog($id)
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
    public function uploadArticle($title,$desc,$t,$data,$i){
        $type=$this->findType($t);
        $x=[$type,$i,$title,$desc,0,0,0];
        if($this->Query("INSERT INTO post (type,author_id,heading,description,likes,comments,approval_status) VALUES (?,?,?,?,?,?,?)",$x)){
            if($this->Query("SELECT id FROM post order by datetime desc Limit 1")){
                $row=$this->fetch();
                $id=$row->id;
                $link=strval($id).".jpeg";
                if($this->Query("INSERT INTO post_attachments(post_id,url) values(?,?)",[$id,$link])){
                    file_put_contents("/Applications/XAMPP/xamppfiles/htdocs/SL-Athlete-Care/web/public/assets/dbimages/".$link,base64_decode($data));
                    return true;
                }

            }
           
        }else{
            echo "noo";
            return false;
        }

    }

    public function uploadQuestion($title,$desc,$t,$i)
    {
        $type=$this->findType($t);
        $x=[$type,$i,$title,$desc,0,0,0];
        if($this->Query("INSERT INTO post (type,author_id,heading,description,likes,comments,approval_status) VALUES (?,?,?,?,?,?,?)",$x)){
           
            return ['status' => 'ok'];
           
        }else{
            echo "noo";
            return ['status' => 'n'];
        }
        
    }
    public function findType($type)
    {
        $t=0;
        switch($type){
            case "Cricket":
                $t=2;
                break;
            case "Football":
                $t=3;
                break;

            case "Athletics":
                $t=5;
                break;

            case "Rugby":
                $t=4;
                break;

            case "Other":
                $t=6;
                break;
            
        }
        return $t;

    }
    public function findTypeQ($type)
    {
        $t=0;
        switch($type){
            case "Cricket":
                $t=7;
                break;
            case "Football":
                $t=8;
                break;

            case "Athletics":
                $t=9;
                break;

            case "Rugby":
                $t=10;
                break;

            case "Other":
                $t=11;
                break;
            
        }
        return $t;

    }

    public function addReport($p,$s){
        $x=[$s,$p];
        if($this->Query("INSERT INTO post_reports (section,post_id) VALUES (?,?)",$x)){
            return ['status'=>'ok'];
                 
        }else{
            return ['status'=>'n'];
            
        }


    }

    public function GetAll($id)
    {
        $d=[]; 
        if($this->Query("SELECT p.id,p.heading,p.description,p.type,p.datetime,p.likes,p.comments,p.approval_status as status,a.url FROM post p left join post_attachments a on p.id=a.post_id where p.approval_status=? && p.type=?",[1,$id])){
            if($this->rowCount() > 0 ){
                $row=$this->fetchall();
             
                foreach ($row as $obj)
                {
                    if(!is_null($obj->url)){
                        $obj->url="http://192.168.8.106/SL-Athlete-Care/web/public/assets/dbimages/".$obj->url;
                    }
                    else{
                        $obj->null="";
                    }
                    $a=explode(" ",$obj->datetime);
                    $obj->datetime=$a[0];
                    array_push($d,$obj);

                   
                                 
                }            
            } 
        }
        else {
            return ['status' => 'n'];
        }
        return ['status'=>'ok','data'=>$d];

    }



}