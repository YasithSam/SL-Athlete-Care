<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/pre.css") ?>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
</head>
<body style="overflow-x: hidden;">
    <!--header starts-->
    <header>
        <div class="logo">
            <img src="../../public/assets/img/logo-4040.png" alt="">
            <h2>SL Athlete Care</h2>
        </div>
        
            
                <div class="profile">
                    <i class="fas fa-bell"></i>
                    <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                </div>
        
    </header> 
    <!--header ends-->
    
    <!--details-->
    <div class="details_part">
        <div class="description">
           
            <h2>Case Study Title : <?php print_r($data[5]->title)?></h2>
            <h4><?php print_r($data[5]->description)?></h4>
            <h3>Athlete Name : <?php print_r($data[5]->full_name)?> </h3>
           
        </div>
        <button class="report" onclick="window.location.href='http://localhost/SL-Athlete-Care/api/v1/generateReport.php?id=<?php echo($data[1])?>';">Generate Report</button>
    </div>

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates
        </button>
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post/<?php echo($data[1])?>';">
            Post
        </button>
    </div>
      
    <script>

      // Add active class to the current button (highlight it)
      var header = document.getElementById("btn-group");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }

    </script> 
      
  

    <!--end of buttons-->
  
      <!--Medicine-->
        <div class="container-2">
            <div class="title">
            <h3>Medicine </h3>
            </div>
            <?php if(!empty($data[0])): ?>

         <?php foreach($data[0] as $item): ?>
            <div class="card-2">
                <div class="imgbox">
                    <img src="../../../web/public/assets/img/medicine.png" alt="">
                </div>
                <div class="textbox1">
                <div id="textbox">
                    <h2 class="alignleft"><b>Medical update - <?php echo ucwords($item->heading)?></b></h2>
                    <?php $d=explode(" ",$item->datetime)?>
                        <h3 class="alignright">Time: <?php echo ucwords($d[1])?></h3>
                        <h3 class="alignright">Date: <?php echo ucwords($d[0])?></h3>
                </div>
                <div style="clear: both;">
                    <h3><?php echo ucwords($item->description)?></h3>
                </div>
            </div>
            </div>
     <?php endforeach;?>
     <?php else: ?>
          <h1>No data </h1>
    <?php endif; ?> 
    
        <div class="addbtn2">
      <?php if($_SESSION["userRole"]==2):?>         
        <button class="addbutton1">Add New</button>
     <?php else: ?>             
     
     <?php endif;?>
     <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/medicine/<?php echo($data[1])?>';">More</button> 
      </div>

    </div>
    
   

    <!--end-->



      <!--Images-->
    <div class="container-s">
        <div class="title">
        <h3>Attachments</h3>
        </div>
        <div class="card-deck">
        <?php if(!empty($data[4])): ?>

          <?php foreach($data[4] as $item): ?>
            <div class="card">
                <img class="card-img-top" src="../../../web/public/assets/dbimages/<?php echo($item->link)?>" alt="icon"> 
                <center><a href="../../../web/public/assets/dbimages/<?php echo($item->link)?>" title="click here to see the full sized image" target="_blank">View Full Screen</a></center>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo ucwords($item->heading)?></h5>
                    <p class="card-text"><?php echo ucwords($item->description)?></p>
                   
                </div>
            </div>
        <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
    
            
        </div>
        <br><br>
        <div class="addbtn2">
            <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/image/<?php echo($data[1])?>';">More</button>
        </div>

      </div>
    
      <!--end-->

      

      
    
    <div class="container">
        <div class="title">
        <h3>Workout</h3>
        </div>
        <div class="card-deck">
        <?php if(!empty($data[2])): ?>

         <?php foreach($data[2] as $item): ?>
            <div class="card">
                <img class="card-img-top" src="../../../web/public/assets/img/fitness.png" alt="icon"> 
                <div class="card-body">
                    <h5 class="card-title">Workout Schedule - <?php echo ucwords($item->title)?></h5>
                    <p class="card-text"><?php echo ucwords($item->description)?></p>
                </div>
            </div>
            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
        </div>
        <div class="addbtn2">
        <?php if($_SESSION["userRole"]==3):?>         
          <button class="addbutton" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/addworkout/<?php echo($data[1])?>';">Add New</button>
        <?php else: ?>             
           
        <?php endif;?>        
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/workout/<?php echo($data[1])?>';">More</button>
    </div>

