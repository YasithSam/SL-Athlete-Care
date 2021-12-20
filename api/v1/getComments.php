<?php
require_once '../../web/application/models/BlogAPI.php';
$id=$_REQUEST["id"];
 $db=new BlogAPI();
 $data=$db->GetComments($id);
 echo json_encode($data);

 ?>