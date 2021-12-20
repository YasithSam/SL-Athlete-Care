<?php
require_once '../../web/application/models/BlogAPI.php';
 $db=new BlogAPI();
 $data=$db->GetAll();
 echo json_encode($data);

 ?>