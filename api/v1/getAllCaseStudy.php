<?php
require_once '../../web/application/models/caseStudyAPI.php';
$id=$_REQUEST['id'];
$db=new caseStudyAPI();
$data=$db->getCaseStudy($id);
echo json_encode($data);
