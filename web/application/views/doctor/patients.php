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
            <main>
             <div class="title">Patients Overview</div>
          
                
                              <div class="pt box">
                                                    
                                <form class="search-btn" action="">
                                    <input type="text" class="search" placeholder="Search..." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                
                                <section class="target_box">
                                <div id="div1" class="target">Page 1</div>
                                <div id="div2" class="target">Page 2</div>
                                <div id="div3" class="target">Page 3</div>
                                <div id="div4" class="target">Page 4</div>
                              </section>
              
                                
                                <!--Injury card-->
                                <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="des1"><p>Name: </p><p>Sport: </p></div>
                                  <div class="des2"><p>A.B.C.Perera</p><p>Swimming</p></div>
                                  <div class="des3"></div>
                                  <div class="des1"><p>Injury: </p><p>Condition: </p></div>
                                  <div class="des2"><p>Arm strain</p><p>Mild</p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="<?php echo BASEURL;?>/doctor/athlete">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <!--Injury card-->
                                <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="des1"><p>Name: </p><p>Sport: </p></div>
                                  <div class="des2"><p>A.B.C.Perera</p><p>Swimming</p></div>
                                  <div class="des3"></div>
                                  <div class="des1"><p>Injury: </p><p>Condition: </p></div>
                                  <div class="des2"><p>Arm strain</p><p>Mild</p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="<?php echo BASEURL;?>/doctor/athlete">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                 <!--Injury card-->
                                 <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="des1"><p>Name: </p><p>Sport: </p></div>
                                  <div class="des2"><p>A.B.C.Perera</p><p>Swimming</p></div>
                                  <div class="des3"></div>
                                  <div class="des1"><p>Injury: </p><p>Condition: </p></div>
                                  <div class="des2"><p>Arm strain</p><p>Mild</p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="<?php echo BASEURL;?>/doctor/athlete">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <!--Injury card-->
                                <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="des1"><p>Name: </p><p>Sport: </p></div>
                                  <div class="des2"><p>A.B.C.Perera</p><p>Swimming</p></div>
                                  <div class="des3"></div>
                                  <div class="des1"><p>Injury: </p><p>Condition: </p></div>
                                  <div class="des2"><p>Arm strain</p><p>Mild</p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="<?php echo BASEURL;?>/doctor/athlete">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <!--Injury card-->
                                <div class="injury">
                                  <i class="fas fa-user user"></i>
                                  <div class="des1"><p>Name: </p><p>Sport: </p></div>
                                  <div class="des2"><p>A.B.C.Perera</p><p>Swimming</p></div>
                                  <div class="des3"></div>
                                  <div class="des1"><p>Injury: </p><p>Condition: </p></div>
                                  <div class="des2"><p>Arm strain</p><p>Mild</p></div>
                                  <div class="btn">
                                    <ul style="list-style: none;">
                                    <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                                    <li class="l2"><a href="athleteprofile.html">View</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="pages">
                    <button class="num" target="1">1</button>
                    <button class="num" target="2">2</button>
                    <button class="num" target="3">3</button>
                    <button class="num" target="4">>></button>
                </div>
                             
              
                                </div>
              <script>
                                var buttons = $('button');
              buttons.click(function() {
                buttons.css('background-color', 'snow');
                $(this).css('background-color', 'rgb(8, 190, 255)');
              });
              
              
                      jQuery('.num').click(function(){
                          jQuery('.target').hide();
                          jQuery('#div'+$(this).attr('target')).show();
                      });
                      
                      
              </script>
                               
              </body>
            </main>

        </div>
    </body>
</html>