<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
       
        <?php linkCSS("assets/css/doctormain.css") ?>
        <?php linkCSS("assets/css/pt.css") ?>
    </head>
    

    <body>
    <input type="checkbox" id="sidebar-toggle">
    <?php include "sidebar.php";?>

    <div class="main-content">
        <?php include "header.php";?>
        <main>
        <div class="pt box">
        <?php include "patientitems.php";?>
            
        </div>
             
        </main>

    </div>
        

    </body>
</html>