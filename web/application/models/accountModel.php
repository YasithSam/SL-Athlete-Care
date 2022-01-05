<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class accountModel extends database
{
    public function createAccountDoctor($data){

        if($this->Query("INSERT INTO users (fullName, email, password) VALUES (?,?,?)", $data)){
            return true;
        }

    }
    public function createAccountPara($data){

        if($this->Query("INSERT INTO users (fullName, email, password) VALUES (?,?,?)", $data)){
            return true;
        }

    }

    public function disableUser($id){
        if($this->Query("UPDATE application_user SET is_disabled=1 where uuid=?",[$id])){
            if($this->Query("SELECT email from athlete_profile where uuid=?",[$id])){
                $data=$this->fetch();
                return $data;
            }

        }
    }
    public function disableCaseStudy($id){
        if($this->Query("UPDATE case_study SET status=0 where case_id=?",[$id])){
            if($this->Query("SELECT c.athlete_id, a.email from case_study c inner join athlete_profile a on c.athlete_id=a.uuid where c.case_id=?",[$id])){
                $data=$this->fetch();
                return $data;
            }
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
                if(!password_verify($password, $dbPassword))
                {
                    
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