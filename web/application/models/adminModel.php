<?php

class adminModel extends database
{
    public function createAccountDoctor($data){
        $role=2;
        $uuid=1213;
        $phone=1212312;
        $address="heymyaddress";
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
       
        if($this->Query("INSERT INTO application_user (uuid,role_id,username,phone,password,login_status,is_disabled) VALUES (?,?,?,?,?,?,?)",[$uuid,$role,$data['username'],$phone,$data['password'],0,0])){
            if($this->Query("INSERT INTO doctor_profile (uuid,full_name,province,district,email,sex,hospital,nic,doctor_number,address) VALUES (?,?,?,?,?,?,?,?,?,?)", [$uuid,$data['fullName'],$data['province'],$data['district'],$data['email'],$data['sex'],$data['hospital'],$data['nic'],$data['doctorId'],$address])){
                return true;
            }
            else{
                return false;
            }
            
        }
        else{
            
            return false;
        }

    }
    public function createAccountPara($data){

        if($this->Query("INSERT INTO users (fullName, email, password) VALUES (?,?,?)", $data)){
            return true;
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