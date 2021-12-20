<?php
require_once '../../web/application/models/BlogAPI.php';
$data= $_POST['image_path'];
 $title= $_POST['title'];
 $desc= $_POST['desc'];
 $t=$_POST['type'];
 $i=$_POST['id'];
 $db=new BlogAPI();
 $data=$db->uploadArticle($title,$desc,$t,$data,$i);
 echo json_encode($data);

 ?>