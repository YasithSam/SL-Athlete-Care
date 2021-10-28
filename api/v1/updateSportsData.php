<?php

require_once '../../web/application/models/AthleteAPI.php';
$db=new AthleteAPI();
$i=empty($_REQUEST['institution'])?"":$_REQUEST['institution'];
$l=empty($_REQUEST['level'])?"":$_REQUEST['level'];
$c=empty($_REQUEST['category'])?"":$_REQUEST['category'];
echo json_encode($db->updateSportsData($i,$l,$c));

