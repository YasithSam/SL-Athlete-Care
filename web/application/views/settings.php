<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
     <?php linkCSS("assets/css/settings.css") ?>
     <?php linkCSS("assets/css/doctormain.css") ?>
     <?php linkCSS("assets/css/doctordashboard.css") ?>

   </head>
</head>
<body>
<?php include "doctor/header.php" ?>
<?php include "doctor/sidebar.php"?>


<div class="container">
<h2>Settings & Privacy</h2>

<!-- Trigger/Open The Modal -->
<div class="buttoncard">
<button id="myBtn" onclick="location.href='<?php echo BASEURL;?>/commonController/privacy'">Privacy Policy</button>
</div>

<div class="buttoncard">
<button id="myBtn" onclick="location.href='<?php echo BASEURL;?>/commonController/help'">Help</button>
</div>
<div class="buttoncard">
<button id="myBtn" onclick="location.href='<?php echo BASEURL;?>/accountController/logout'">Log out</button>
</div>

</div>

</body>
</html>