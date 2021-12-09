
<?php

require_once '../../web/application/models/AthleteAPI.php';
$id=$_REQUEST['sport'];
$a=$_REQUEST['athlete_id'];
$i=$_REQUEST['institution'];
$l=$_REQUEST['level'];
$status;
$db=new AthleteAPI();
if(!(empty($id) || empty($a)||empty($i)||empty($l))){
    $status=$db->addSportsData($id,$a,$i,$l);
    echo json_encode($status);
}
else{
    $status="e";
    echo json_encode($status);
}