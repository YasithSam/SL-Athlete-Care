<?php
require_once '../../web/application/models/BlogAPI.php';
 $db=new BlogAPI();
 $t=$_REQUEST['type'];
 $data=$db->GetAll($t);
 echo json_encode($data);

 ?>