<?php
require_once '../../web/application/models/caseStudyAPI.php';
 $c=$_REQUEST['case'];
 $s=$_REQUEST['status'];
 $u=$_REQUEST['user'];
 $db=new caseStudyAPI();
 $data=$db->getFeedbacks($u,$c,$s);
 echo json_encode($data);

 ?>