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
                          <form action="#" class="login">              
                             <!--name-->
                             <div class="field">
                                <input type="text" placeholder="Full Name" required>
                             </div>
                             <!--email-->
                             <div class="field">
                                <input type="text" placeholder="Email Address" required>
                             </div>
                              <!--nic-->
                             
                                <div class="field">
                                   <input type="text" placeholder="NIC" required>
                                </div>
                             <!--gender-->
                             <div class="field">
                                <select name="gender" id="gender" required>
                                   <option value="" disabled selected hidden>Gender</option>
                                   <option value="male">Male</option>
                                   <option value="female">Female</option>
                                </select>
                             </div>
                             
                             
                            <!--hospital-->
                                <div class="field">
                                   <input type="text" placeholder="Hospital" required>
                                </div>
                             <!--id-->
                                <div class="field">
                                   <input type="text" placeholder="Doctor ID" required>
                                </div>
                                                          
                             <!--province-->
                             
                             <div class="field">
                                <select name="province" id="province" required>
                                   <option value="" disabled selected hidden>Province</option>
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
                                <input type="text" placeholder="District" required>
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
                         
                 </body>
              </html>
            </main>

        </div>
    </body>
</html>