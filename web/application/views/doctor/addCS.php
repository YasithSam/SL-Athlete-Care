<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php linkCSS("assets/css/casestudy.css") ?>
        <?php linkCSS("assets/css/qmain.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">
         <?php include "header.php";?>

           
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
                             <div class="field">
                                <select name="athlete" id="athlete" required>
                                   <option value="" disabled selected hidden>Athlete</option>
                                   <?php foreach($data[1] as $item): ?>
                                    <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                 <?php endforeach;?>
                                 </select>
         
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
  
      
 