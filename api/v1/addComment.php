<?php
require_once '../../web/application/models/BlogAPI.php';
 $c= $_REQUEST['comment'];
 $i=$_REQUEST['id'];
 $p=$_REQUEST['post'];
 $db=new BlogAPI();
 $data=$db->addComment($c,$i,$p);
 echo json_encode($data);

 ?>