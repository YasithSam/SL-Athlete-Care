<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        
        <?php linkCSS("assets/css/admin/comments.css") ?>
      

    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>


    <div class="description">
        All Comments
   </div>

<div class="wrapper">
   <table class="content-table">
    <thead>
      <tr>
        <th class="article-name">Article Title</th>
        <th class="comment">Comment</th>
        <th class="comment">Username</th>
        <th class="comment">Datetime</th>
        <th class="btnrow">Approve</th>
      </tr>
    </thead>
    <tbody>
    <?php if(!empty($data[0])): ?>
    <?php foreach($data[0] as $item): ?>
      <tr>
        <td><?php echo ucwords($item->heading); ?></td>
        <td><?php echo ucwords($item->comment); ?></td>
        <td><?php echo ucwords($item->username); ?></td>
        <td><?php echo ucwords($item->datetime); ?></td>
        <td><input type="button" class="button" value="Approve"> </td>
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
       <a href="<?php echo BASEURL;?>/admin/comments?id=<?php echo($i)?>" class="active"><?php echo($i)?></a>
     <?php }else{?>
       <a href="<?php echo BASEURL;?>/admin/comments?id=<?php echo($i)?>"><?php echo($i)?></a>
      <?php
      } ?>
    <?php
    }?>

  </div>
</div> 
</div>
</body>
</html>