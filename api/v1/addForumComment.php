<?php

require_once '../../web/application/models/AthleteAPI.php';
$id=$_REQUEST['id'];
$f=$_REQUEST['post'];
$c=$_REQUEST['comment'];
$db=new AthleteAPI();
$data=$db->addUserForumComment($f,$c,$id);
echo json_encode($data);