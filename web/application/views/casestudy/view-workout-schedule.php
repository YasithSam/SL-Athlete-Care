<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php linkCSS("assets/css/cs/view-workout-schedule.css") ?>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
</head>
<body>
<div class="header_section">
        <div class="header">
            <a href="#">SL ATHLETE CARE</a>
        </div>
        <div class="profile">
            <i class="fas fa-bell"></i>
            <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</button>
        </div>
    </div>
<br><br>
<div class="container">
        <div class="card">
            <div class="left">
            <img class="card-img-top" src="../images/yoga.png" alt="icon">
            </div>
            
            <div class="right">
            <div class="card-body">
                <h5 class="card-title">Workout Schedule - 1</h5>
                <p class="card-text">Total body strength and core training</p>
            </div>
            </div> 
        
          <div class="items">
          <?php if(!empty($data)): ?>
        
             <?php foreach($data as $item): ?>  
                <div class="card-2">
                    <div id="textbox">
                        <h2 class="alignleft"><b><?php echo($item->title)?></b></h2>
                        <?php if($item->reps==0):?>
                            <h3 class="alignright">Time period: <?php echo($item->time)?>s</h3>
                        <?elseif($item->time==0):?>
                            <h3 class="alignright">Repetitions: <?php echo($item->reps)?></h3>

                        <?elseif($item->time==0 && $item->reps==0):?>

                        <?else:?>
                            <h3 class="alignright">Time period: <?php echo($item->time)?>s</h3>
                            <h3 class="alignright">Repetitions: <?php echo($item->reps)?></h3>
                        <?endif?>

                      
                    </div>
                    <div style="clear: both;">
                        <h3><?php echo($item->description)?></h3>
                    </div>
                </div>

            <?php endforeach;?>
     
         <?php endif; ?> 

    </div>
    
    <div class="endbtn">
        <button class="deletebtn"><i class="fa fa-trash"></i>Delete</button>
    
    </div>

 </div>
</div>


 <!-- The Modal -->
 <div id="myModal" class="modal">

    <div class="mcontainer">
        <div class="top">
            <h3>Delete Schedule</h3>
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
     var btns = document.getElementsByClassName("deletebtn");
 
     // Get the element that closes the modal
     var span = document.getElementsByClassName("mbuttonno")[0];
 
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