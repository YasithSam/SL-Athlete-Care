<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        
        <?php linkCSS("assets/css/admin/case-study.css") ?>
      

    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>


    <div class="description">
        All Case Studies
   </div>

    <div class="wrapper">
       <table class="content-table">
        <thead>
          <tr>
            <th class="title">Title</th>
            <th class="athlete">Athlete</th>
            <th class="doctor">Doctor</th>
           
            <th class="btnrow">Disable</th>
          </tr>
        </thead>
        <tbody>
        <?php if(!empty($data[0])): ?>

        <?php foreach($data[0] as $item): ?>
          <tr>
            <td><?php echo ucwords($item->title); ?></td>
            <td><?php echo ucwords($item->an); ?></td>
            <td><?php echo ucwords($item->dn); ?></td>
            <?php if(($item->status)){?>
                   <td style="text-align: center;"><a href="http://localhost/SL-Athlete-Care/api/v1/emailDisableCS.php?id=<?php echo $item->case_id;?>" onclick='return confirm("Delete this case study?");'><button class="button"> Disable</button></a> </td>
              <?php } else{?>
                  <td style="text-align: center;"><h4 style="color:red">Disabled</h4></td>
            <?php }?>
          </tr>
          <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
        </tbody>
      </table>
      <br>
      <div class="pagination">
    <?php 
    $x=$data[1];
    $c=ceil($x / 10);
    for ($i=1; $i<=$c; $i++) {?>
      <?php if($i==$data[2]){?>
       <a href="<?php echo BASEURL;?>/admin/casestudy?id=<?php echo($i)?>" class="active"><?php echo($i)?></a>
     <?php }else{?>
       <a href="<?php echo BASEURL;?>/admin/casestudy?id=<?php echo($i)?>"><?php echo($i)?></a>
      <?php
      } ?>
    <?php
    }?>

  </div>
      <br>
    </div> 
</body>
</html>