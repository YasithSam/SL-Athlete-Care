<?php
require_once '../../web/application/models/caseStudyAPI.php';
$data= $_POST['image_path'];
 $title= $_POST['title'];
 $desc= $_POST['desc'];
 $c=$_POST['case_id'];
$u=$_POST['id'];
$s=$_POST['state'];
 $db=new caseStudyAPI();
 $data=$db->uploadImage(intval($c),$u,$data,$title,$desc,intval($s));
 echo json_encode($data);

 ?>