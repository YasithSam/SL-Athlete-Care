<?php

require_once '../../web/application/models/AthleteAPI.php';
$db=new AthleteAPI();
$u=empty($_REQUEST['id'])?"":$_REQUEST['id'];
$f=empty($_REQUEST['full_name'])?"":$_REQUEST['full_name'];
$a=empty($_REQUEST['address'])?"":$_REQUEST['address'];
$c=empty($_REQUEST['city'])?"":$_REQUEST['city'];
$d=empty($_REQUEST['dob'])?"":$_REQUEST['dob'];
$r=empty($_REQUEST['r_email'])?"":$_REQUEST['r_email'];
echo json_encode($db->updateUserData($u,$f,$a,$c,$d,$r));

