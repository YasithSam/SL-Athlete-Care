<?php
require_once '../../web/application/models/AthleteAPI.php';
 $id=$_REQUEST['id'];
 $message=$_REQUEST['message'];
 $db=new AthleteAPI();
 $data=$db->addMessage($id,$message);
 echo json_encode($data);

 ?>