<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        
        <?php linkCSS("assets/css/reviewssection.css") ?>

        <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>


    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>

        <div class="description">
        Reviews Section
       </div>
    
        <div class="wrapper">
           <table class="content-table">
            <thead>
              <tr>
                <th class="type">Type</th>
                <th class="title">Title</th>
                <th class="desc">Description</th>
                <th class="name">Author Name</th>
                <th class="btnrow">Approve Review</th>
                <th class="btnrow">Reject Review</th>
              </tr>
            </thead>
            <tbody>
            <?php if(!empty($data[0])): ?>
            <?php foreach($data[0] as $item): ?>
              <tr>
                <td><?php echo ucwords($item->type); ?></td>
                <td><?php echo ucwords($item->heading); ?></td>
                <td class="longtext"><?php echo ucwords($item->description); ?></td>
                <td><?php echo ucwords($item->full_name); ?></td>
                <!-- <td><input type="button" class="button1" value="Approve"> </td> -->
                <td><a href="<?php echo BASEURL;?>/doctor/reviewapprove?id=<?php echo($item->id);?>" onclick='return confirm("Approve this review?");'><input type="button" class="button1" value="Approve"></a></td>

<!--                 <td><input type="button" class="button" value="Reject"> </td>
 -->                <td><button class="button">Reject</button></td>

                <!--Reviews Modal-->
                    <div id="FeedbackModal" class="fmodal">       
                      <div class="mcontainer">
                        <div class="header2">
                          <h2 class="myheader">Reject the review?</h2>
                        </div>
                      
                      <div class="form-cont">
                        <form action="<?php echo BASEURL;?>/doctor/reviewreject" method="POST">
                      
                        <div class="row">
                          <div class="col-25">
                            <label for="subject">Reason :</label>
                          </div>
                          <div class="col-75">
                            <textarea id="feedback" required name="feedback" placeholder="Please give reasons for rejection" style="height:120px"></textarea>
                            <input type="hidden" id="postid" name="postid" value="<?php echo($item->id);?>"/>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <button class="fback">Cancel</button>  
                          <input type="submit" value="Submit">
                        </div>
                        </form>
                        </div>
                        </div>
                    </div>


              </tr>
            <?php endforeach;?>
            <?php else: ?>
              <h1>No data </h1>
            <?php endif; ?>
            </tbody>
          </table>
          <br>
          <div class="pagination">
          <?php 
    $x=$data[1];
    $c=ceil($x / 10);
    for ($i=1; $i<=$c; $i++) {?>
      <?php if($i==$data[2]){?>
       <a href="<?php echo BASEURL;?>/doctor/articles?id=<?php echo($i)?>" class="active"><?php echo($i)?></a>
     <?php }else{?>
       <a href="<?php echo BASEURL;?>/doctor/articles?id=<?php echo($i)?>"><?php echo($i)?></a>
      <?php
      } ?>
    <?php
    }?>

  </div>
          
        </div> 

        <script>
   // Get the modal
    var fmodal = document.getElementById('FeedbackModal');

    // Get the button that opens the modal
    var btns = document.getElementsByClassName("button");

    // Get the element that closes the modal
    var span = document.getElementsByClassName("fback")[0];

    // When the user clicks the button, open the modal 
    for (var i = 0; i < btns.length; i++) {
    btns[i].onclick = function() {
        fmodal.style.display = "block";
    }
    }

    // When the user clicks on N0, close the modal
    span.onclick = function() {
     fmodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == fmodal) {
        fmodal.style.display = "none";
    }
    }
    </script>

    </body>
    </html>