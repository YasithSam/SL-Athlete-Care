<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/paramedicalModel.php';
$db=new paramedicalModel();
$id=$_REQUEST['id'];
$data=$db->declineRequest($id);
$e=$data[0];
$d=$data[1];
$n=$data[2];  
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
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
         