</div>

      <!--end-->

      <!--Diet-->
    <div class="container">
        <div class="title">
        <h3>Diet</h3>
        </div>
       
            <div class="card-deck">
            <?php if(!empty($data[3])): ?>

<?php foreach($data[3] as $item): ?>
                <div class="card">
                    <img class="card-img-top" src="../../../web/public/assets/img/diet (3).png" alt="icon"> 
                    <div class="card-body">
                        <h5 class="card-title">Diet Schedule - <?php echo ucwords($item->title)?></h5>
                        <p class="card-text"><?php echo ucwords($item->description)?></p>
                    </div>
                </div>

            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            
        </div>

    <div class="addbtn2">
      <?php if($_SESSION["userRole"]==5):?>         
          <button class="addbutton" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/adddiet/<?php echo($data[1])?>';">Add New</button>        
     <?php else: ?>             
        <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/diet/<?php echo($data[1])?>';">More</button>
     <?php endif;?>
      </div>
</div>
      <!--end-->
      
      

            <!--Feedback-->
            <div class="container-2">
            <div class="title">
            <h3>Feedback </h3>
            </div>
            <?php if(!empty($data[6])): ?>

         <?php foreach($data[6] as $item): ?>
            <div class="card-2">
                <div class="imgbox">
                    <img src="../../../web/public/assets/img/feedback.png" alt="">
                </div>
                <div class="textbox1">
                <div id="textbox">
                    <h2 class="alignleft"><b>Feedback update - <?php echo ucwords($item->name)?></b></h2>
                    <?php $d=explode(" ",$item->datetime)?>
                        <h3 class="alignright">Time: <?php echo ucwords($d[1])?></h3>
                        <h3 class="alignright">Date: <?php echo ucwords($d[0])?></h3>
                </div>
                <div style="clear: both;">
                    <h3><?php echo ucwords($item->feedback)?></h3>
                </div>
            </div>
            </div>
     <?php endforeach;?>
     <?php else: ?>
          <h1>No data </h1>
    <?php endif; ?> 
    
        <div class="addbtn2">
      <?php if($_SESSION["userRole"]):?>      
        <button class="faddbutton">Add New</button>
     <?php else: ?>             
     
     <?php endif;?>
     <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/feedback/<?php echo($data[1])?>';">More</button> 
      </div>

    </div>
    
   

    <!--end-->

<!--Modal-->
    
<div id="AddModal" class="modal">       
    <div class="mcontainer">
        <div class="header2">
        <h2 class="myheader">Add Medicine</h2>
        </div>
   
  <div class="form-cont">
    <form action="<?php echo BASEURL;?>/CaseStudyController/addMedicine/<?php echo($data[1])?>" method="POST">
  
    <div class="row">
      <div class="col-25">
        <label for="title">Title :</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Enter Title" required>
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="subject">Description :</label>
      </div>
      <div class="col-75">
        <textarea id="description" required name="description" placeholder="Enter Description" style="height:120px"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <button class="back">Cancel</button>  
      <input type="submit" value="Submit">
    </div>
    </form>
    </div>
    </div>
</div>

<script>
   // Get the modal
    var modal = document.getElementById('AddModal');

    // Get the button that opens the modal
    var btns = document.getElementsByClassName("addbutton1");

    // Get the element that closes the modal
    var span = document.getElementsByClassName("back")[0];

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

 <!--End modal-->


<!--Feedback Modal-->
    
<div id="FeedbackModal" class="fmodal">       
    <div class="mcontainer">
        <div class="header2">
        <h2 class="myheader">Add Feedback</h2>
        </div>
   
  <div class="form-cont">
    <form action="<?php echo BASEURL;?>/CaseStudyController/addFeedback/<?php echo($data[1])?>" method="POST">
  
    <div class="row">
      <div class="col-25">
        <label for="title">Type :</label>
      </div>
      <div class="col-75">
        <input type="text" id="type" name="type" required>
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="subject">Feedback :</label>
      </div>
      <div class="col-75">
        <textarea id="feedback" required name="feedback" placeholder="Enter Feedback" style="height:120px"></textarea>
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

<script>
   // Get the modal
    var fmodal = document.getElementById('FeedbackModal');

    // Get the button that opens the modal
    var btns = document.getElementsByClassName("faddbutton");

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

 <!--End modal-->




</body>
</html>