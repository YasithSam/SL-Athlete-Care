<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/BlogAPI.php';
$p= $_REQUEST['post_id'];
$s= $_REQUEST['section'];
$db=new BlogAPI();
$data=$db->addReport($p,$s);
$email= new \SendGrid\Mail\Mail();
$email->setFrom("elimoitsolutions@gmail.com", "Admin User");
$email->setSubject("Report on a post");
$email->addTo("yasithnirmala7@gmail.com", "Admin User - SL Athlete Care");
$email->addContent("text/html", "<strong>There is a report on ".$s." section in post Id:".$p." please check that out</strong>");
$sendgrid = new \SendGrid('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');
try {
 $response = $sendgrid->send($email);
 echo json_encode($data);
  
} catch (Exception $j) {
    echo 'Caught exception: '. $j->getMessage() ."\n";
}      


 ?>