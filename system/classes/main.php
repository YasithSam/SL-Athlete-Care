<?php
error_reporting(0);
class main{

   public function view($viewName, $data = []){

     if(file_exists("../application/views/" . $viewName . ".php")){
        
        require_once "../application/views/$viewName.php";

     } else {
        echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $viewName.php file not found </div>";
     }

   }


}


?>