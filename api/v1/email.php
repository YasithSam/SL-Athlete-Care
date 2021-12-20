<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/forumModel.php';
$db=new forumModel();
$id=$_REQUEST['id'];
$data=$db->updateForumbyId($id,1);
$e=$data[0];
$d=$data[1];
$n=$data[2];  
$email= new \SendGrid\Mail\Mail();
$email->setFrom("yasith.sam7@gmail.com", "Admin User");
$email->setSubject("Your injury request has accepeted!");
$email->addTo($e, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your request for injury has accepeted");
$email->addContent(
    "text/html", "<strong>Dear Patient,<br> Your request for the injury has been accepted and please view following details to get to know about the doctor. <br></strong> <ol> <li> Name :".$n."<li> Email: ".$d."</li>"
);
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
  header("location:" . BASEURL . "/forumController",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
         