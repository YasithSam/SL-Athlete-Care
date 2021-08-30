<?php
class database {
    
    public $host = HOST;
    public $user = USER;
    public $database = DATABASE;
    public $password = PASSWORD;

    public function __construct(){
        try{
           
          if($this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->user, $this->password)){
              echo "<h1> Successfully connected to database";
          }
          
   
        } catch(PDOException $e){
   
           echo "<h1>Database connection Error: </h1>". $e->getMessage();
   
        }
   
    }    

}

?>