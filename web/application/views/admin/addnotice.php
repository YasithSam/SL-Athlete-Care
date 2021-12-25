<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/addartstyle.css") ?>
        <?php linkCSS("assets/css/addart.css") ?>
      
    </head>

    <body>
    <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>

       
<main>
       <div class="container">
          <div class="title">Create Notice</div>
      
        <div class="form-inner">
            <form action="<?php echo BASEURL;?>/admin/addnewnotice" class="login" method="post">              
               <!--heading-->
               <div class="field">
                  <input type="text" placeholder="Notice heading" name="heading" required>
               </div>
               <!--subheading-->
               <!-- <div class="field">
                  <input type="text" placeholder="Notice subheading" name="subheading">
               </div> -->
                <!--description-->
               <!-- <div class="field">
                  <input type="text" placeholder="Notice description" name="subheading">
               </div> -->
               <!--category-->
               <div class="field">
                  <select name="category" id="category">
                     <option value="" disabled selected hidden>Notice Category</option>
                     <option value="male">Athletics</option>
                     <option value="female">Injuries</option>
                     <option value="female">Health</option>
                  </select>
               </div>
              <!--content-->
                     <textarea class="text-area" rows="10" placeholder="Notice content" name="content" required></textarea>
               <!--cover image
                  <div class="cover">
                     <p class="coverimg"> Upload your cover image for the article: </p> <input type="file" id="myFile" name="filename">
                  </div>-->
                  <div class="cover">
                  <p class="coverimg" ><label for="file" style="cursor: pointer; ">Upload a cover image:</label></p>
                  <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)"></p>
                  </div>
                  <p style="text-align: center;"><img id="output" width="500"></p>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
               <!--submit-->
               <div class="btn">
                  <input type="submit" value="Submit">
               </div>
               
            </form>
        </div>
    </div>

</main>
            </div>

            <script>
              /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
              var dropdown = document.getElementsByClassName("dropdown-btn");
              var i;
              
              for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
                });
              }
              </script>
    </body>
</html>