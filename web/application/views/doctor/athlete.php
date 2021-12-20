<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/athete.css") ?>
        <?php linkCSS("assets/css/athletemain.css") ?>
    </head>

<body>
<header>
  

  <div class="social-icons">
      <span class="ti-bell"></span>
      <div class="user-wrapper">
           <img src="../../web/public/assets/img/doctor.jpg" width="40px" height="40px" alt="">    
           <div>
               <h4>Doctor</h4>
               <div class="button" style="justify-content: center;"><a href="<?php echo BASEURL;?>/doctor/">Back to Home</a></div>
          </div>   
        
                 
      </div>                                  
  </div>   

            
</header>
        <div class="main-content">
         
            <main>  
              <div class="home">
              <!--Profile box-->
                      <div class="profile box">
                        <div class="title" style="justify-content: center;">Athlete Profile</div>
                        <div class="img">
                        <img class="prof" src="../../../web/public/assets/img/user.jpg">
                          <!-- <i class="fas fa-user prof"></i> -->
                          <!--<div class="edit">
                            <i class="fas fa-camera cam"></i>
                          </div>-->
                        </div>
                        <div class="updt"><i class="fas fa-user user"></i><?php echo $data->full_name?></div>
                        <div class="updt"><i class="fas fa-user user"></i><?php echo $data->sex?></div>
                        <div class="updt"><i class="fas fa-map-marker-alt user"></i><?php echo $data->city?></div>
                        <div class="updt"><i class="fas fa-phone user"></i><?php echo $data->phone?></div>
                        <div class="updt"><i class="fas fa-at user"></i><?php echo $data->email?></div>
                        <!-- <div class="updt"><i class="fas fa-user-injured user"></i></div> -->
                      </div>
              <!--End of Profile box-->
              
                      <div class="right">
              <!--sports details box-->
                      <div class="about box">
                        <div class="title">
                          Sports Details
                        </div>
                        <!--card-->
                      
                        <div class="card">
                          <i class="fas fa-running user"></i>
                          <div class="qual"><br><p class="txt">Institute:  &nbsp; &nbsp; &nbsp; &nbsp; Level:  </p></div>
                        </div>
                        
                        <!--card-->
                        <!-- <div class="card">
                          <i class="fas fa-running user"></i>
                          <div class="qual">Water Pollo<br><p class="txt">Institute: National Youth Center &nbsp; &nbsp; &nbsp; &nbsp; Level: Beginner </p></div>
                        </div> --> 
                      </div>
              <!--End of box-->
              
              <!--Case studies box box-->
                      <div class="about box">
                        <div class="title">
                          Health Details
                        </div>
                        <div class="health">
                          <!--card-->
                        <div class="card" style="margin-right: 20px; width: 50%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Height<br><p class="txt"><?php echo $data->height?> m</p></div>
                        </div>
                        <!--card-->
                        <div class="card" style="width: 50%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Weight<br><p class="txt"><?php echo $data->weight?> kg </p></div>
                        </div>
                      </div>
                      <div class="health">
                          <!--card-->
                        <div class="card" style="margin-right: 20px; width: 50%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">BMI<br><p class="txt"><?php echo $data->bmi?> </p></div>
                        </div>
                        <!--card-->
                        <div class="card" style="width: 50%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Body Fat<br><p class="txt"><?php echo $data->body_fat?></p></div>
                        </div>
                      </div>
                  </div>
              <!--End of Case studies box box-->
              
              <!--Articles box-->
                      <div class="about box">
                        <div class="title">
                          Other details
                        </div>
                          <!--card-->
                        <div class="card">
                          <i class="fas fa-info-circle user"></i>
                          <div class="qual">Responsible person<br><p class="txt">Email: <?php echo $data->responsible_person_email?> </p></div>
                        </div>
                      </div>
                      
              <!--End of Articles box-->
              
                    </div>      
              </div>
              
                   
            </main>
        </div>
    </body>
</html>