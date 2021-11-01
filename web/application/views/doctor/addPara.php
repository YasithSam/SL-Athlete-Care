<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/qs.css") ?>
        <?php linkCSS("assets/css/qmain.css") ?>
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
                        <div class="title">Add Paramedical User</div>
                    
                      <div class="form-inner">
                          <form action="<?php echo BASEURL;?>/doctor/addpara" class="login" method="POST">              
                             <div class="field">
                                <input type="text" name="cid" value="#C00<?php echo($data[2])?>" placeholder="Case study Id" required readonly>
                              
                
                             </div>
                            
                              <div class="row">
                               <div class="field">
                                <select name="phy" id="month">
                                   <option value="" disabled selected hidden>Physiotherapist</option>
                                   <?php foreach($data[1] as $item): ?>
                                    <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                   <?php endforeach;?>
                                </select>
                               </div>
                              </div>
                              <div class="row">
                                  <div class="field">
                                   <select name="nut" id="month">
                                      <option value="" disabled selected hidden>Nutritionist</option>
                                      <?php foreach($data[0] as $item): ?>
                                         <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                     <?php endforeach;?>
                                   </select>
                                  </div>
                                 
                              </div>
                            
                             <!--submit-->
                             <div class="btn">
                                <input type="submit" value="Submit">
                             </div>
                          </form>
                      </div>
                  </div>
            </main>

        </div>
    </body>
</html>