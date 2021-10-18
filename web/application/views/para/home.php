<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <?php linkCSS("assets/css/doctordashboard.css") ?>
        <?php linkCSS("assets/css/doctormain.css") ?>

    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">

        <header>
            <div class="register-wrapper">
                <a href="3.html" target="myiFrame"><button>Register User <span class="ti-plus"></span></button></a>
                </div>

                <div class="social-icons">
                    <span class="ti-bell"></span>
                    <div class="user-wrapper">
                        <img src="avatar.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Paramedical User</h4>
                            <small>Doctor</small>
                        </div>                  
                    </div>                                  
                </div>   

              
         </header>

            <main>
            <section class="home-section">
    <div class="home-content">
      <?php include "top.php";?> 
      <div class="forum">
         <?php include "bodyforum.php";?>
       
        <div class="updates box">
           <?php include "bodyupdates.php";?>
           
        </div>
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
    </body>
</html>