<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/pre.css") ?>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
</head>
<body>
    <!--header starts-->
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
    
    <!--details-->
    <div class="details_part">
        <div class="name">CASE STUDY</div>
        <div class="description">
            <h3>Muscle Sprains and Strains</h3>
            <h4>Injuries and disorders that affects bones, muscles, ligaments, nerves, or tendons</h4>
        </div>
    </div>

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates
        </button>
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='';">
            Post
        </button>
    </div>
      
    <script>

      // Add active class to the current button (highlight it)
      var header = document.getElementById("btn-group");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }

    </script> 
      
  

    <!--end of buttons-->
  
      <!--Medicine-->
        <div class="container-2">
            <div class="title">
            <h3>Medicine </h3>
            </div>
            <?php if(!empty($data[0])): ?>

         <?php foreach($data[0] as $item): ?>
            <div class="card-2">
                <div class="imgbox">
                    <img src="./images/medicine.png" alt="">
                </div>
                <div class="textbox1">
                <div id="textbox">
                    <h2 class="alignleft"><b>Medical update - <?php echo ucwords($item->heading)?></b></h2>
                    <?php $d=explode(" ",$item->datetime)?>
                        <h3 class="alignright">Time: <?php echo ucwords($d[1])?></h3>
                        <h3 class="alignright">Date: <?php echo ucwords($d[0])?></h3>
                </div>
                <div style="clear: both;">
                    <h3><?php echo ucwords($item->description)?></h3>
                </div>
            </div>
            </div>
     <?php endforeach;?>
     <?php else: ?>
          <h1>No data </h1>
    <?php endif; ?> 
    
        
        <div class="addbtn2">
            <button class="addbutton" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/medicine/<?php echo($data[1])?>';">Add New</button>
            <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/medicine/<?php echo($data[1])?>';">More</button> 
        </div>

    </div>
    
   

    <!--end-->



      <!--Images-->
    <div class="container-s">
        <div class="title">
        <h3>Attachments</h3>
        </div>
        <div class="card-deck">
        <?php if(!empty($data[4])): ?>

          <?php foreach($data[4] as $item): ?>
            <div class="card">
                <img class="card-img-top" src="../../../web/public/assets/dbimages/<?php echo($item->link)?>" alt="icon"> 
                <center><a href="../../../web/public/assets/dbimages/<?php echo($item->link)?>" title="click here to see the full sized image" target="_blank">View Full Screen</a></center>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo ucwords($item->heading)?></h5>
                    <p class="card-text"><?php echo ucwords($item->description)?></p>
                   
                </div>
            </div>
        <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
    
            
        </div>

        <div class="addbtn2">
            <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/image/<?php echo($data[1])?>';">More</button>
        </div>

      </div>
    
      <!--end-->

      

      
    
    <div class="container">
        <div class="title">
        <h3>Workout</h3>
        </div>
        <div class="card-deck">
        <?php if(!empty($data[2])): ?>

         <?php foreach($data[2] as $item): ?>
            <div class="card">
                <img class="card-img-top" src="images/fitness.png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title"><?php echo ucwords($item->title)?></h5>
                    <p class="card-text"><?php echo ucwords($item->description)?></p>
                </div>
            </div>
            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
        </div>

    <div class="addbtn2">
        <button class="addbutton" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/addworkout/<?php echo($data[1])?>';">Add New</button>
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/workout/<?php echo($data[1])?>';">More</button>
    </div>

</div>

      <!--end-->

      <!--Diet-->
    <div class="container">
        <div class="title">
        <h3>Diet</h3>
        </div>
       
            <div class="card-deck">
            <?php if(!empty($data[3])): ?>

<?php foreach($data[3] as $item): ?>
                <div class="card">
                    <img class="card-img-top" src="images/diet (3).png" alt="icon"> 
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ucwords($item->title)?></h5>
                        <p class="card-text"><?php echo ucwords($item->description)?></p>
                    </div>
                </div>

            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
        </div>

    <div class="addbtn2">
        <button class="addbutton" onclick="window.location.href='./forms/add-diet.html/<?php echo($data[1])?>';">Add New</button>
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/diet/<?php echo($data[1])?>';">More</button>
    </div>
</div>
      <!--end-->
    
</body>
</html>