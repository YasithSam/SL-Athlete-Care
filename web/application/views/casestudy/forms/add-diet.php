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
  <div class="pagecontainer">
    <div class="header">
    <p class="h22">Add Diet Schedule</p>
  </div>
   
  <div class="form-cont">

  <form action=" ">

      <div class="row">
      <label for="title">Diet Title :</label>
      </div>
      <div class="row">
      <input type="text" id="title" name="title" placeholder="Enter Title">
       </div>
 
       <div class="row">
       <label for="subject">Diet Description :</label>
       </div>
       <div class="row">
      <textarea id="description" name="description" placeholder="Enter Description" style="height:120px"></textarea>
       </div>

       <div class="row">
        <label for="we">Diet Events :</label>
       </div>


        <!--Dropdown-->
   <button class="navbar-toggler" type="button" 
   data-toggle="collapse" data-target="#myNavbar1" aria-controls="myNavbar" 
   aria-expanded="false" aria-label="Toggle navigation">
  <div class="dropbtn"><b> Diet Event - 1 <i class="fas fa-angle-down"></i></b></div>
</button>
<div class="collapse navbar-collapse" id="myNavbar1">

<div class="mb-3">
  <label for="event-title" class="form-label">Diet Title : </label>
  <input type="text" class="form-control" id="event-title" placeholder="Diet Event - 1">
</div>
<div class="mb-3">
  <label for="event-desc" class="form-label">Diet Description : </label>
  <textarea id="event-desc" name="event-desc" placeholder="Try two tangerines or an apple with a handful of nuts, dried apricots, or raisins to get you going." style="height:100px"></textarea>
</div>
<div class="mb-3">
  <label for="time" class="form-label">Meal : </label>
  <input type="text" class="form-control" id="meal" placeholder="Morning Snack | Fruits">
</div>    
</div>

   <!--Dropdown-->
   <button class="navbar-toggler" type="button" 
   data-toggle="collapse" data-target="#myNavbar2" aria-controls="myNavbar" 
   aria-expanded="false" aria-label="Toggle navigation">
   <div class="dropbtn"><b> Diet Event - 2 <i class="fas fa-angle-down"></i></b></div>
</button>
<div class="collapse navbar-collapse" id="myNavbar2">

<div class="mb-3">
  <label for="event-title" class="form-label">Event Title : </label>
  <input type="text" class="form-control" id="event-title" placeholder="Diet Event - 2">
</div>
<div class="mb-3">
  <label for="event-desc" class="form-label">Diet Description : </label>
  <textarea id="event-desc" name="event-desc" placeholder="Try two tangerines or an apple with a handful of nuts, dried apricots, or raisins to get you going." style="height:100px"></textarea>
</div>
<div class="mb-3">
  <label for="time" class="form-label">Meal : </label>
  <input type="text" class="form-control" id="meal" placeholder="Morning Snack | Fruits">
</div>  
</div>


 <!--Dropdown-->
 <button class="navbar-toggler" type="button" 
 data-toggle="collapse" data-target="#myNavbar3" aria-controls="myNavbar" 
 aria-expanded="false" aria-label="Toggle navigation">
 <div class="dropbtn"><b> Diet Event - 3 <i class="fas fa-angle-down"></i></b></div>
</button>
<div class="collapse navbar-collapse" id="myNavbar3">

<div class="mb-3">
<label for="event-title" class="form-label">Event Title : </label>
<input type="text" class="form-control" id="event-title" placeholder="Diet Event - 3">
</div>
<div class="mb-3">
  <label for="event-desc" class="form-label">Diet Description : </label>
  <textarea id="event-desc" name="event-desc" placeholder="Try two tangerines or an apple with a handful of nuts, dried apricots, or raisins to get you going." style="height:100px"></textarea>
</div>
<div class="mb-3">
  <label for="time" class="form-label">Meal : </label>
  <input type="text" class="form-control" id="meal" placeholder="Morning Snack | Fruits">
</div>  
</div>



 <!--Dropdown-->
 <button class="navbar-toggler" type="button" 
 data-toggle="collapse" data-target="#myNavbar4" aria-controls="myNavbar" 
 aria-expanded="false" aria-label="Toggle navigation">
 <div class="dropbtn"><b> Diet Event - 4 <i class="fas fa-angle-down"></i></b></div>
</button>
<div class="collapse navbar-collapse" id="myNavbar4">

<div class="mb-3">
<label for="event-title" class="form-label">Event Title : </label>
<input type="text" class="form-control" id="event-title" placeholder="Diet Event - 4">
</div>
<div class="mb-3">
  <label for="event-desc" class="form-label">Diet Description : </label>
  <textarea id="event-desc" name="event-desc" placeholder="Try two tangerines or an apple with a handful of nuts, dried apricots, or raisins to get you going." style="height:100px"></textarea>
</div>
<div class="mb-3">
  <label for="time" class="form-label">Meal : </label>
  <input type="text" class="form-control" id="meal" placeholder="Morning Snack | Fruits">
</div>  
</div>


 <!--Dropdown-->
 <button class="navbar-toggler" type="button" 
 data-toggle="collapse" data-target="#myNavbar5" aria-controls="myNavbar" 
 aria-expanded="false" aria-label="Toggle navigation">
 <div class="dropbtn"><b> Diet Event - 5 <i class="fas fa-angle-down"></i></b></div>
</button>
<div class="collapse navbar-collapse" id="myNavbar5">

<div class="mb-3">
<label for="event-title" class="form-label">Event Title : </label>
<input type="text" class="form-control" id="event-title" placeholder="Diet Event - 5">
</div>
<div class="mb-3">
  <label for="event-desc" class="form-label">Diet Description : </label>
  <textarea id="event-desc" name="event-desc" placeholder="Try two tangerines or an apple with a handful of nuts, dried apricots, or raisins to get you going." style="height:100px"></textarea>
</div>
<div class="mb-3">
  <label for="time" class="form-label">Meal : </label>
  <input type="text" class="form-control" id="meal" placeholder="Morning Snack | Fruits">
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
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>