<?php
require_once '../../web/application/models/caseStudyAPI.php';
$id=$_REQUEST['id'];
$db=new caseStudyAPI();
$data=$db->getById($id);
echo json_encode($data);
