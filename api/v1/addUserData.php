<?php

require_once '../../web/application/models/AthleteAPI.php';
$db=new AthleteAPI();
$r=empty($_REQUEST['r_email'])?"":$_REQUEST['r_email'];
$a=empty($_REQUEST['address'])?"":$_REQUEST['address'];
$d=empty($_REQUEST['dob'])?"":$_REQUEST['dob'];
$c=empty($_REQUEST['city'])?"":$_REQUEST['city'];
echo json_encode($db->userData($r,$a,$d,$c));


?>