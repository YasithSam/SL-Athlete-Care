<?php
require_once '../../web/application/models/AthleteAPI.php';
$fId = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
$comment = isset($_REQUEST['comment']) ? $_REQUEST['comment'] : "";
$db=new AthleteAPI();
$data=$db->addUserForumCommentD($fId,$comment);
echo json_encode($data);
?>