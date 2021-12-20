<?php
require_once '../../web/application/models/BlogAPI.php';
 $i=$_REQUEST['id'];
 $db=new BlogAPI();
 $data=$db->deleteBlog($i);
 echo json_encode($data);

 ?>