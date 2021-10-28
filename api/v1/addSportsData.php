
<?php

require_once '../../web/application/models/AthleteAPI.php';
$id=$_REQUEST['sport_id'];
$a=$_REQUEST['athlete_id'];
$i=$_REQUEST['institution'];
$l=$_REQUEST['level'];
$c=$_REQUEST['category'];
$status;
$db=new AthleteAPI();
if(!(empty($id) || empty($a)||empty($i)||empty($l)||empty($c))){
    $status=$db->addSportsData($id,$a,$i,$l,$c);
    echo json_encode($status);
}
else{
    $status="e";
    echo json_encode($status);
}