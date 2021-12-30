<?php 
$arr=[];
$i=0;

foreach ($data[0] as $obj)
{
  $arr[$i]=$obj->COUNT1;
  $i++;
} 
           
?> 


<div class="overview-boxes">
        <div class="box">                       
          <i class="fas fa-user-md icon"></i>
          <div class="right-side">
            <div class="box-topic">Total Patients</div>          
            <div class="number"><?php echo($data[0]->COUNT1)?></div>
          </div>
        </div>
       
        <div class="box">
          <i class="fas fa-users icon"></i>
          <div class="right-side">
            <div class="box-topic">Total Case Studies</div>
            <div class="number"><?php echo($data[0]->COUNT1)?></div>
           
          </div>

        </div>

        

</div>