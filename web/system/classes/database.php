<?php

class database {
    
    public $host = HOST;
    public $user = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;
    public function __construct(){
        try{
           
          if($this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->user, $this->password)){
              //echo "<h1> Successfully connected to database";
          }
          
   
        } catch(PDOException $e){
   
           echo "<h1>Database connection Error: </h1>". $e->getMessage();
   
        }
   
    }
    public function Query($qry, $params=[]){
        if(empty($params)){
          
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();

        } else {
       
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($params);
        }

    }
    public function rowCount(){
        return $this->result->rowCount();
    }
    public function fetch(){

        return $this->result->fetch(PDO::FETCH_OBJ);

    }
    public function fetchall(){

        return $this->result->fetchAll(PDO::FETCH_OBJ);

    }


}

?>