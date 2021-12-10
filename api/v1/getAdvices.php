<?php
require_once '../../web/application/models/caseStudyAPI.php';
$id=$_REQUEST['id'];
$status=$_REQUEST['type'];
$db=new caseStudyAPI();
$data=$db->getAdvices($id,$status);
echo json_encode($data);