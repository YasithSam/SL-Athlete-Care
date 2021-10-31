<?php
session_start();
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
class AthleteAPI extends database
{
    public function checkUser($username,$phone){
        if( $this->Query("SELECT * FROM application_user WHERE username = ? || phone= ?",[$username,$phone])){
            if($this->rowCount()>0){
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
   
    public function addUser($username,$password,$phone,$email,$sex){
        $uuid=uniqid('sl-ac-');
        $role=1;
        $isDisabled=0;
        /* Secure password hash. */
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $x=[$uuid,$role,$username,$phone,$hash,1,$isDisabled];
        if($this->Query("INSERT INTO application_user (uuid,role_id,username,phone,password,login_status,is_disabled) VALUES (?,?,?,?,?,?,?)",$x)){
            if($this->addUserProfile($email,$sex,$uuid)){
                return true;
            }
           
        }else{
            echo "noo";
            return false;
        }
    }
    public function addUserProfile($email,$sex,$uuid){
        $x=[$uuid,$email,$sex];
        if($this->Query("INSERT INTO athlete_profile (uuid,email,sex) VALUES (?,?,?)",$x)){
          return true;
                 
        }else{
            echo "noo";
            return false;
        }


    }
    public function validateUser($userData){

        foreach($userData as $key => $value) {
            $userData[$key]=$this->commonValidate($value);
        }
       
        if(empty($userData['email'])){
            $userData['fullNameError'] = 'Full Name is required';

        }

        if(empty($userData['email'])){
            $userData['emailError'] = 'Email is required';
        } else {
        
        }
        if(empty($userData['username'])){
            $userData['usernameError'] = 'Username is required';
        } else {
            // if(!$this->accountModel->checkEmail($userData['email'])){
            //  $userData['usernameError'] = "Sorry this username is already exist";

            // }
        }
        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";
        } else if(strlen($userData['password']) < 6 ){
            $userData['passwordError'] = "Passowrd must be 5 characters long";
        }

       
        return $userData;

       
    }
    public function commonValidate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    public function addHealth($id,$h,$w,$f){
        $m=$h/(float)100;
        $bmi=$this->calBMI($m,$w);
        $t=time();
        $d=date("Y-m-d",$t);
        if($this->Query("INSERT INTO athlete_physical (athlete_id,weight,height,bmi,body_fat,date) values(?,?,?,?,?,?)", [$id,$w,$m,$bmi,$f,$d])){
             return ['status' => 'ok'];       
        }
        else{
            return ['status' => 'n'];

        }
    }
    public function calBMI($h,$w){
     return $w / ($h**2);
    }
   
    public function LoginUser($phone,$password){
        if($this->Query("SELECT * FROM application_user WHERE phone = ? ", [$phone])){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $dbPassword = $row->password;
                if(password_verify($password, $dbPassword))
                {
                    $userId = $row->uuid;
                    $role_id=$row->role;
                    return ['status' => 'ok', 'data' => [$userId,$role_id]];

                } else {
                    return ['status' => 'p'];
                }

            } else {
                return ['status' => 'n'];
            }

        }
    }
    public function getHealth($id){
        if($this->Query("SELECT * FROM athlete_physical WHERE athlete_id= ? and id=(select max(id) from athlete_physical)", [$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $h = $row->height;
                $w=$row->weight;
                $f=$row->body_fat;
                return ['status' => 'ok', 'data' => [$h,$w,$f]];


            } else {
                return ['status' => 'n'];
            }

        }

    }
    public function getWorkout($id){
        $u=[];
        if($this->Query("SELECT t.name,u.username,c.datetime FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid where c.case_id=? order by datetime desc",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

    }
    public function getDiet($id){
        $u=[];
        if($this->Query("SELECT t.name,u.username,c.datetime FROM case_study_records c inner join case_study_type t on c.type_id=t.id inner join application_user u on c.recording_user_id=u.uuid where c.case_id=? order by datetime desc",[$id])){
            if($this->rowCount() > 0 ){
                $row = $this->fetchall();
                $i=0;
                foreach ($row as $obj)
                {
                    $u[$i]=$obj;
                    $i++;
                     
                }    
       

            } else {
                return ['status' => 'n'];
            }

        }
        return ['status'=>'ok','data'=>$u];

    }


    public function userData($r,$add,$d,$c){
       $sql= "UPDATE athlete_profile set ";
       $a=[];
       if(!empty($r)){
           $sql .="responsible_person_email=?";
           array_push($a,$r);
       }
       if(!empty($add)){
        if(!empty($add) && !empty($a)){
            $sql .=", address=?";
            array_push($a,$add);
        }
        else{
            $sql .="address=?";
            array_push($a,$add);
        } 
       }
       if(!empty($d)){
        if(!empty($d) && !empty($a)){
            $sql .=", dob=?";
            array_push($a,$d);
         }
         else{
            $sql .="dob=?";
            array_push($a,$d);
         }

       }
       if(!empty($c)){
        if(!empty($c) && !empty($a)){
            $sql .=", city=?";
            array_push($a,$c);
         }
         else {
            $sql .="city=?";
            array_push($a,$c);
        }
       }
        
       if($this->Query($sql, $a)){
           return ['status' => 'ok'];

       } else {
        return ['status' => 'error','data'=>'Could not update user'];
        }

      
       
    }
    public function updateSportsData($i,$l,$c){
        $sql= "UPDATE athlete_sport set ";
        $a=[];
        if(!empty($i)){
            $sql .="institution=?";
            array_push($a,$i);
        }
       
        if(!empty($l)){
         if(!empty($l) && !empty($a)){
             $sql .=", level=?";
             array_push($a,$l);
          }
          else{
             $sql .="level=?";
             array_push($a,$l);
          }
 
        }
        if(!empty($c)){
         if(!empty($c) && !empty($a)){
             $sql .=", category=?";
             array_push($a,$c);
          }
          else {
             $sql .="category=?";
             array_push($a,$c);
         }
        }
       
         
        if($this->Query($sql, $a)){
            return ['status' => 'ok'];
 
        } else {
         return ['status' => 'error','data'=>'Could not update user'];
         }
 

    }
    public function addSportsData($sid,$aid,$i,$l,$c){
        if($this->Query("INSERT INTO athlete_sport (athlete_id,sport_id,institution,level,category) values(?,?,?,?,?,?)", [$sid,$aid,$i,$l,$c])){
             return ['status' => 'ok'];       
        }
        else{
            return ['status' => 'n'];

        }
    }
    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    /*public function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
   /* public function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }*/



}