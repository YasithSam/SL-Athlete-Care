<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/admin/adminmain.css") ?>
        <?php linkCSS("assets/css/admin/admin.css") ?>
        <?php linkCSS("assets/css/alert.css") ?>
    </head>

    <body>
      
        <?php include "sidebar.php"?>

<div class="main-content">
   
        <header>
        <div class="register-wrapper">
            <a href="<?php echo BASEURL;?>/admin/register"><button>Register User <span class="ti-plus"></span></button></a>
        </div>
        
        <div class="social-icons">
            <span class="ti-bell"></span>
            <div class="user-wrapper">
                <img src="../../web/public/assets/img/doctor.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo($data[1]->username)?></h4>
                    <small><?php echo($data[1]->role)?></small>
                </div>
            </div>                
        </div>
</header>
   
    <!--Body section-->
    <main>
          <div class="home-content">
          <?php $this->flash('docreg', 'alert alert-success') ?>
          <?php $this->flash('parareg', 'alert alert-success') ?>
            <!--Overview boxes-->
            <div class="overview-boxes">
              <div class="box">
                <i class="fas fa-user-md icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Athletes</div>
                  <div class="number"><?php echo($data['patients'])?></div>
                </div>
              </div>
              <div class="box">
                <i class="fas fa-procedures icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Case Studies</div>
                  <div class="number"><?php echo($data['casestudies'])?></div>
                </div>
              </div>
              <div class="box">
                <i class="fas fa-users icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Posts</div>
                  <div class="number"><?php echo($data['post'])?></div>
                </div>
              </div>
            </div>
            <!--End of Overview boxes-->
            <div class="charts">
              <div class="chart1 box">
                <p>User movement</p>
                <div class="graph">
                    <img class="line" src="../../web/public/assets/img/line.jpeg" alt="">
                </div>
                
              </div>
      
              <div class="chart2 box">
                    <div class="piechartbox">
                        <p>Athletes by sport</p>
                        
                        <img class="pie" src="../../web/public/assets/img/pie.jpeg" alt="pie chart">
                    </div>
                    
              </div>
            </div>
            </div>
<!--End of body section-->
  </main>
</div>

<!--Forum dropdown menu script-->
            <script>
              /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
              var dropdown = document.getElementsByClassName("dropdown-btn");
              var i;
              
              for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
                });
              }
              </script>
    </body>
</html>