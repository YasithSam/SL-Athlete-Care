<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view-more-horizontal.css">
    <?php linkCSS("assets/css/cs/view-more-vertical.css") ?>
    <?php linkCSS("assets/css/cs/main.css") ?>
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
      
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates 
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='';">
            Post
        </button>
    </div>



<!--cards-->
<div class="container">
    <div class="title">
    <h3>Images</h3>
    </div>
    <div class="card-deck">
    <?php if(!empty($data[0])): ?>
        
        <?php foreach($data[0] as $item): ?>
        <div class="card">
            <img class="card-img-top" src="../../../web/public/assets/dbimages/<?php echo($item->link)?>" alt="icon"> 
            <center><a href="../../../web/public/assets/dbimages/<?php echo($item->link)?>" title="click here to see the full sized image" target="_blank">View Full Screen</a></center>
            <div class="card-body">
                <h5 class="card-title"><?php echo ucwords($item->heading)?></h5>
                <p class="card-text"><?php echo ucwords($item->description)?></p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
        <?php endforeach;?>
     <?php else: ?>
            <h1>No data </h1>
    <?php endif; ?> 
    </div>
    
     <!-- The Modal -->
     <div id="myModal" class="modal">

        <div class="mcontainer">
            <div class="top">
                <h3>Delete Images</h3>
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
</div>

</body>
</html>