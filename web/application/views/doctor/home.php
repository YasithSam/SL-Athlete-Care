<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/doctormain.css") ?>
        <?php linkCSS("assets/css/doctordashboard.css") ?>
        

    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">

           <?php include "header.php";?>

            <main>
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
    </body>
</html>