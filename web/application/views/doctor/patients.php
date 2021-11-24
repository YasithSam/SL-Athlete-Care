<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php linkCSS("assets/css/pt.css") ?>
        <?php linkCSS("assets/css/ptmain.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>
           
<!--Body section-->
<div class="main">

<div class="container">
    
    <div class="title"> Patients Overview </div> 
    <div class="subtitle"> Page 1 </div>

    <form class="search-btn" action="/action_page.php">
        <!--<input type="text" class="search" placeholder="Search..." name="search">-->
        <select name="search" id="search" class="search">
            <option value="" disabled selected hidden>Patient</option>
            <?php foreach($data as $item): ?>
            <option value="<?php print_r($item->uuid);?>"><?php print_r($item->full_name);?></option>
            <?php endforeach;?>
        </select>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        
<!--Update card-->
<?php if(!empty($data)): ?>
<?php foreach($data as $item): ?>

<div class="injury">
    <img src="../../web/public/assets/img/user.jpg" alt="user" class="user">
    <div class="description">
        <div class="col1"> Name: &nbsp; <?php echo($item->full_name);?> <br> Phone: &nbsp; <?php echo($item->phone);?> </div>
        <!-- <div class="col2"> Injury: &nbsp;   <br> Condition: &nbsp;  </div> -->
    </div>
    <div class="button">
        <div class="date">21/10/2021</div>
        <a href="<?php echo BASEURL;?>/doctor/athlete/<?php echo $item->uuid;?>">View</a>
    </div>
</div>
<?php endforeach;?>
    <?php else: ?>
        <h1>No data </h1>
    <?php endif; ?> 

<!--buttons-->
<div class="btn-group">
    <a href="" class="activebtn" style="margin-right: 10px;">1</a>
    <a href="" class="btn" style="margin-left: 10px;">2</a>
    <a href="" class="btn" style="margin-left: 20px;">3</a>
    <a href="" class="btn" style="margin-left: 20px;">>></a>
</div>
<!--end of buttons-->

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

         <script type="text/javascript">
         $("#athlete").chosen();
         </script>
</body>
</html>