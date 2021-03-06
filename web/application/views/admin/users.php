<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        
        <?php linkCSS("assets/css/admin/users.css") ?>
      

    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>


        
<div class="description">
    All Users
</div>

<div class="wrapper">
   <table class="content-table">
    <thead>
      <tr>
        <th class="uuid">UUID</th>
        <th class="roleid">Role ID</th>
        <th class="fullname">Username</th>
        <th class="btnrow">Disable User</th>
        <th style="width: 0px;"></th>
      </tr>
    </thead>
    <tbody>
    <?php if(!empty($data[0])): ?>

        <?php foreach($data[0] as $item): ?>
            <tr class="">
              <td style="padding-left: 50px;" ><?php echo ucwords($item->uuid); ?></td>
              <td><?php echo ucwords($item->role); ?></td>
              <td><?php echo ucwords($item->username); ?></td>  
              <?php if(!($item->is_disabled)){?>
                   <td style="text-align: center;"><a href="http://localhost/SL-Athlete-Care/api/v1/emailDisableUser.php?id=<?php echo $item->uuid;?>" onclick='return confirm("Delete this user?");'><button class="button"> Disable</button></a> </td>
              <?php } else{?>
                  <td style="text-align: center;"><h4 style="color:red">Disabled User</h4><td>
              <?php }?>
  
           
            </tr>
      <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
     
    </tbody>
  </table>
        </div>
  <br>
  <div class="pagination">
    <?php 
    $x=$data[1];
    $c=ceil($x / 10);
    for ($i=1; $i<=$c; $i++) {?>
      <?php if($i==$data[2]){?>
       <a href="<?php echo BASEURL;?>/admin/users?id=<?php echo($i)?>" class="active"><?php echo($i)?></a>
     <?php }else{?>
       <a href="<?php echo BASEURL;?>/admin/users?id=<?php echo($i)?>"><?php echo($i)?></a>
      <?php
      } ?>
    <?php
    }?>

  </div>

</div> 



       </body>
</html>