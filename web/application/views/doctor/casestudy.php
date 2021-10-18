<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php linkCSS("assets/css/cs.css") ?>
        <?php linkCSS("assets/css/csmain.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">
        <?php include "header.php";?>

           
<!--Body section-->
            <main>
                      <div class="menu">
                          <!--<a id="showall">All</a>-->
                          <button class="single" target="1">Current</button>
                          <button class="single" target="2">Old</button>
                      </div>
                      
                      <section class="target_box">
                          <!--Old case studies-->
                          <div id="div1" class="target">
                              <!--Update card-->
                              <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="qual">Name: A.B.C. Perera<br> <p class="text">Injury: Arm strain </p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="<?php echo BASEURL;?>/caseStudyController/">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                 <!--Update card-->
                              <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="qual">Name: A.B.C. Perera<br> <p class="text">Injury: Arm strain </p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="athleteprofile.html">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                 <!--Update card-->
                              
                          </div>
                          <!--Current case studies-->
                          <div id="div2" class="target">
                               <!--Update card-->
                               <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="qual">Name: Kasun Sankalpa<br> <p class="text">Injury: Arm strain </p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="athleteprofile.html">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                 <!--Update card-->
                              <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="qual">Dasun Shanaka<br> <p class="text">Injury: Arm strain </p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="athleteprofile.html">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                 <!--Update card-->
                              
                                 <!--Update card-->
                             
                          </div>
                      </section>
                      <script type="text/javascript">
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
                  </body>
              </html>
            </main>

        </div>
    </body>
</html>