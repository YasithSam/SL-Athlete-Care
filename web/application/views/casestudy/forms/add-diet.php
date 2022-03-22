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


<header>
        <div class="logo">
            <img src="../../public/assets/img/logo-4040.png" alt=""> 
        </div>
        
        <h2>SL Athlete Care</h2>
    
                <div class="profile">
                    <i class="fas fa-bell"></i>
                    <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                </div>
        
    </header> 
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
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post/<?php echo($data[1])?>';">
            Post
        </button>
    </div>


    


  <div class="container">
    <div class="header-part">
    <h2>Add Diet Schedule</h2>
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
         
                <div class="dropdown" id="dropdown">
                      
                      <div id="myDropdown" class="dropdown-content">
                       
                        <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading1" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc1" placeholder="add a description about the diet event" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Amount : </label>
                        <input type="text" class="form-control" id="time" name="time1" placeholder="Enter in grams">
                        </div>
                   

                      </div>
                      <button type="button" id="toggle1">Add more</button>
                    </div><br>
                    <div class="dropdown2" style="display: none;" id="dropdown2">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                      <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading2" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc2" placeholder="add a description about the diet event" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Amount : </label>
                        <input type="text" class="form-control" id="time" name="time2" placeholder="Enter in grams">
                        </div>
      
                            </div>
                            <button type="button" id="toggle2">Add more</button>
                        </div>
                        <div class="dropdown3" style="display: none;" id="dropdown3">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                      <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading3" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc3" placeholder="add a description about the diet event" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Amount : </label>
                        <input type="text" class="form-control" id="time" name="time3" placeholder="Enter in grams">
                        </div>
      
                            </div>
                            <button type="button" id="toggle3">Add more</button>
                        </div>
                        <div class="dropdown4" style="display: none;" id="dropdown4">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                      <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading4" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc4" placeholder="add a description about the diet event" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Amount : </label>
                        <input type="text" class="form-control" id="time" name="time4" placeholder="Enter in grams">
                        </div>
      
                            </div>
                            <button type="button" id="toggle4">Add more</button>
                        </div>
                        <div class="dropdown5" style="display: none;" id="dropdown5">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                      <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading5" placeholder="Diet Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc5" placeholder="add a description about the diet event" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Amount : </label>
                        <input type="text" class="form-control" id="time" name="time5" placeholder="Enter in grams">
                        </div>
      
                            </div>
                        </div>
               
                      
                      
                             


                 

<div class="btnrow">
  <button class="back"><a href="#" onclick="history.go(-1)">Go Back</a></button>  
  <input type="submit" value="Submit">
</div>

</form>
<br>
<br> 
</div>

<script>

const targetDiv = document.getElementById("dropdown");
const targetDiv2 = document.getElementById("dropdown2");
const targetDiv3 = document.getElementById("dropdown3");
const targetDiv4 = document.getElementById("dropdown4");
const targetDiv5 = document.getElementById("dropdown5");
const btn = document.getElementById("toggle1");
const btn2 = document.getElementById("toggle2");
const btn3 = document.getElementById("toggle3");
const btn4 = document.getElementById("toggle4");
btn.onclick = function () {
  if (targetDiv2.style.display == "none") {
    targetDiv2.style.display = "block";
    btn.innerHTML="Cancel";
  } else {
    targetDiv2.style.display = "none";
    btn.innerHTML="Add more";
  }
};
btn2.onclick = function () {
  if (targetDiv3.style.display == "none") {
    targetDiv3.style.display = "block";
    btn2.innerHTML="Cancel";
  } else {
    targetDiv3.style.display = "none";
    btn2.innerHTML="Add more";
  }
};
btn3.onclick = function () {
  if (targetDiv4.style.display == "none") {
    targetDiv4.style.display = "block";
    btn3.innerHTML="Cancel";
  } else {
    targetDiv4.style.display = "none";
    btn3.innerHTML="Add more";
  }
};
btn4.onclick = function () {
  if (targetDiv5.style.display == "none") {
    targetDiv5.style.display = "block";
    btn4.innerHTML="Cancel";
  } else {
    targetDiv5.style.display = "none";
    btn4.innerHTML="Add more";
  }
};


</script>

</body>
</html>