<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/profile.css") ?>
        <?php linkCSS("assets/css/profilemain.css") ?>
        <?php linkCSS("assets/css/alert.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php" ?>

        <div class="main-content">

            <?php include "header.php"?>
<!--Body section-->
            <main>
            <div style="margin-left: 40px; margin-top: 70px;">
              <?php $this->flash('updtpro', 'alert alert-success') ?>
            </div> 
              <div class="home">
              <!--Profile box-->
                      <div class="profile box">
                        <div class="title" style="justify-content: center;">Personal Profile</div>
                        <div class="img">
                         <!--  <i class="fas fa-user prof"></i> -->
                          <img class="prof" src="../../web/public/assets/dbimages/<?php echo($data->profile_image_url);?>">
                          <!--<div class="edit">
                            <i class="fas fa-camera cam"></i>
                          </div>-->
                        </div>
                        <div class="updt"><i class="fas fa-user user"></i><?php echo ($data->full_name)?></div>
                        <div class="updt"><i class="fas fa-user user"></i><?php echo ucwords ($data->role) ?></div>
                        <div class="updt"><i class="fas fa-map-marker-alt user"></i><?php echo ($data->district)?></div>
                        <div class="updt"><i class="fas fa-at user"></i><?php echo ($data->email)?></div>
                        <div class="updt"><i class="fas fa-clinic-medical user"></i><?php echo ($data->hospital)?></div>
                        <div class="button" style="justify-content: center;"><a href="<?php echo BASEURL;?>/paramedical/editprofile">Edit Profile</a></div>
                      </div>
              <!--End of Profile box-->
              
                    <div class="right">
                  
                      <!--Case studies box-->
                      <div class="about box">
                        <div class="title">My Case Studies</div>
                        <!--card-->
                        <div class="card">
                          <i class="fas fa-book-medical user"></i>
                          <div class="qual">Case Study : #C001<br>
                          <p class="txt">Short description: Arm injury of severe condition Sport: Badminton<?php echo($item->title);?></p></div>
                        </div>
                        <div class="card">
                          <i class="fas fa-book-medical user"></i>
                          <div class="qual">Case Study : #C005<br><p class="txt">Leg sprain of mild condition<?php echo($item->title);?></p></div>
                        </div>
                        <div class="card">
                          <i class="fas fa-book-medical user"></i>
                          <div class="qual">Case Study : #C011<br><p class="txt">Head injury<?php echo($item->title);?></p></div>
                        </div>

                      </div> 
                      <!--End of Case studies box box-->
              
                      <!--Articles box-->
                      <div class="about box">
                        <div class="title">My Articles</div>
                        <!--card-->
                        <div class="card">
                          <i class="fas fa-notes-medical user"></i>
                          <div class="qual">
                            Tibial Stress Syndrome<br>
                            <p class="txt">Are leg muscle, tendon and functional characteristics associated with medial tibial stress syndrome. </p>
                          </div>
                        </div>
                        <!--card-->
                        <div class="card">
                          <i class="fas fa-notes-medical user"></i>
                          <div class="qual">
                            Repetitive Stress Injuries<br>
                            <p class="txt">Are leg muscle, tendon and functional characteristics associated with medial tibial stress syndrome? </p>
                          </div>
                        </div>
                        <!--card-->
                        <div class="card">
                          <i class="fas fa-notes-medical user"></i>
                          <div class="qual">
                            Common causes for injuries<br>
                            <p class="txt">Are leg muscle, tendon and functional characteristics associated with medial tibial stress syndrome? </p>
                          </div>
                        </div>

                      </div>
                      <!--End of Articles box-->  
                         
                   </div>
              
               <!-- The Modal -->
               <div id="myModal" class="modal">
              
                <div class="mcontainer">
                    <div class="top">
                        <h3>Delete Qualification</h3>
                    </div>
                    <div class="texticon">
                        <i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true" ></i>
                        <h3>Are you sure?</h3>
                    </div>
                
                    <div class="mbtn">
                        <button class="mbuttonno">No</button>
                
                        <button class="mbutton">Yes</button>
                    </div>
                </div>
               </div>
            
              
              <script>
               // Get the modal
                var modal = document.getElementById('myModal');
              
                // Get the button that opens the modal
                var btns = document.getElementsByClassName("editicon");
              
                // Get the element that closes the modal
                var span = document.getElementsByClassName("mbuttonno","mbutton")[0];
              
                // When the user clicks the button, open the modal 
                for (var i = 0; i < btns.length; i++) {
                btns[i].onclick = function() {
                    modal.style.display = "block";
                }
                }
              
                // When the user clicks on N0, close the modal
                span.onclick = function() {
                 modal.style.display = "none";
                }
              
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }
                </script>
              
              
              </body>
              </html>
              
              
            </main>

        </div>
    </body>
</html>