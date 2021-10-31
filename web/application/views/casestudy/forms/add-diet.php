<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <?php linkCSS("assets/css/cs/add-diet-schedule.css") ?>
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

    
<script>

$(document).ready(function(){
  var max_carts = 1000;
  var wrapper = $(".dropdown");
  var add_button = $(".add_cart");

  var x = 1;
  $(add_button).click(function(e){
    e.preventDefault();
    if(x<max_carts){
      x++;
      $(wrapper).append('<div><div class="dropdown"><button onclick="myFunction(this)" class="dropbtn"><b> Diet Event <i class="fas fa-angle-down"></i></b></button><div id="myDropdown" class="dropdown-content"><div class="row1"><label for="event-title" class="form-label">Event Title : </label><input type="text" class="form-control" id="event-title" placeholder="Diet Event - 1"></div><div class="row1"><label for="event-desc" class="form-label">Event Description : </label><textarea id="event-desc" class="form-control" name="event-desc" placeholder="Lower-body strength training" style="height:100px"></textarea></div><div class="row1"><label for="time" class="form-label">Time Duration : </label><input type="text" class="form-control" id="time" placeholder="30 to 60 minutes"></div></div><a href="#" class="remove_field">Cancel</a></div></div>');
    }
  });

  $(wrapper).on("click",".remove_field",function(e){
    e.preventDefault();
    $(this).parent('div').remove();
    x--;
  });
});

</script>

  <div class="pagecontainer">
    <div class="header">
    <p class="h22">Add Diet Schedule</p>
  </div>
   
  <div class="form-container">
      
      <form action ="<?php echo BASEURL;?>/caseStudyController/addDietlist/">
    
          <div class="row2">
            <label for="title">Diet Title :</label>
            <input type="text" id="title" name="title" placeholder="Enter Title">
          </div>
         <input name="id" value="<?php echo($data[0])?>" hidden></input>
          <div class="row2">
            <label for="subject">Diet Description :</label>
            <textarea id="description" name="description" placeholder="Enter Description" style="height:120px"></textarea>
          </div>  
      
           <div class="row2">
            <label for="event">Diet Events :</label>
           </div>


          <!--Dropdown-->
          <div class="dropdown">
                      
                      <div id="myDropdown" class="dropdown-content">
                        <button class="dropbtn"><b> Diet Event <i class="fas fa-angle-down"></i></b></button>
                        <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc" placeholder="Lower-body strength training" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Time Duration : </label>
                        <input type="text" class="form-control" id="time" name="time"placeholder="30 to 60 minutes">
                        </div>
                        <div class="row1">
                        <label for="time" class="form-label">Repetitions : </label>
                        <input type="text" class="form-control" id="time" name="reps" placeholder="30 to 60 minutes">
                        </div>

                      </div>
                    </div><br>


                    <center><button onclick="myFunction(this)" class="add_cart"><b> Add Diet </b></button></center>

<div class="btnrow">
  <button class="back"><a href="#" onclick="history.go(-1)">Go Back</a></button>  
  <input type="submit" value="Submit">
</div>

</form>
<br>
<br> 
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
var myFunction = function(target) {
   target.parentNode.querySelector('.dropdown-content').classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.contains('show');
      }
    }
  }
}
</script>

</body>
</html>