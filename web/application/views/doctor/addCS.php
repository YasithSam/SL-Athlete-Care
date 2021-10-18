<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
       
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
                          <form action="#" class="login">              
                             <!--Doc ID-->
                             <div class="field">
                                <input type="text" placeholder="Doctor ID" required>
                             </div>
                             <!--Title-->
                             <div class="field">
                                <input type="text" placeholder="Case Study Title" required>
                             </div>
                              <!--Description-->
                                <div class="field">
                                   <input type="text" placeholder="Case Study Description" required>
                                </div>
                             <!--Athlete-->
                             <div class="field">
                                <select name="athlete" id="athlete" required>
                                   <option value="" disabled selected hidden>Athlete</option>
                                   <option value="athlete1">Athlete_1</option>
                                   <option value="athlete2">Athlete_2</option>
                                   <option value="athlete3">Athlete_3</option>
                                   <option value="athlete4">Athlete_4</option>
                                </select>
                             </div>
                             <!--Injury-->
                             <div class="field">
                              <select name="injury" id="injury" required>
                                 <option value="" disabled selected hidden>Injury</option>
                                 <option value="injury1">Injury_1</option>
                                 <option value="injury2">Injury_2</option>
                                 <option value="injury3">Injury_3</option>
                                 <option value="injury4">Injury_4</option>
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
    </body>
</html>