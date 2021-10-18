<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
          <!-- ===== CSS ===== -->
          <?php linkCSS("assets/css/dashboard.css") ?>
    </head>

    <body>
        
        <?php include "sidebar.php";?>
        <div class="main-content">

            <header>
                <div class="register-wrapper">
                    <a href="<?php echo BASEURL; ?>/admin/register"><button>Register User <span class="ti-plus"></span></button></a>
                </div>

                <div class="social-icons">
                    <span class="ti-bell"></span>
                    <div class="user-wrapper">
                        <img src="avatar.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Administrator</h4>
                            <small>Admin</small>
                        </div>
                    </div>                
                </div>
            </header>

          

        </div>
    </body>
</html>