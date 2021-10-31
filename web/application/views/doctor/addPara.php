<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/qs.css") ?>
        <?php linkCSS("assets/css/qmain.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php";?>

        <div class="main-content">
        <?php include "header.php";?>

           
<!--Body section-->
            <main>
                     <div class="container">
                        <div class="title">Add Paramedical User</div>
                    
                      <div class="form-inner">
                          <form action="<?php echo BASEURL;?>/doctor/addpara" class="login" method="POST">              
                             <div class="field">
                                <input type="text" name="cid" value="#C00<?php echo($data[2])?>" placeholder="Case study Id" required readonly>
                              
                
                             </div>
                            
                              <div class="row">
                               <div class="field">
                                <select name="phy" id="month">
                                   <option value="" disabled selected hidden>Physiotherapist</option>
                                   <?php foreach($data[1] as $item): ?>
                                    <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                   <?php endforeach;?>
                                </select>
                               </div>
                              </div>
                              <div class="row">
                                  <div class="field">
                                   <select name="nut" id="month">
                                      <option value="" disabled selected hidden>Nutritionist</option>
                                      <?php foreach($data[0] as $item): ?>
                                         <option value="<?php print_r($item->uuid);?>"><?php print_r($item->username);?></option>
                                     <?php endforeach;?>
                                   </select>
                                  </div>
                                 
                              </div>
                            
                             <!--submit-->
                             <div class="btn">
                                <input type="submit" value="Submit">
                             </div>
                          </form>
                      </div>
                  </div>
            </main>

        </div>
    </body>
</html>