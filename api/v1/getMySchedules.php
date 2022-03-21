<?php
require_once '../../web/application/models/AthleteAPI.php';
$uid=$_REQUEST['id'];
$db=new AthleteAPI();
$data=$db->getMySchedules($uid);
echo json_encode($data);