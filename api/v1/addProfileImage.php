<?php
require_once '../../web/application/models/AthleteAPI.php';
$data= $_POST['image_path'];
$u=$_POST['id'];
 $db=new AthleteAPI();
 $data=$db->uploadProfileImage($u,$data);
 echo json_encode($data);

 ?>