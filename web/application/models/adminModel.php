<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class adminModel extends database
{
    public function createAccountDoctor($data){
        $role=2;
        $uuid=uniqid("sl-ac-");
        $ps = password_hash($data['password'], PASSWORD_DEFAULT);
        $x=[$uuid,$role,$data['username'],null,$ps,0,0];
  
        $y=[$uuid,$data['fullName'],$data['province'],$data['district'],$data['email'],$data['gender'],$data['hospital'],$data['doctorId']];
   
        if($this->Query("INSERT INTO application_user (uuid,role_id,username,phone,password,login_status,is_disabled) VALUES (?,?,?,?,?,?,?)",$x)){
            if($this->Query("INSERT INTO doctor_profile (uuid,full_name,province,district,email,sex,hospital,doctor_number) VALUES (?,?,?,?,?,?,?,?)",$y)){
                 return true;
            }
            else{

            }
        }
        else{
            
             return false;
        }

    }

    public function getCounts(){

        if($this->Query("SELECT count(*) AS c1 FROM athlete_profile union all SELECT count(*) AS c3 FROM post union all SELECT count(*) AS c2 FROM case_study")){
            $data = $this->fetchall();
            return $data;

        }

    }   
    public function getUsers($c){
        $m=[];
        $start_from = ($c-1) * 10;  
        if($this->Query("SELECT u.uuid,u.username,u.phone,r.role,u.is_disabled from application_user u inner join user_role r on r.id=u.role_id where u.role_id!=1 order by timestamp desc limit $start_from,10")){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return $m;
            }

        }
        return $m;

    }
    public function getCount(){
        if($this->Query("SELECT count(*) as Count from application_user where role_id!=1")){
            $row=$this->fetch();
            return $row->Count;

        }
   

    }
    public function getCount2(){
        if($this->Query("SELECT count(*) as Count from post where type!=1")){
            $row=$this->fetch();
            return $row->Count;

        }

    }
    public function getCount3(){
        if($this->Query("SELECT count(*) as Count from comments where approve!=1")){
            $row=$this->fetch();
            return $row->Count;

        }
   

    }
    public function getCount4(){
        if($this->Query("SELECT count(*) as Count from case_study")){
            $row=$this->fetch();
            return $row->Count;

        }
   

    }
    ///////////////////
    public function getCasestudy(){
        $m=[];
        if($this->Query("SELECT title, a.full_name an, d.full_name dn 
                        from case_study c 
                        inner join athlete_profile a on a.uuid=c.athlete_id 
                        inner join doctor_profile d on d.uuid=c.doctor_id
                       
                        order by c.case_id asc ")){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
            } else {
                return $m;
            }
        }
        return $m;
    }
    public function getArticles(){
        $m=[];
        if($this->Query("SELECT type, heading, description, username /*, pa.type pt*/
                        from post p 
                        inner join application_user au on au.uuid=p.author_id 
                        /*inner join post_attachments pa on pa.post_id=p.id*/
                        where p.approval_status=0 
                        order by p.datetime desc ")){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
            } else {
                return $m;
            }
        }
        return $m;
    }
    public function getComments(){
        $m=[];
        if($this->Query("SELECT c.comment,c.datetime,p.heading,a.username
                        from comments c
                        inner join post p on c.post_id=p.id 
                        inner join application_user a on c.user_id=a.uuid
                        where c.approve=0 
                        order by c.datetime desc ")){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $m[$i]=$obj;
                    $i++;
                     
                }    
            } else {
                return $m;
            }
        }
        return $m;

    }
    ///////////////////
    public function createAccountPara($data){
        if($data['para']=='physiotherapist'){
            $role=3;
        }
        else{
            $role=5;
        }
        $uuid=uniqid("sl-ac-");
       
        $ps = password_hash($data['password'], PASSWORD_DEFAULT);
        $x=[$uuid,$role,$data['username'],null,$ps,0,0];
  
        $y=[$uuid,$role,$data['fullName'],$data['province'],$data['district'],$data['email'],$data['gender'],$data['hospital'],$data['doctorId']];
   

        if($this->Query("INSERT INTO application_user (uuid,role_id,username,phone,password,login_status,is_disabled) VALUES (?,?,?,?,?,?,?)",$x)){
            if($this->Query("INSERT INTO paramedical_profile (uuid,type,full_name,province,district,email,sex,hospital,paramedical_number) VALUES (?,?,?,?,?,?,?,?,?)",$y)){
                 return true;
            }
            else{

            }
        }
        else{
            
             return false;
        }

    }


    public function loginUser($username, $password){

        if($this->Query("SELECT * FROM application_user WHERE username = ? ", [$username])){

            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $dbPassword = $row->password;
                $userId = $row->uuid;
                $role_id=$row->role_id;
                $username=$row->username;
                if(password_verify($password, $dbPassword)){
                    
                    return ['status' => 'ok', 'uuid' =>$userId,'username'=>$username,'role'=>$role_id];

                } else {
                    return ['status' => 'passwordNotMatched','data'=>''];
                 
                }

            } else {
                return ['status' => 'usernameNotFound','data'=>''];
               
            }

        }
        else{
            return ['status' => 'usernameNotFound','data'=>''];
            echo "na";
        }



    }
    public function changePassword($username,$cPassword,$nPassword){
       
        if($this->Query("SELECT * FROM application_user WHERE username = ?", [$username])){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                // $pass =password_verify($row->password,PASSWORD_DEFAULT);  
                // echo $pass;    
                // if($pass!=$cPassword){     
                //     return ['status' => 'wrong password'];
                // }
                $userId = $row->uuid;
                $hash = password_hash($nPassword, PASSWORD_DEFAULT);
                if($this->Query("UPDATE application_user set password=? where uuid= ?", [$hash,$userId])){
                    return ['status' => 'ok'];

                } else {
                    return ['status' => 'error','data'=>'Could not update user'];
                }

            } else {
                return ['status' => 'errorUser','data'=>'No user found with given data'];
            }

        }
        else{
            return ['status'=>'errorUser','data'=>'No user found with given data'];
        }


    }
    public function deleteNotice($id)
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

    public function getNotices(){
        if($this->Query("SELECT p.id, p.type, p.heading, p.description 
                         from post p
                         inner join post_type pt on p.type=pt.id
                         where pt.id=? ",[1])){
            $x=$this->fetchall();
            return $x;
        }
    }

    public function createNotice($data){
        
        $y=[$data['userid'],$data['type'],$data['heading'],$data['content']];
         print_r ($y); 
            if($this->Query("INSERT INTO post (author_id,type,heading,description) VALUES (?,?,?,?)",$y)){
                 return true;
            }
    }


}