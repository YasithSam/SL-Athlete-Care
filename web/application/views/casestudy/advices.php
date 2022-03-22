<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/view-more-horizonta.css") ?>
    <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script></head>
<body>

<header>
        <div class="logo">
            <img src="../../public/assets/img/logo-4040.png" alt="">
            <h2>SL Athlete Care</h2>
        </div>
        
            
                <div class="profile">
                   
                    <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                </div>
        
    </header> 
    <!--header ends-->
   
      <!--buttons-->
      <div id="btn-group">
      
      <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
        Updates 
      </button>
      <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
          Pre
      </button>
      <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post/<?php echo($data[1])?>';">
          Post
      </button>
  </div>

<!--Advice-->
<div class="container-2">
    <div class="title">
    <h3>Advices</h3>
    </div>
    <?php if(!empty($data[0])): ?>
        
        <?php foreach($data[0] as $item): ?>
                <div class="card-2">
                <div class="imgbox">
                        <img src="../../public/assets/img/advice.png" alt="icon">
                    </div>
                    <div class="textbox1">
                    <div id="textbox">
                        <h2 class="alignleft"><b><?php echo ucwords($item->heading)?></b></h2>
                        <?php $d=explode(" ",$item->datetime)?>
                        <h3 class="alignright">Time: <?php echo ucwords($d[1])?></h3>
                        <h3 class="alignright">Date: <?php echo ucwords($d[0])?></h3>
                    </div>
                    <div style="clear: both;">
                        <h3><?php echo ucwords($item->description)?></h3>
                    </div>
                </div>
                </div>
                <div class="endbtn">
                
                <a href="<?php echo BASEURL;?>/caseStudyController/deleteAdvice?id=<?php echo($item->id)?>&&case_id=<?php echo($data[1])?>"
                onclick='return confirm("Are you sure want to confirm?");'><button class="editbtn"><i class="fa fa-trash"></i>Delete</button></a>
               
            </div>
            
        <?php endforeach;?>
     <?php else: ?>
            <h1>No data </h1>
    <?php endif; ?> 

   
</div>

<!--end-->


</body>
</html>

