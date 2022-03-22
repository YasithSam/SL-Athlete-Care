<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/doctormain.css") ?>
        <?php linkCSS("assets/css/paradashboard.css") ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        

    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">

        <header>
            <div class="social-icons">
                    <!-- <span class="ti-bell"></span> -->
                    <div class="profile">
                      <!-- <i class="fas fa-bell"></i> -->

                    

                    </div>
                      <img src="../../web/public/assets/dbimages/<?php echo $data[2]->profile_image_url?>" width="40px" height="40px" alt="">    
                    
                    <div class="user-wrapper">
                        <!-- <img src="../../web/public/assets/img/doctor.jpg" width="40px" height="40px" alt=""> -->
                        <div>
                          <h4><?php echo($data[2]->username)?></h4>
                          <small><?php echo($data[2]->role)?></small>
                        </div>
                    </div>                
                 </div>

                      
        </header>

           <!-- ?php include "header.php";? -->

            <main>
            <div class="popup">
      
    </div>



            <section class="home-section">
                <div class="home-content">
                  <?php include "top.php";?> 
                  <div class="forum">
                    <?php include "bodyforum.php";?>
                  

                  </div>
                </div>
            </section>

             
            </main>

        </div>

        <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<?php linkJS("assets/js/notifications.js") ?>
    </body>
</html>