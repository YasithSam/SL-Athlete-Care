<?php
require_once '../../web/application/models/AthleteAPI.php';
require_once '../../web/application/models/accountModel.php';
$db=new accountModel();
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$status=$db->loginUser($username,$password);
echo json_encode($status);


?>