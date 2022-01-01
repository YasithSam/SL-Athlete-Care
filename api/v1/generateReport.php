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
        <h2>Pre Case Study</h2>
        <ol>
            <li style="font-size:18px;"><b>Medicine</b></li><br>';
            
foreach($data2 as $item):
  $html.='<ul> 
      <li style="list-style-type:square;"><b>Title : </b>'.$item->heading.'<b>           Date : </b>'.$item->datetime. ' </li>
    
      <p>           <b>Description : </b>'.$item->description.'</p> 
</ul> <br>';
endforeach;

$html.=' 
<li style="font-size:18px;"><b>Attachments</b></li>
<ul> 
<div class="card-deck">';

foreach($data3 as $item):
$html.='
  <div class="card">
    <img class="card-img-top" width="400px" height="400px" src="../../web/public/assets/dbimages/'.$item->link.'"alt="icon"> 

        <div class="card-body">
    <li><b>Title : </b>'.$item->heading.'</li> 
    <p><b>                 Description :</b>'.$item->description.'</p> 
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
 <ul>';
 foreach($data4 as $item):
 $html.='<li style="list-style-type:square;"><b>Workout Title : </b>'.$item->title.'</li> 
         <p><b>             Workout Description : </b>'.$item->description.'</p>
             
         <ol style="margin-left: 30px;">';
                 
 foreach($item->events as $item2):
 $html.='<li><b>Event Title : </b>'.$item2->title.'</li>
                     <ul> <li style="list-style-type:none;"><b>Repetitions : </b>'.$item2->reps. '<b>          Time : </b>'.$item2->time.'</li>
                         <li style="list-style-type:none;"><b>Event Description : </b>'.$item2->description.'</li>
 </ul><br>';
 
 endforeach;
 $html.='</ol>
         <br>';
 endforeach;
 $html.='</ul>
     <br>';

$html.='             
<li style="font-size:18px;"><b>Diet</b></li>
<br/>
<ul>';
foreach($data5 as $item):
$html.='<li style="list-style-type:square;"><b>Diet Title : </b>'.$item->title.'</li> 
        <p><b>             Diet Description : </b>'.$item->description.'</p>
            
        <ol style="margin-left: 30px;">';
                
foreach($item->events as $item2):
$html.='<li><b>Event Title : </b>'.$item2->title.'</li>
                    <ul>
                    <li style="list-style-type:none;"><b>Amount : </b>'.$item2->amount.'</li>
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
<h2>Post Case Study</h2>
<ol>
    <li style="font-size:18px;"><b>Advices</b></li><br>';
    
foreach($data6 as $item):
$html.='<ul>
<li style="list-style-type:square;"><b>Title : </b>'.$item->heading.' <b>        Date : </b>'.$item->datetime.'</li>

      <p><b>        Description : </b>'.$item->description.'</p> 
</ul> <br>';
endforeach;
$html.=' 
<li style="font-size:18px;"><b>Attachments</b></li>
<ul > 
<div class="card-deck">';


foreach($data7 as $item):
$html.='
<div class="card">
<img class="card-img-top" width="400px" height="400px" src="../../web/public/assets/dbimages/'.$item->link.'"alt="icon"> 

        <div class="card-body">
    <li><b>Title : </b>'.$item->heading.'</li> 
    <p><b>             Description :</b>'.$item->description.'</p> 
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
<ul>';
foreach($data8 as $item):
$html.='<li style="list-style-type:square;"><b>Workout Title : </b>'.$item->title.'</li> 
        <p><b>             Workout Description : </b>'.$item->description.'</p>
            
        <ol style="margin-left: 30px;">';
                
foreach($item->events as $item2):
$html.='<li><b>Event Title : </b>'.$item2->title.'</li>
                    <ul>
                    <li style="list-style-type:none;"><b>Repetitions : </b>'.$item2->reps. '<b>          Time : </b>'.$item2->time.'</li>
                        <li style="list-style-type:none;"><b>Event Description : </b>'.$item2->description.'</li>
</ul><br>';

endforeach;
$html.='</ol>
        <br>';
endforeach;
$html.='</ul>
    <br>';

$html.='             
<li style="font-size:18px;"><b>Post Diet </b></li>
<br/>
<ul>';
foreach($data9 as $item):
$html.='
<li style="list-style-type:square;"><b>Diet Title : </b>'.$item->title.'</li> 
        <p><b>             Diet Description : </b>'.$item->description.'</p>
    
<ol style="margin-left: 30px;">';
        
foreach($item->events as $item2):
$html.='<li><b>Event Title : </b>'.$item2->title.'</li>
            <ul>
            <li style="list-style-type:none;"><b>Amount : </b>'.$item2->amount.'</li>
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
<h2>Progress</h2>
<ol>
    <li style="font-size:18px;"><b>Doctor Progress Update</b></li><br>';
foreach($data10 as $item):
$html.='<ul>
<li style="list-style-type:square;"><b>Feedback : </b>'.$item->feedback.'</li>  
<p>         <b>Date : </b>'.$item->datetime.'</p>
</ul>';
endforeach;

$html.='<li style="font-size:18px;"><b>Physiotherapist Progress Update</b></li><br>
';
foreach($data11 as $item):
$html.='
<ul>
    <li style="list-style-type:square;"><b>Feedback : </b>'.$item->feedback.'</li>  
    <p>        <b>Date : </b>'.$item->datetime.'</p>
</ul>';
endforeach;
$html.='<br>';

$html.='
<li style="font-size:18px;"><b>Nutritionist Progress Update</b></li><br>
';
foreach($data12 as $item):
 $html.= '<ul>
        <li style="list-style-type:square;"><b>Feedback : </b>'.$item->feedback.'</li>  
        <p>         <b>Date : </b> '.$item->datetime.'</p>
    </ul>';
endforeach;
$html.='<br>';

$html.='
<li style="font-size:18px;"><b>Athlete Progress Update</b></li><br>';
foreach($data13 as $item):
$html.='<ul>
        <li style="list-style-type:square;"><b>Feedback : </b>'. $item->feedback.'</li>  
        <p>         <b>Date : </b> '.$item->datetime.'</p>
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
$tcpdf->SetTitle('Case Study Report');

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
$tcpdf->Output('CaseStudyReport.pdf', 'I');

?>