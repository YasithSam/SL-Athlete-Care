<?php

require_once '../../web/application/models/BlogAPI.php';
$id=$_REQUEST['id'];
$db=new BlogAPI();
$data=$db->GetCommentsD($id);
print json_encode($data);