<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php linkCSS("assets/css/pt.css") ?>
        <?php linkCSS("assets/css/ptmain.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>
           
<!--Body section-->
<div class="main">

<div class="container">
    
    <div class="title"> Patients Overview </div> 
    <div class="subtitle"> Page 1 </div>

    <form class="search-btn" action="/action_page.php">
        <input type="text" class="search" placeholder="Search..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="<?php echo BASEURL;?>/doctor/athlete">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="<?php echo BASEURL;?>/doctor/patient">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="athleteprofile.html">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="athleteprofile.html">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="athleteprofile.html">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="athleteprofile.html">View</a>
    </div>
</div>
<!--Update card-->
<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; A.B.C. Perera <br> Sport: &nbsp; Swimming </div>
        <div class="col2"> Injury: &nbsp; Arm strain <br> Condition: &nbsp; Severe </div>
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="athleteprofile.html">View</a>
    </div>
</div>

<!--buttons-->
<div class="btn-group">
    <a href="" class="activebtn" style="margin-right: 10px;">1</a>
    <a href="" class="btn" style="margin-left: 10px;">2</a>
    <a href="" class="btn" style="margin-left: 20px;">3</a>
    <a href="" class="btn" style="margin-left: 20px;">>></a>
</div>
<!--end of buttons-->

</div>

</div>

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