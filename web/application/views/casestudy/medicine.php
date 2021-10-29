<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php linkCSS("assets/css/cs/view-more-horizonta.css") ?>
    <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script></head>
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
    <!--header ends-->

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates 
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='';">
            Post
        </button>
    </div>

<!--Medicine-->
<!--Medicine-->
<div class="container-2">
    <div class="title">
    <h3>Medicine</h3>
    </div>
    <?php if(!empty($data[0])): ?>
        
        <?php foreach($data[0] as $item): ?>
                <div class="card-2">
                    <div class="imgbox">
                        <img src="./images/medicine.png" alt="">
                    </div>
                    <div class="textbox1">
                    <div id="textbox">
                        <h2 class="alignleft"><b><?php echo ucwords($item->heading)?></b></h2>
                        <?php $d=explode(" ",$item->datetime)?>
                        <h3 class="alignright">Time: <?php echo ucwords($d[1])?></h3>
                        <h3 class="alignright">Date: <?php echo ucwords($d[0])?></h3>
                    </div>
                    <div style="clear: both;">
                        <h3><?php echo ucwords($item->description)?></h3>
                    </div>
                </div>
                </div>
  
    
            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
               
            </div>
        <?php endforeach;?>
     <?php else: ?>
            <h1>No data </h1>
    <?php endif; ?> 

   
</div>

<!--end-->

 <!-- The Modal -->
 <div id="myModal" class="modal">

    <div class="mcontainer">
        <div class="top">
            <h3>Delete Medicine</h3>
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
    var btns = document.getElementsByClassName("editbtn");

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