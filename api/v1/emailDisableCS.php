<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/accountModel.php';
$db=new accountModel();
$id=$_REQUEST['id'];
$data=$db->disableCaseStudy($id);
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
$email->setSubject("Your case study is now disabled!");
$email->addTo($data->email, "Admin User - SL Athlete Care");
$email->addContent("text/plain", "Your case study is disabled");
$email->addContent(
    "text/html", "<strong>Dear Patient,<br> Your case study has been disabled. Please contact administration for more details <br></strong>"
);
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
  header("location:" . BASEURL . "/admin/casestudy?id=1",true,303);
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}               
       