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
    public function getUsers(){
        $m=[];
        if($this->Query("SELECT u.uuid,u.username,u.phone,r.role from application_user u inner join user_role r on r.id=u.role_id where u.role_id!=1 order by timestamp desc")){
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
  
        $y=[$uuid,$data['fullName'],$data['province'],$data['district'],$data['email'],$data['gender'],$data['hospital'],$data['doctorId']];
   

        if($this->Query("INSERT INTO application_user (uuid,role_id,username,phone,password,login_status,is_disabled) VALUES (?,?,?,?,?,?,?)",$x)){
            if($this->Query("INSERT INTO paramedical_profile (uuid,full_name,province,district,email,sex,hospital,paramedical_number) VALUES (?,?,?,?,?,?,?,?)",$y)){
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

}