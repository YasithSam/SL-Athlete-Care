<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
require_once '../../web/application/models/accountModel.php';

$username=$_REQUEST['username'];
$cPassword=$_REQUEST['cpassword'];
$nPassword=$_REQUEST['npassword'];

$user=new accountModel();
$status=$user->changePassword($username,$cPassword,$nPassword);
echo json_encode($status);

?>