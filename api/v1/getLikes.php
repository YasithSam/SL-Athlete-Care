<?php
require_once '../../web/application/models/BlogAPI.php';
$id=$_REQUEST['id'];
$userId=$_REQUEST['userId'];
$db=new BlogAPI();
$data=$db->isLiked($userId,$id);
echo json_encode($data);