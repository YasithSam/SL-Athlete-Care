<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/paramedicalModel.php';
$db=new paramedicalModel();
$id=$_REQUEST['id'];
$data=$db->declineRequest($id);
$email= new \SendGrid\Mail\Mail();
$email->setFrom(//, "Admin User");
$email->setSubject("Your Case Study is declined!");
$email->addTo($data->email, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your Case Study is declined");
$email->addContent(
    "text/html", "<strong>Dear Doctor,<br> Your Request for the Case Study " . $data->case_id . " is declined. <br></strong>"
    
);
$sendgrid = new \SendGrid(//);
try {
 $response = $sendgrid->send($email);
  header("location:" . BASEURL . "/paramedical/index?id=1",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
         
