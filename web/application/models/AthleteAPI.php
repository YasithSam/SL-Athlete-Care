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
    public function addUser($username,$password,$phone){
        $uuid="saaa";
        $role=1;
        $isDisabled=0;
        /* Secure password hash. */
        $hash = password_hash($password, PASSWORD_DEFAULT);
        if($this->Query("INSERT INTO application_user VALUES (?,?,?,?,?,?)",[$uuid,$role,$username,$phone,$hash,$isDisabled])){
            return true;
        }else{
            return false;
        }
    }
    public function validateUser($username,$password,$phone){
        return true;
    }
    public function LoginUser($phone,$password){
        if($this->Query("SELECT * FROM application_user WHERE phone = ? ", [$phone])){
            if($this->rowCount() > 0 ){
                $row = $this->fetch();
                $dbPassword = $row->password;
                if(true){
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