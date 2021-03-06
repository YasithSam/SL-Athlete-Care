<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php linkCSS("assets/css/qmain.css") ?>
        <?php linkCSS("assets/css/casestudy.css") ?>
      
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <div class="sidebar">
            <div class="sidebar-header">
                <h3 class="brand">
                    <span><img src="../../../web/public/assets/img/logo-4040.png" alt=""></span>
                    <span>SL Athlete Care</span>
                </h3>
                <label for="sidebar-toggle" class="ti-menu-alt"></label>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li id="db">
                        <a href="<?php echo BASEURL;?>/doctor/dashboard">
                            <span class="ti-dashboard"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/doctor/patients">
                            <span class="ti-id-badge"></span>
                            <span>Patients</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/doctor/casestudy">
                            <span class="ti-files"></span>
                            <span>Case Studies</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/doctor/messages">
                            <span class="ti-comments"></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/forumController/">
                            <span class="ti-agenda"></span>
                            <span>Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/doctor/articles">
                            <span class="ti-agenda"></span>
                            <span>Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/doctor/profile">
                            <span class="ti-user"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        
                        <a href="<?php echo BASEURL;?>/commonController/settings">
                            <span class="ti-settings"></span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL;?>/accountController/logout">
                            <span class="ti-power-off"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       <!--  ?php include "sidebar.php";?> -->

        <div class="main-content">

        <header>
        <div class="social-icons">
            <span class="ti-bell"></span>
            <div class="user-wrapper">
                <img src="../../../web/public/assets/img/doctor.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Doctor</h4>
                    <small>Doctor</small>
                </div>
            </div>                
        </div>
</header>


           
<!--Body section-->
            <main>
                     <div class="container">
                        <div class="title">Add New Case Study</div>
                    
                      <div class="form-inner">
                          <form action="<?php echo BASEURL;?>/doctor/addcasestudy" class="login" method="POST">              
                             <div class="field">
                                <input type="text" name="title" placeholder="Case Study Title" required>
                             </div>
                              <!--Description-->
                                <div class="field">
                                   <input type="text" name="description" placeholder="Case Study Description" required>
                                </div>
                             <!--Athlete-->
                             <div class="field" >
                                <select name="athlete" id="athlete"  required>
                                   <option value="" disabled selected hidden>Athlete</option>
                                   <?php foreach($data[1] as $item): ?>
                                    <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                 <?php endforeach;?>
                                   </select>
                             </div>
                             <!--Injury-->
                             <div class="field">
                              <select name="injury" id='injury' required>
                                 <option value="" disabled selected hidden>Injury</option>
                                 <?php foreach($data[0] as $item): ?>
                                    <option value="<?php print_r($item->id);?>"><?php print_r($item->injury);?></option>
                                 <?php endforeach;?>
                              </select>
                           </div>
                            <!--submit-->
                             <div class="btn">
                                <input type="submit" value="Submit">
                             </div>
                             <!--<div class="signup-link">
                                Already a member? <a href="">Login</a>
                             </div>-->
                          </form>
                      </div>
                  </div>
            </main>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
        

         <script type="text/javascript">
         $("#athlete").chosen();
         </script>
    </body>
  
 

   </html>
  
      
 