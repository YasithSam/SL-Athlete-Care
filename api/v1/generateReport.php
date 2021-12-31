<?php
require_once '../../web/application/models/caseStudyModel.php';
$db=new caseStudyModel();
$id=$_REQUEST['id'];
$data1=$db->getReportDetails($id);  
$data2=$db->getReportMedicine($id);  
$data3=$db->getReportPreAttachments($id); 
$data4=$db->getReportPreWorkout($id);
$data5=$db->getReportPreDiet($id);
$data6=$db->getReportAdvices($id);
$data7=$db->getReportPostAttachments($id); 
$data8=$db->getReportPostWorkout($id);
$data9=$db->getReportPostDiet($id);
$data10=$db->getReportDoctorFeedback($id);
$data11=$db->getReportPhysioFeedback($id);
$data12=$db->getReportNutriFeedback($id);
$data13=$db->getReportAthleteFeedback($id);
$data14=$db->getReportDetailsPhysiotherapist($id);
$data15=$db->getReportDetailsNutritionist($id);
$html ="
<html>
<head>
<style>
*{
    font-family: 'Open Sans', sans-serif;
    box-sizing: border-box;
}

body{
    border-style: solid;
    border-width: 3px;
    border-color: black;
}

hr.top{
    border-top: 2px solid black;
}
  
.details_part{
    margin-top: 20px;
    margin-bottom: 15px;
    text-align: center;
}

.row{
    display: flex;
}
.pre{
    padding: 20px;
}

.post{
    padding: 20px;
}

.progress{
    padding: 20px;
}

li{
    font-weight: 600;
    padding-top: 10px;
}

.card-deck{
    display: grid;
    margin-top: 20px;
    margin-left: 30px;
    margin-right: 30px;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-gap: 10px;
    align-items: stretch;
    
  }
  
  .card{
    overflow-y: hidden;
    height: 500px;
    background-color: rgb(255, 255, 255);
    padding-bottom: 20px; 
  }
  
  .card-img-top{
      height: 80%;
      width: 80%;
      padding-bottom: 5px;
      padding-top: 5px;
  }
  
  
  .card-body{
      padding-left: 10px;
      height: 20%;
      margin-bottom: 10px;
  }

    
</style>
</head>
<body>";
$html.='
<div class="details_part"> 
  <h2>Case Study Title : '. $data1->title.'</h2>'.
  '<h3>'.$data1->description .'</h3>'.
  '<h3>Injury :'.$data1->injury.'</h3>
  <h3>Athlete :'.$data1->aname.' </h3> 
  <h3>Doctor :' .$data1->dname.'</h3>
  <h3>Physiotherapist : '.$data14->full_name.'</h3>
  <h3>Nutritionist :' .$data15->full_name.'</h3>
  <h3>Date : '.$data1->datetime.'</h3>
</div>
<hr class="top">
    <!--End Details Part-->

    <!--Pre Section-->
    <section class="pre">
        <h3>Pre Case Study</h3>
        <ol>
            <li style="font-size:18px;"><b>Medicine</b></li>';
            
foreach($data2 as $item):
  $html.='<ul>
  <div class="row"> 
      <li style="list-style-type:square; margin-right:150px;"><b>Title : </b>'.
      $item->heading.'</li>
      <span><li style="list-style-type:none;"><b>Date : </b>'.$item->datetime.'</li></span>
  </div>
      <li style="list-style-type:none; margin-left:50px;"><b>Description : </b>'.$item->description.'</li> 
</ul> <br>';
endforeach;
$html.=' 
<li style="font-size:18px;"><b>Attachments</b></li>
<ul > 
<div class="card-deck">';

foreach($data3 as $item):
$html.='
  <div class="card">
    <img class="card-img-top" src="../../web/public/assets/dbimages/'.$item->link.'"alt="icon"> 

        <div class="card-body">
    <li><b>Title : </b>'.$item->heading.'</li> 
    <li style="list-style-type:none;"><b>Description :</b>'.$item->description.'</li> 
    </div>
    </div>
    </div>';
endforeach;
$html.='
</ul>
<br>';
$html.='
 <li style="font-size:18px;"><b>Workout</b></li>
 <br/>
 <ul>
   ';
foreach($data4 as $item):
$html.='
<li style="list-style-type:square;"><b>Workout Title : </b>'.$item->title.'</li> 
<li style="list-style-type:none; margin-left: 25px;"><b>Workout Description : </b>'.$item->description.'</li>
<ol style="margin-left: 30px;">';

foreach($item->events as $item2):
$html.='
<li><b>Event Title : </b>'.$item2->title.'</li>
<li style="list-style-type:none;"><b>Event Description : </b>'.$item2->description.'</li>';
endforeach;
$html.='</ol>';
endforeach;
$html.='</ul>';
$html.='   
<br>';

$html.='             
<li style="font-size:18px;"><b>Diet</b></li>
<br/>
<ul>';
foreach($data5 as $item):
$html.='<li style="list-style-type:square;"><b>Diet Title : </b>'.$item->title.'</li> 
        <li style="list-style-type:none; margin-left: 25px;"><b>Diet Description : </b>'.$item->description.'</li>
            
        <ol style="margin-left: 30px;">';
                
