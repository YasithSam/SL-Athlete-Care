<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php linkCSS("assets/css/cs/view-more-schedules.css") ?>
    <?php linkCSS("assets/css/cs/main.css") ?>
    <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script></head>

<body>
<div class="header_section">
        <div class="header">
            <a href="#">SL ATHLETE CARE</a>
        </div>
        <div class="profile">
            <i class="fas fa-bell"></i>
            <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</button>
        </div>
    </div>
    <!--header ends-->

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates 
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='';">
            Post
        </button>
    </div>
<!--cards-->
<div class="container">
    <div class="title">
    <h3>Diet</h3>
    </div>
    <div class="card-deck">
      <?php if(!empty($data[0])): ?>
        
        <?php foreach($data[0] as $item): ?>
        <div class="card">
            <img class="card-img-top" src="images/diet (2).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title"><?php echo ucwords($item->title)?></h5>
                <p class="card-text"><?php echo ucwords($item->description)?></p>
            </div>

            <div class="endbtn">
                <button class="viewbtn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/dietsingle/<?php echo($item->id)?>';">View Schedule</button>
            </div>
        </div>
        <?php endforeach;?>
     <?php else: ?>
            <h1>No data </h1>
    <?php endif; ?> 

    </div>

    

</div>

</body>
</html>