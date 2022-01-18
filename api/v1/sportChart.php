<?php

require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/accountModel.php';
$db=new accountModel();
$data=$db->getUsersBySport();
print json_encode($data);
?>