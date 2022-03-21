<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/qmain.css") ?>
        <?php linkCSS("assets/css/editprofile.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">
        <?php include "header.php";?>

            
<!--Body section-->
            <main>
                     <div class="container">
                        <div class="title">Edit Profile</div>
                    
                      <div class="form-inner">
                      <form action="<?php echo BASEURL;?>/paramedical/updateprofile" class="login" method="POST">              

                             <!--name-->
                             <div class="field">
                                <input type="text" placeholder="<?php echo $data->full_name?>" name="fullname" required readonly>
                             </div>
                             <!--email-->
                             <div class="field">
                                <input type="text" value="<?php echo $data->email?>" name="email" required>
                             </div>
                             <!--gender-->
                             <div class="field">
                                <select name="gender" id="gender" required disabled>
                                   <option disabled selected hidden><?php echo $data->sex?></option>
                                   <option disabled value="male">Male</option>
                                   <option disabled value="female">Female</option>
                                </select>
                             </div>
                            <!--hospital-->
                                <div class="field">
                                   <input type="text" value="<?php echo $data->hospital?>" name="hospital" required>
                                </div>
                             <!--id-->
                                <div class="field">
                                   <input type="text" placeholder="<?php echo $data->paramedical_number?>" name="paranumber" required readonly>
                                </div>                     
                             <!--province-->
                             <div class="field">
                                <select name="province" id="province" required>
                                   <option value="<?php echo $data->province?>" disabled selected hidden><?php echo $data->province?></option>
                                   <option value="western">Western</option>
                                   <option value="southern">Southern</option>
                                   <option value="eastern">Eastern</option>
                                   <option value="northern">Northern</option>
                                   <option value="north-western">North-Western</option>
                                   <option value="uva">Uva</option>
                                   <option value="central">Central</option>
                                   <option value="north-central">North-Central</option>
                                   <option value="sabaragamuwa">Sabaragamuwa</option>
                                </select>
                             </div>
                             <!--district-->
                             <div class="field">
                                <input type="text" value="<?php echo $data->district?>" name="district" required>
                             </div>
                             <div class="cover">
                                 <p class="coverimg" ><label for="file" style="cursor: pointer; ">Profile picture:</label></p>
                                 <p><input type="file"  accept="image/*" name="image" id="image"  onchange="loadFile(event)"></p>
                              </div>
                              <p style="text-align: center;"><img id="output" width="500"></p>

                              <script>
                              var loadFile = function(event) {
                                 var image = document.getElementById('output');
                                 image.src = URL.createObjectURL(event.target.files[0]);
                              };
                              </script>

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
                         
                 </body>
              </html>
            </main>

        </div>
    </body>
</html>