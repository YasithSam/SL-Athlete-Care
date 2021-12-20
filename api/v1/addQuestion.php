<?php
require_once '../../web/application/models/BlogAPI.php';
 $title= $_REQUEST['heading'];
 $desc= $_REQUEST['desc'];
 $t=$_REQUEST['sport'];
 $i=$_REQUEST['id'];
 $db=new BlogAPI();
 $data=$db->uploadQuestion($title,$desc,$t,$i);
 echo json_encode($data);

 ?>