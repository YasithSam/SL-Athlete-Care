<?php
require_once '../../web/application/models/caseStudyAPI.php';
$f= $_REQUEST['feedback'];
 $t= $_REQUEST['type'];
 $c=$_REQUEST['case'];
$u=$_REQUEST['id'];
$s=$_REQUEST['state'];
 $db=new caseStudyAPI();
 $data=$db->addFeedback($f,$u,intval($c),intval($t),intval($s));
 echo json_encode($data);

 ?>