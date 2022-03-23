<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/add-workout-schedule.css") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <h2>Add Workout Schedule</h2>
    </div>

    <div class="form-container">
      
      <form action ="<?php echo BASEURL;?>/caseStudyController/addpostworkoutlist/">
    
          <div class="row2">
            <label for="title">Workout Title :</label>
            <input type="text" id="title" name="title" placeholder="Enter Title">
          </div>
         <input name="id" value="<?php echo($data[0])?>" hidden></input>
          <div class="row2">
            <label for="subject">Workout Description :</label>
            <textarea id="description" name="description" placeholder="Enter Description" style="height:120px"></textarea>
          </div>  
      
           <div class="row2">
            <label for="event">Workout Events : can add upto maximum 7 events</label>
           </div>

             <!--Dropdown-->
                        
             <div class="dropdown" id="dropdown">
                      
                <div id="myDropdown" class="dropdown-content">
                         
                        <div class="row1">
                        <label for="event-title" class="form-label">Event Title : </label>
                        <input type="text" class="form-control" id="event-title" name="itemheading1" placeholder="Workout Event - 1">
                        </div>

                        <div class="row1">
                        <label for="event-desc" class="form-label">Event Description : </label>
                        <textarea id="event-desc" class="form-control" name="itemdesc1" placeholder="Lower-body strength training" style="height:100px"></textarea>
                        </div>

                        <div class="row1">
                        <label for="time" class="form-label">Time Duration : </label>
                        <input type="text" class="form-control" id="time" name="time1" placeholder="30 to 60 minutes">
                        </div>
                        <div class="row1">
                        <label for="time" class="form-label">Repetitions : </label>
                        <input type="text" class="form-control" id="time" name="reps1" placeholder="30 to 60 minutes">
                        </div>

                      </div>

                      <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle1">Add more</button>


                </div>  <br>

                  <!--Dropdown-->

                  <!-- Form - 02 -->

                  <div class="dropdown2" style="display: none;" id="dropdown2">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading2" placeholder="Workout Event - 2">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc2" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time2" placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps2" placeholder="30 to 60 minutes">
                              </div>
      
                            </div>
                            <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle2">Add more</button>

                        </div>

                    <!--Dropdown-->

                    <!-- Form - 03 -->

                        <div class="dropdown3" style="display: none;" id="dropdown3">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading3" placeholder="Workout Event - 3">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc3" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time3"placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps3" placeholder="30 to 60 minutes">
                              </div>
      
                            </div>
                            <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle3">Add more</button>

                        </div>

                    <!--Dropdown-->

                    <!-- Form - 04 -->

                      <div class="dropdown4" style="display: none;" id="dropdown4">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading4" placeholder="Workout Event - 4">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc4" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time4" placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps4" placeholder="30 to 60 minutes">
                              </div>
      
                            </div>
                            <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle4">Add more</button>

                        </div>

                    <!--Dropdown-->

                    <!-- Form - 05 -->

                      <div class="dropdown5" style="display: none;" id="dropdown5">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading5" placeholder="Workout Event - 5">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc5" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time5" placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps5" placeholder="30 to 60 minutes">
                              </div>
      
                            </div>

                      <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle5">Add more</button>

                        </div>

                    <!--Dropdown-->

                    <!-- Form - 06 -->

                      <div class="dropdown6" style="display: none;" id="dropdown6">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading6" placeholder="Workout Event - 6">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc6" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time6" placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps6" placeholder="30 to 60 minutes">
                              </div>
      
                            </div>

                    <button type="button"  style="background: #58a5f0; 
                        font-size: 15px;
                        font-weight: 600;
                        padding: 8px;
                        border-radius: 3px;
                        border: none;
                        cursor: pointer; " 
                   id="toggle6">Add more</button>

                        </div>

                    <!--Dropdown-->

                    <!-- Form - 07 -->

                      <div class="dropdown7" style="display: none;" id="dropdown7">
                      
                      <div id="myDropdown" class="dropdown-content">
                               
                              <div class="row1">
                              <label for="event-title" class="form-label">Event Title : </label>
                              <input type="text" class="form-control" id="event-title" name="itemheading7" placeholder="Workout Event - 7">
                              </div>
      
                              <div class="row1">
                              <label for="event-desc" class="form-label">Event Description : </label>
                              <textarea id="event-desc" class="form-control" name="itemdesc7" placeholder="Lower-body strength training" style="height:100px"></textarea>
                              </div>
      
                              <div class="row1">
                              <label for="time" class="form-label">Time Duration : </label>
                              <input type="text" class="form-control" id="time" name="time7" placeholder="30 to 60 minutes">
                              </div>
                              <div class="row1">
                              <label for="time" class="form-label">Repetitions : </label>
                              <input type="text" class="form-control" id="time" name="reps7" placeholder="30 to 60 minutes">
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

const targetDiv6 = document.getElementById("dropdown6");
const targetDiv7 = document.getElementById("dropdown7");

const btn = document.getElementById("toggle1");
const btn2 = document.getElementById("toggle2");
const btn3 = document.getElementById("toggle3");
const btn4 = document.getElementById("toggle4");

const btn5 = document.getElementById("toggle5");
const btn6 = document.getElementById("toggle6");


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

btn5.onclick = function () {
  if (targetDiv6.style.display == "none") {
    targetDiv6.style.display = "block";
    btn5.innerHTML="Cancel";
  } else {
    targetDiv6.style.display = "none";
    btn5.innerHTML="Add more";
  }
};

btn6.onclick = function () {
  if (targetDiv7.style.display == "none") {
    targetDiv7.style.display = "block";
    btn6.innerHTML="Cancel";
  } else {
    targetDiv7.style.display = "none";
    btn6.innerHTML="Add more";
  }
};




</script>


</body>
</html>
