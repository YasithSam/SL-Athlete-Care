<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <?php linkCSS("assets/css/login.css") ?>
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Log In</title>
        <style>
            .error {
               color: red;
            }

        </style>
    </head>
    <body>
     
       <?php include "components/login.php";?>
    
    </body>
</html>