<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/accountModel.php';
$db=new accountModel();
$id=$_REQUEST['id'];
$data=$db->disableUser($id);
$email= new \SendGrid\Mail\Mail();
$email->setFrom("yasith.sam7@gmail.com", "Admin User");
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
       