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
 
      <div class="user-wrapper">
          
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
                          <div class="updt"><i class="fas fa-user user"></i><?php echo $data[0]->full_name?></div>
                          <div class="updt"><i class="fas fa-user user"></i><?php echo $data[0]->sex?></div>
                          <div class="updt"><i class="fas fa-map-marker-alt user"></i><?php echo $data[0]->city?></div>
                          <div class="updt"><i class="fas fa-phone user"></i><?php echo $data[0]->phone?></div>
                          <div class="updt"><i class="fas fa-at user"></i><?php echo $data[0]->email?></div>
                          <div class="updt"><i class="fas fa-info-circle user"></i><?php echo $data[0]->responsible_person_email?></div>
                        </div>
              <!--End of Profile box-->
              
                      <div class="right">
              <!--sports details box-->
                      <div class="about box">
                        <div class="title">
                          Sports Details
                        </div>
                        <?php if(!empty($data[1])): ?>
                        <?php foreach($data[1] as $item): ?>
                        <div class="card">
                          <i class="fas fa-running user"></i>
                          <div class="qual"><?php echo $item->name?><br><p class="txt">Institute: <?php echo $item->institution?>  &nbsp; &nbsp; &nbsp; &nbsp; Level: <?php echo $item->level?>  </p></div>
                          </div>
                        <?php endforeach;?>
                        <?php else: ?>
                            <h1>No data </h1>
                        <?php endif; ?> 
                      </div>
              <!--End of box-->
              
              <!--Health details box box-->
              <div class="about box">
                        <div class="title">
                          Health Details
                        </div>
                        <div class="health">
                          <!--card-->
                        <div class="card" style="margin-right: 30px; width: 22%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Height<br><p class="txt"><?php echo $data[0]->height?> m</p></div>
                        </div>
                        <!--card-->
                        <div class="card" style="margin-right: 30px;width: 22%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Weight<br><p class="txt"><?php echo $data[0]->weight?> kg </p></div>
                        </div>
                        <!--card-->
                        <div class="card" style="margin-right: 30px; width: 22%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">BMI<br><p class="txt"><?php echo $data[0]->bmi?> </p></div>
                        </div>
                        <!--card-->
                        <div class="card" style="width: 22%;">
                          <i class="fas fa-heartbeat user"></i>
                          <div class="qual">Body Fat<br><p class="txt"><?php echo $data[0]->body_fat?></p></div>
                        </div>
                        </div>
                      </div>
              <!--End of health box box-->
              
              <!--Articles box-->
                      <!-- <div class="about box">
                        <div class="title">
                          Other details
                        </div>
                        
                        <div class="card">
                          <i class="fas fa-info-circle user"></i>
                          <div class="qual">Responsible person<br><p class="txt">Email: <?php echo $data->responsible_person_email?> </p></div>
                        </div>
                      </div> -->
              <!--End of Articles box-->
              
              <!--case studies box-->
              <div class="about box">
                        <div class="title">
                          Case Studies
                        </div>
                          <!--card-->
                        <?php if(!empty($data[2])): ?>
                        <?php foreach($data[2] as $item): ?>
                        <div class="card">
                          <i class="fas fa-user user"></i>
                          <div class="qual"><?php echo $item->title?><br><p class="txt">Doctor: <?php echo $item->full_name?> </p></div>
                          <div class="button">
                            <div class="date">21/10/2021</div>
                            <a href="<?php echo BASEURL;?>/caseStudyController/index/<?php echo $item->case_id;?>">View</a>
                          </div>
                        </div>
                        <?php endforeach;?>
                        <?php else: ?>
                            <h1>No data </h1>
                        <?php endif; ?>
                      </div>
              <!--End of cs box-->
                    </div>      
              </div>
              
                   
            </main>
        </div>
    </body>
</html>