foreach($item->events as $item2):
$html.='<li><b>Event Title : </b>'.$item2->title.'</li>
                    <ul>
                        <li style="list-style-type:none;"><b>Event Description : </b>'.$item2->descritption.'</li>
</ul>';

endforeach;
$html.='</ol>
        <br>';
endforeach;
$html.='</ul>
    <br>
</ol>
</section>';

$html.='<section class="post">
<h3>Post Case Study</h3>
<ol>
    <li style="font-size:18px;"><b>Advices</b></li>';
    
foreach($data6 as $item):
$html.='<ul>
<div class="row"> 
<li style="list-style-type:square; margin-right:150px;"><b>Title : </b>'.
$item->heading.'</li>
<span><li style="list-style-type:none;"><b>Date : </b>'.$item->datetime.'</li></span>
</div>
<li style="list-style-type:none; margin-left:50px;"><b>Description : </b>'.$item->description.'</li> 
</ul> <br>';
endforeach;
$html.=' 
<li style="font-size:18px;"><b>Attachments</b></li>
<ul > 
<div class="card-deck">';

foreach($data7 as $item):
$html.='
<div class="card">
<img class="card-img-top" src="../../web/public/assets/dbimages/'.$item->link.'"alt="icon"> 

<div class="card-body">
<li><b>Title : </b>'.$item->heading.'</li> 
<li style="list-style-type:none;"><b>Description :</b>'.$item->description.'</li> 
</div>
</div>
</div>';
endforeach;
$html.='
</ul>
<br>';
$html.='
<li style="font-size:18px;"><b>Post Workout</b></li>
<br/>
<ul>
';
foreach($data8 as $item):
$html.='
<li style="list-style-type:square;"><b>Workout Title : </b>'.$item->title.'</li> 
<li style="list-style-type:none; margin-left: 25px;"><b>Workout Description : </b>'.$item->description.'</li>
<ol style="margin-left: 30px;">';

foreach($item->events as $item2):
$html.='
<li><b>Event Title : </b>'.$item2->title.'</li>
<li style="list-style-type:none;"><b>Event Description : </b>'.$item2->description.'</li>';
endforeach;
$html.='</ol>';
endforeach;
$html.='</ul>';
$html.='   
<br>';

$html.='             
<li style="font-size:18px;"><b>Post Diet</b></li>
<br/>
<ul>';
foreach($data9 as $item):
$html.='<li style="list-style-type:square;"><b>Diet Title : </b>'.$item->title.'</li> 
<li style="list-style-type:none; margin-left: 25px;"><b>Diet Description : </b>'.$item->description.'</li>
    
<ol style="margin-left: 30px;">';
        
foreach($item->events as $item2):
$html.='<li><b>Event Title : </b>'.$item2->title.'</li>
            <ul>
                <li style="list-style-type:none;"><b>Event Description : </b>'.$item2->descritption.'</li>
</ul>';

endforeach;
$html.='</ol>
<br>';
endforeach;
$html.='</ul>
<br>
</section>';

$html.='<section class="progress">
<h3>Progress</h3>
<ol style="list-style-type:none;">
    <li style="font-size:18px;"><b>Doctor Progress Update</b></li>';
foreach($data10 as $item):
$html.='<ul>
<li style="list-style-type:square;">Feedback : '.$item->feedback.'</li>  
<li style="list-style-type:none; margin-left:20px">Date : '.$item->datetime.'</li>
</ul>';
endforeach;

$html.='<li style="font-size:18px;"><b>Physiotherapist Progress Update</b></li>
';
foreach($data11 as $item):
$html.='
<ul>
    <li style="list-style-type:square;">Feedback : '.$item->feedback.'</li>  
    <li style="list-style-type:none; margin-left:20px">Date :'.$item->datetime.'</li>
</ul>';
endforeach;
$html.='<br>';

$html.='
<li style="font-size:18px;"><b>Nutritionist Progress Update</b></li>
';
foreach($data12 as $item):
 $html.= '<ul>
        <li style="list-style-type:square;">Feedback :'.$item->feedback.'</li>  
        <li style="list-style-type:none; margin-left:20px">Date : '.$item->datetime.'</li>
    </ul>';
endforeach;
$html.='<br>';

$html.='
<li style="font-size:18px;"><b>Athlete Progress Update</b></li>';
foreach($data13 as $item):
$html.='<ul>
        <li style="list-style-type:square;">Feedback :'. $item->feedback.'</li>  
        <li style="list-style-type:none; margin-left:20px">Date : '.$item->datetime.'</li>
    </ul>';
endforeach;
$html.='<br/> </ol>';
$html.='</section>';

$html.="</body></html>";


require_once "../../web/TCPDF-main/tcpdf.php";
$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set title of pdf
$tcpdf->SetTitle('PDF Report');

// set margins
$tcpdf->SetMargins(10, 10, 10, 10);
$tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set header and footer in pdf
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
$tcpdf->setListIndentWidth(3);

// set auto page breaks
$tcpdf->SetAutoPageBreak(TRUE, 11);

// set image scale factor
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$tcpdf->AddPage();

$tcpdf->SetFont('times', '', 10.5);

$tcpdf->writeHTML($html, true, false, false, false, '');

//Close and output PDF document
$tcpdf->Output('demo.pdf', 'I');

?>