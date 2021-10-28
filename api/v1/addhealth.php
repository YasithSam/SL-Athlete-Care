<?php

require_once '../../web/application/models/AthleteAPI.php';

$id=$_REQUEST['id'];
$h=$_REQUEST['height'];
$w=$_REQUEST['weight'];
$f=$_REQUEST['fat'];
$status;
$db=new AthleteAPI();
if(!(empty($id) && (empty($h)||empty($w)||empty($f)))){
    $status=$db->addHealth($id,$h,$w,$f);
    echo json_encode($status);
}
else{
    $status="e";
    echo json_encode($status);
}