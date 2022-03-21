<?php
require_once '../../web/application/models/AthleteAPI.php';
$id=$_REQUEST['id'];
$db=new AthleteAPI();
$data=$db->getMessage($id);
echo json_encode($data);