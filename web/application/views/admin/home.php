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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
    </head>

    <body>
      
        <?php include "sidebar.php"?>

<div class="main-content">
   
        <header>
                <div class="register-wrapper">
                    <a href="<?php echo BASEURL;?>/admin/register"><button>Register User <span class="ti-plus"></span></button></a>
                </div>
                
                <div class="social-icons">
                    <!-- <span class="ti-bell"></span> -->
                    <div class="profile">
                      <!-- <i class="fas fa-bell"></i> -->

                      <div class="navbar_right">
                        <div class="notifications">
                          <div class="icon_wrap">
                            <i class="far fa-bell"></i>
                            <span>4</span>
                          </div>
                          
                          <div class="notification_dd">
                              <ul class="notification_ul">
                                  <li class="starbucks success">
                                      <div class="notify_icon">
                                          <span class="icon"></span>  
                                      </div>
                                      <div class="notify_data">
                                          <div class="title">
                                              Lorem, ipsum dolor.  
                                          </div>
                                          <div class="sub_title">
                                            Lorem ipsum dolor sit amet consectetur.
                                          </div>
                                      </div>
                                      <div class="notify_status">
                                          <p>Success</p>  
                                      </div>
                                  </li>  

                                  <li class="show_all">
                                      <p class="link">Show All Activities</p>
                                  </li> 
                              </ul>
                          </div>
                          
                        </div>
                      </div>

                    </div>
                      <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                    
                    <div class="user-wrapper">
                        <!-- <img src="../../web/public/assets/img/doctor.jpg" width="40px" height="40px" alt=""> -->
                        <div>
                            <h4><?php echo($data[1]->username)?></h4>
                            <small><?php echo($data[1]->role)?></small>
                        </div>
                    </div>                
                 </div>
        </header>
   
    <!--Body section-->
    <main>

    <div class="popup">
    <div class="shadow"></div>
    <div class="inner_popup">
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="title">
                    <p>All Notifications</p>
                    <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
                </li> 
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
            </ul>
        </div>
    </div>
  </div>

          <div class="home-content">
          <?php $this->flash('docreg', 'alert alert-success') ?>
          <?php $this->flash('parareg', 'alert alert-success') ?>
            <!--Overview boxes-->
            <div class="overview-boxes">
              <div class="box">
                <i class="fas fa-user-md icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Athletes</div>
                  <div class="number"><?php echo($data[0]['patients'])?></div>
                </div>
              </div>
              <div class="box">
                <i class="fas fa-procedures icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Case Studies</div>
                  <div class="number"><?php echo($data[0]['casestudies'])?></div>
                </div>
              </div>
              <div class="box">
                <i class="fas fa-users icon"></i>
                <div class="right-side">
                  <div class="box-topic">Total Posts</div>
                  <div class="number"><?php echo($data[0]['post'])?></div>
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
               <?php linkJS("assets/js/notifications.js") ?>
    </body>
</html>