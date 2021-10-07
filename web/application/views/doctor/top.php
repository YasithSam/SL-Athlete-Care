<?php 
$arr=[];
$i=0;

foreach ($data as $obj)
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
            <div class="number">
             <?php echo $arr[0]?>
             
            </div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-procedures icon"></i>
          <div class="right-side">
            <div class="box-topic">Case Studies</div>
            <div class="number"> <?php echo $arr[1]?></div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-users icon"></i>
          <div class="right-side">
            <div class="box-topic">Forum Injuries</div>
            <div class="number"><?php echo $arr[2]?></div>
           
          </div>
        </div>
</div>