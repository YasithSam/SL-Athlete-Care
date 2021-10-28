<?php
require_once '../../web/application/models/caseStudyAPI.php';
$id=$_REQUEST['case_id'];
$db=new caseStudyAPI();
$data=$db->getUpdates($id);
echo json_encode($data);