<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/main.css") ?>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
</head>
<body>
    <!--header starts-->
    <header>
        <div class="logo">
            <img src="../../public/assets/img/logo-4040.png" alt="">
            <h2>SL Athlete Care</h2>
        </div>
        
            
                <div class="profile">
                    <i class="fas fa-bell"></i>
                    <button class="btn1" onclick="window.location.href='#';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                </div>
        
    </header> 
    <!--header ends-->
    
    <!--details-->
    <div class="details_part">
        <div class="name">CASE STUDY</div>
        <div class="description">
            <h3>Muscle Sprains and Strains</h3>
            <h4>Injuries and disorders that affects bones, muscles, ligaments, nerves, or tendons</h4>
        </div>
    </div>

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates 
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="postbtn">
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
      
      <!--cards-->
      <div class="container-2">

          <!--Date-->
          <?php if(!empty($data[0])): ?>
        
             <?php foreach($data[0] as $item): ?>
       
                    <div class="card-2">
                        <div id="textbox">
                            <h3 class="alignleft"><b>Name : <?php print_r($item->username); ?></b></h3>
                            <?php $d=explode(" ",$item->datetime)?>
                            <h3 class="alignright">Time: <?php echo($d[1]); ?> </h3>
                            <h3 class="alignright">Date: <?php echo($d[0]); ?> </h3>
                           
                        </div>
                        <div style="clear: both;">
                            <h3 class="alignleft"><b><?php echo($item->name); ?> Update : </b><?php echo($item->heading); ?> </h3>
                            <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/medicine';">View Update</button>
                        </div>
                    </div>


           <?php endforeach;?>
           <?php else: ?>
              <h1>No data </h1>
            <?php endif; ?> 
    
        
       

</div>

    <!--end-->
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
    


   <!-- The Alert Modal -->
   <div id="alertModal1" class="alertmodal">

<div class="amcontainer">
    <div class="top">
        <i class="fa fa-exclamation-circle fa-2x" aria-hidden="true" ></i>
        <h3>Post Not Yet Activated</h3>
    </div>
    <div class="texticon">
        <i class="fa fa-question-circle fa-3x" aria-hidden="true" aria-hidden="true" ></i>
        <h3>Do you want to activate?</h3>
    </div>

    <div class="mbtn">
        <button class="mbuttonno">Cancel</button>

        <button class="mbutton" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post/<?php echo($data[1])?>';">Activate</button>
    </div>
</div>
</div>

<!--Alert Modal End-->

<script>
// Get the alertmodal
var alertmodal = document.getElementById('alertModal1');

// Get the button that opens the alertmodal
var btns = document.getElementsByClassName("postbtn");

// Get the element that closes the alertmodal
var span = document.getElementsByClassName("mbuttonno")[0];

// When the user clicks the button, open the alertmodal
for (var i = 0; i < btns.length; i++) {
btns[i].onclick = function() {
    alertmodal.style.display = "block";
}
}

// When the user clicks on N0, close the modal
span.onclick = function() {
    alertmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == alertmodal) {
    alertmodal.style.display = "none";
}
}


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



</body>
</html>