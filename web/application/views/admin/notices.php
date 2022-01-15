<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/admin/adminmain.css") ?>
        <?php linkCSS("assets/css/admin/admin.css") ?>
        <?php linkCSS("assets/css/articlemain.css") ?>
        <?php linkCSS("assets/css/myarticles.css") ?>
        <?php linkCSS("assets/css/alert.css") ?>

    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>


 
            <main>
                
    <div class="head">
        <div class="title">Notices</div>
        <div class="add">
            <a href="<?php echo BASEURL;?>/admin/addnotice"><i class="fas fa-plus" ></i>Add</a>
        </div>
    </div>
    <div style="margin-left: 40px; margin-bottom: 10px;">
        <?php $this->flash('dltnot', 'alert alert-success') ?>
        <?php $this->flash('addnot', 'alert alert-success') ?>
    </div>
    <!--Horizontal card container-->
    <div class="main">

        <!--Single card------------------------------------------------------------------------->
        <?php if(!empty($data)): ?>
         <?php $arr=array_slice($data,0,3)?>
          <?php foreach($arr as $item): ?>
        <div class="card">
          <img src="../../web/public/assets/dbimages/<?php echo($item->url);?>" alt="Avatar" style="width:100%; height:200px;">
          <div class="container">
            <h4><?php echo($item->heading);?></h4> 
            <p><?php echo($item->description);?></p> 
              <div class="edit">
                <div class="button">
                    <!-- <a href="<?php echo BASEURL;?>/admin/editnotice"><i class="fas fa-pen icon"></i></a> -->
                    <a href="<?php echo BASEURL;?>/admin/deleteNotice/<?php echo $item->id;?>" onclick='return confirm("Delete this notice?");'><i class="fas fa-trash-alt icon"></i></a>
                </div>
              </div>
          </div>
        </div>
        <?php endforeach;?>
        <?php else: ?>
            <h1>No data </h1>
        <?php endif; ?> 
    </div>

    <!--Horizontal card container-->
    <div class="main">
    <?php if(!empty($data)): ?>
        <?php $arr=array_slice($data,3,count($data))?>
        <?php foreach($arr as $item): ?>
        <div class="card">
  
          <img src="../../web/public/assets/dbimages/<?php echo $item->url;?>" alt="Avatar" style="width:100%; height:200px;">
        
          <div class="container">
            <h4><?php echo($item->heading);?></h4> 
            <p><?php echo($item->description);?></p> 
              <div class="edit">
                <div class="button">
                    <!-- <a href="<?php echo BASEURL;?>/admin/editnotice"><i class="fas fa-pen icon"></i></a> -->
                    <a href="<?php echo BASEURL;?>/admin/deleteNotice/<?php echo $item->id;?>"><i class="fas fa-trash-alt icon"></i></a>
                </div>
              </div>
          </div>
        </div>
        <?php endforeach;?>
        <?php else: ?>
            <h1>No data </h1>
        <?php endif; ?> 
    </div>

    <div class="more"><a href="<?php echo BASEURL;?>/forumController/noticeitem"> View All</a></div>
        
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