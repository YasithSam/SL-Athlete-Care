<?php
include "../../web/config/config.php";
include "../../web/system/classes/database.php";
require_once '../../web/application/models/injuryModel.php';
$db=new injuryModel();
$status=$db->getInjuryData();
echo json_encode($status);
