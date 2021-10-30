<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>casestudy</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/casestudyNew.css") ?>
        <?php linkCSS("assets/css/search2.css") ?>
        <?php linkCSS("assets/css/styleCS.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

<div class="main-content">

    <?php include "header.php"?>

   <!--Body section-->
<main>

    <div class="title">Case Study Overview</div>

    <div class="menu">
        <button class="showall">All</button>
        <button class="single" target="1">Current</button>
        <button class="single" target="2">Old</button>
    </div>
   <!-- <div class="search-container">
          <input type="text" placeholder="Search case studies..." name="search">
          <div class="srch"><a href=""> <i class="fa fa-search"></i></a></div>
    </div> -->
    <div class="filter-search-box">
        <div class="wrapper">
            <div class="tabs_wrap">
                <ul class="indicator">
                    <li data-filter="all" class="active"><a href="#">All</a></li>
                    <li data-filter="date"><a href="#">By Date</a></li>
                    <li data-filter="injury"><a href="#">By Injury</a></li>
                    <li data-filter="sport"><a href="#">By sport</a></li>
                    <li data-filter="doctor"><a href="#">By doctor</a></li>
                </ul>
            </div>
        </div>
        <div class="search-box">
            <div class="container1">
                <div class="search_wrap search_wrap_3">
                    <div class="search_box">
                        <input type="text" class="input" placeholder="search...">
                        <div class="btn btn_common">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="target_box">
        <!--Old case studies-->
        <div id="div1" class="target">
            <!--Update card-->
            <div class="injury">
                <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
                <div class="description">
                    <div class="col"> Name: A.B.C. Perera </div>
                    <div class="col"><span> Injury: Arm strain </span> </div>
                </div>
                <div class="btn-grp">
                    
                    <div class="button2">
                        <div class="date">21/10/2021</div>
                        <a href="<?php echo BASEURL;?>/caseStudyController/index/1">View</a>
                    </div>
                </div>
            </div>
            <!--Update card-->
            <div class="injury">
                <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
                <div class="description">
                    <div class="col"> Name: A.B.C. Perera </div>
                    <div class="col"><span> Injury: Arm strain </span> </div>
                </div>
                <div class="btn-grp">
                    
                    <div class="button2">
                        <div class="date">21/10/2021</div>
                        <a href="athleteprofile.html">View</a>
                    </div>
                </div>
            </div>         
        </div>
                          
        <!--Current case studies-->
        <div id="div2" class="target">
             <!--Update card-->
             <div class="injury">
                <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
                <div class="description">
                    <div class="col"> Name: P.Q.R. Perera </div>
                    <div class="col"><span> Injury: Arm strain </span> </div>
                </div>
                <div class="btn-grp">
                    <div class="button1">
                        <a href="">Request</a>
                    </div>
                    <div class="button2">
                        <div class="date">21/10/2021</div>
                        <a href="athleteprofile.html">View</a>
                    </div>
                </div>
            </div>  
            <!--Update card-->
            <div class="injury">
                <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
                <div class="description">
                    <div class="col"> Name: P.Q.R. Perera </div>
                    <div class="col"><span> Injury: Arm strain </span> </div>
                </div>
                <div class="btn-grp">
                    <div class="button1">
                        <a href="">Request</a>
                    </div>
                    <div class="button2">
                        <div class="date">21/10/2021</div>
                        <a href="athleteprofile.html">View</a>
                    </div>
                </div>
            </div>   
                              
        </div>
    </section>

    <script type="text/javascript">
    jQuery(function(){
        jQuery('.showall').click(function(){
        jQuery('.target').show();
    })});
    jQuery('.single').click(function(){
    jQuery('.target').hide();
    jQuery('#div'+$(this).attr('target')).show();
    });
    var buttons = $('button');
    buttons.click(function() {
    buttons.css('background-color', 'snow');
    $(this).css('background-color', 'rgb(8, 190, 255)');
    });
    </script>

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