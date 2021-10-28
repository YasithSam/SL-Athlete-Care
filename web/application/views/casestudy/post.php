<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/post.css") ?>
    <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script></head>
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
      
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1]->id)?>';">
         Updates
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1]->id)?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post/<?php echo($data[1]->id)?>';">
            Post
        </button>
    </div>
      


    <!--end of buttons-->

    
    <!--Advices-->
   <!--Advices-->
   <div class="container-2">
        <div class="title">
        <h3>Advices</h3>
        </div>

        <div class="card-2">
            <div class="imgbox">
                <img src="./images/advice.png" alt="">
            </div>
            <div class="textbox1">
            <div id="textbox">
                <h2 class="alignleft"><b>Advice update - 1</b></h2>
                <h3 class="alignright">03/10/2021</h3>
            </div>
              <div style="clear: both;">
                <h3>This card has supporting text below as a natural lead-in to additional</h3>
            </div>
           </div>
        </div>
    
        <div class="card-2">
            <div class="imgbox">
                <img src="./images/advice.png" alt="">
            </div>
            <div class="textbox1">
            <div id="textbox">
                <h2 class="alignleft"><b>Advice update - 2</b></h2>
                <h3 class="alignright">03/10/2021</h3>
            </div>
              <div style="clear: both;">
                <h3>This card has supporting text below as a natural lead-in to additional</h3>
            </div>
           </div>
        </div>

        <div class="card-2">
            <div class="imgbox">
                <img src="./images/advice.png" alt="">
            </div>
            <div class="textbox1">
            <div id="textbox">
                <h2 class="alignleft"><b>Advice update - 3</b></h2>
                <h3 class="alignright">03/10/2021</h3>
            </div>
              <div style="clear: both;">
                <h3>This card has supporting text below as a natural lead-in to additional</h3>
            </div>
           </div>
        </div>

    <div class="addbtn2">
        <button class="addbutton" onclick="window.location.href='./forms/add-advice.html';">Add New</button>
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post';">More</button> 
    </div>

    </div>
    

    <!--end-->

      
    <!--Workout-->
    <div class="container">
        <div class="title">
        <h3>Workout</h3>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="images/fitness.png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/workout-machine.png" alt="icon"> 
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/yoga.png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>
            
        </div>

    <div class="addbtn2">
        <button class="addbutton" onclick="window.location.href='./forms/add-workout.html';">Add New</button>
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/workout';">More</button>
    </div>

</div>
      <!--end-->

      <!--Diet-->
    <div class="container">
        <div class="title">
        <h3>Diet</h3>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="images/diet (3).png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/diet (2).png" alt="icon"> 
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/healthy-food.png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>
            
        </div>

    <div class="addbtn2">
        <button class="addbutton" onclick="window.location.href='./forms/add-diet.html';">Add New</button>
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/diet';">More</button>
    </div>
</div>
      <!--end-->


   
      <!--end-->

    
</body>
</html>