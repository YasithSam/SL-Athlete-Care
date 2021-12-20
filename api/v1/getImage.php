<?php
require_once '../../web/application/models/caseStudyAPI.php';
$id=$_REQUEST['id'];
$s=$_REQUEST['state'];
 $db=new caseStudyAPI();
 $data=$db->getImages($id,$s);
 echo json_encode($data);

 ?>