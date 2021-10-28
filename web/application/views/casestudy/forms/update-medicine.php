<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update-medicine.css">
    <?php linkCSS("assets/css/cs/update-medicine.css") ?>
    
</head>
<body>
   
  <div class="container">
    <div class="header">
    <h2>Update Medicine</h2>
  </div>
   
  <div class="form-cont">

    <form action="<?php echo BASEURL;?>/caseStudyController/editMedicine/1">
  <div class="row">
    <div class="col-25">
      <label for="title">Title :</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Enter Title">
    </div>
  </div>
  

  <div class="row">
    <div class="col-25">
      <label for="subject">Description :</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Enter Description" style="height:120px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <button class="back"><a href="#" onclick="history.go(-1)">Go Back</a></button>  
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
</body>
</html>