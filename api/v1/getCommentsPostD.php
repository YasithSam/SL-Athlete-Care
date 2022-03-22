<?php

require_once '../../web/application/models/forumModel.php';
$id=$_REQUEST['id'];
$db=new forumModel();
$data=$db->getUserForumCommentsD($id);
print json_encode($data);