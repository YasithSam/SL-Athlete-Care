<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/accountModel.php';
$db=new accountModel();
$id=$_REQUEST['id'];
$data=$db->disableUser($id);
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
$email->setSubject("Your injury request has accepeted!");
$email->addTo($data->email, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your account has been suspended");
$email->addContent(
    "text/html", "<strong>Dear Patient,<br> Your account has been suspended. Please contact administration for more details <br></strong>"
);
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
  header("location:" . BASEURL . "/admin/users?id=1",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
       