<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/forumModel.php';
$db=new forumModel();
$id=$_REQUEST['id'];
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
$email->setSubject("Your injury request has accepeted!");
$email->addTo($e, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your request for injury has accepeted");
$email->addContent(
    "text/html", "<strong>Dear Patient,<br> Your request for the injury has been accepted and please view following details to get to know about the doctor. <br></strong> <ol> <li> Name :".$n."<li> Email: ".$d."</li>"
);
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
  
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
       