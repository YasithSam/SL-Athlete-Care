<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
require_once '../../web/application/models/injuryModel.php';
$db=new injuryModel();

    $athleteId=$_REQUEST['userId'];
    $injuryId=$_REQUEST['injury'];
    $doc=$_REQUEST['doctor'];   
    $con=$_REQUEST['condition'];
    $d=$_REQUEST['description'];   
    $status=$db->postInjury($athleteId,$injuryId,$doc,$con,$d);
    echo json_encode($status);

