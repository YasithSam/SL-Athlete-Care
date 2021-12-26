<?php
require_once "../../web/vendor/autoload.php";
require_once '../../web/application/models/BlogAPI.php';
$p= $_REQUEST['post_id'];
$s= $_REQUEST['section'];
$db=new BlogAPI();
$data=$db->addReport($p,$s);
$email= new \SendGrid\Mail\Mail();
$email->setFrom("yasith.sam7@gmail.com", "Admin User");
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