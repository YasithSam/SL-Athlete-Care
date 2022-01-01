<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/paramedicalModel.php';
$db=new paramedicalModel();
$id=$_REQUEST['id'];
$data=$db->declineRequest($id);
/* $e=$data[0];
$d=$data[1];
$n=$data[2];  
 */$email= new \SendGrid\Mail\Mail();
$email->setFrom("yasith.sam7@gmail.com", "Admin User");
$email->setSubject("Your Case Study is declined!");
$email->addTo($data->email, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your Case Study is declined");
$email->addContent(
    "text/html", "<strong>Dear Doctor,<br> Your Case Study is declined. <br></strong>"
    
);
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
  header("location:" . BASEURL . "/paramedical/index?id=1",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
         