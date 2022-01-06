<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        
        <?php linkCSS("assets/css/admin/article.css") ?>

    </head>

    <body>  <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

        <div class="main-content">
        <?php include "header.php"?>

        <div class="description">
            All Articles and Questions
       </div>
    
        <div class="wrapper">
           <table class="content-table">
            <thead>
              <tr>
                <th class="type">Type</th>
                <th class="title">Title</th>
                <th class="desc">Description</th>
                <th class="name">Author Name</th>
                <th class="rname">Reviewer Approval</th>
                <th class="btnrow">Approve Article</th>
                <th class="btnrow">Delete Article</th>
              </tr>
            </thead>
            <tbody>
            <?php if(!empty($data[0])): ?>
            <?php foreach($data[0] as $item): ?>
              <tr>
                <td><?php echo ucwords($item->type); ?></td>
                <td ><?php echo ucwords($item->heading); ?></td>
                <td class="longtext"><?php echo ucwords($item->description); ?></td>
                <td><?php echo ucwords($item->username); ?></td>
                <!-- <td><?php echo ucwords($item->username); ?></td> -->
                <?php if($item->approval){?>
                   <td>Approved</td>
                    <!-- <?php //} else if($item->approved==2){?>
                      <td>Pending</td> -->
              <?php } else{?>
                  <td class="review">
                  <form action="<?php echo BASEURL;?>/admin/assignReviewer" method="POST">
                    <ul class="indicator">
                      <li data-filter="injury" class="active"> 

                      <!--  ****************select dropdown list*********************************** -->                   
                          <select name="doctor" id="d">
                            <?php if(!empty($data[4])): ?>
                            <?php foreach($data[4] as $item): ?> 
                                <option value="<?php echo($item->uuid);?>"><?php echo($item->full_name);?></option>
                            <?php endforeach;?>
                            <?php else: ?>
                              <h1>No data </h1>
                            <?php endif; ?> 
                          </select>
                      <!--  ****************select dropdown list*********************************** -->

                          <input type="hidden" id="postid" name="postid" value="<?php echo($data[0]->id);?>"/> 
                      </li> 
                      <input type="submit" class="button1" value="submit">
                    </ul>
                  </form>   
                  </td>
            <?php }?>
            
                <td><a href="<?php echo BASEURL;?>/admin/articleaction/?id=<?php echo($data[0]->id);?>" onclick='return confirm("Approve this article?");'><input type="button" class="button2" value="Approve"></a></td>
                <td><a href="<?php echo BASEURL;?>/admin/articleaction/?id=<?php echo($data[0]->id);?>" onclick='return confirm("Delete this article?");'><input type="button" class="button" value="Delete"></a></td>
               

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
       <a href="<?php echo BASEURL;?>/admin/articles?id=<?php echo($i)?>" class="active"><?php echo($i)?></a>
     <?php }else{?>
       <a href="<?php echo BASEURL;?>/admin/articles?id=<?php echo($i)?>"><?php echo($i)?></a>
      <?php
      } ?>
    <?php
    }?>

  </div>
          
        </div> 
    </body>
    </html>