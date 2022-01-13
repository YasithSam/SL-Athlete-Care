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
        
            <div class="alrt">
            <?php $this->flash('addcs', 'alert alert-success') ?>
            <?php $this->flash('assign', 'alert alert-success') ?>
            <?php $this->flash('updtpro', 'alert alert-success') ?>
            </div>
                  
              <div class="home">
              <!--Profile box-->
                      <div class="profile box">
                      <br>
                        <div class="title" style="justify-content: center;">Personal Profile</div>
                        <div class="img">
                          <img src="../../web/public/assets/dbimages/<?php echo $data[0]->profile_image_url?>" alt="user" class="user"  style="width: 100px; height:100px">
                        </div>

                
                          <!--<div class="edit">
                            <i class="fas fa-camera cam"></i>
                          </div>-->
                      
                        <div class="updt"><i class="fas fa-user user"></i>Dr.<?php echo $data[0]->full_name?></div>
                        <div class="updt"><i class="fas fa-user user"></i><?php echo ucwords ($data[0]->sex) ?></div>
                        <div class="updt"><i class="fas fa-map-marker-alt user"></i><?php echo ucwords($data[0]->district)?>,<?php echo ucwords($data[0]->province)?></div>
                        <div class="updt"><i class="fas fa-at user"></i><?php echo($data[0]->email)?></div>
                        <div class="updt"><i class="fas fa-clinic-medical user"></i><?php echo ucwords($data[0]->hospital)?></div>
                        <div class="button" style="justify-content: center;"><a href="<?php echo BASEURL;?>/doctor/editprofile">Edit Profile</a></div>
                      </div>
                      

              <!--End of Profile box-->
              
                      <div class="right">
              
              <!--Case studies box box-->
                   
                      <div class="about box">
                        <div class="title">My Case Studies
                          <div class="edit">
                            <a href="<?php echo BASEURL;?>/doctor/casestudyform/<?php echo $data[0]->uuid;?>"> <i class="fas fa-plus addicon"></i></a> 
                          </div>
                        </div>

                        <?php if(!empty($data[1])): ?>
                        <?php foreach($data[1] as $item): ?>

                                  <!--card-->
                                <div class="card">
                                  <i class="fas fa-book-medical user"></i>
                                  <div class="qual">Case Study : #C00<?php echo($item->case_id);?> <br><p class="txt"><?php echo($item->title);?> - <?php echo($item->full_name);?>  </p> </div>
                                  <div class="button" > <a href="<?php echo BASEURL;?>/doctor/addparaform/<?php echo($item->case_id);?>" style="font-size:13px">Assign</a></div>
                                </div>
                                <?php endforeach;?>
                         <?php else: ?>
                              <h1>No data </h1>
                        <?php endif; ?> 
                         </div>
              <!--End of Case studies box box-->
              
               <!--Articles box-->
               <div class="about box">
                        <div class="title">
                          My Articles
                        </div>
                        <!--card-->
                        <?php if(!empty($data[2])): ?>
                        <?php foreach($data[2] as $item): ?>

                        <div class="card-2">
                          <i class="fas fa-notes-medical user"></i>
                          <div class="qual">
                          <?php echo($item->heading);?><br>
                          <p class="txt"><?php echo($item->description);?></p>
                          </div>
                        </div>
                        <?php endforeach;?>
                         <?php else: ?>
                              <h1>No data </h1>
                        <?php endif; ?> 
                         </div>
                       

                        <div class="link">
                        <a style="float:right; margin-right: 25px;" href="<?php echo BASEURL;?>/doctor/articles">
                         View More </a>
                         </div>
                      </div>
              <!--End of Articles box-->
              
                    </div>      
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