<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/admin/article.css") ?>
</head>
<body>
<?php include "sidebar.php"?>
  <?php include "header.php" ?>
    <body>
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
                <th class="url">Attachment</th>
                <th class="name">Author Name</th>
                <th class="btnrow">Approve Article</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Article</td>
                <td >What causes lumbar strain?</td>
                <td class="longtext">What causes lumbar strain?What causes lumbar strain?What causes lumbar strain?</td>
                <td >What causes lumbar strain?</td>
                <td>Akila Perera</td>
                <td><input type="button" class="button" value="Approve"> </td>
              </tr>
              <tr class="active-row">
                <td>Article</td>
                <td >What causes lumbar strain?</td>
                <td class="longtext">What causes lumbar strain?What causes lumbar strain?What causes lumbar strain?</td>
                <td >What causes lumbar strain?</td>
                <td>Akila Perera</td>
                <td><input type="button" class="button" value="Approve"> </td>
              </tr>
              <tr>
                <td>Article</td>
                <td >What causes lumbar strain?</td>
                <td class="longtext">What causes lumbar strain?What causes lumbar strain?What causes lumbar strain?</td>
                <td >What causes lumbar strain?</td>
                <td>Akila Perera</td>
                <td><input type="button" class="button" value="Approve"> </td>
              </tr>
              <tr class="active-row">
                <td>Article</td>
                <td >What causes lumbar strain?</td>
                <td class="longtext">What causes lumbar strain?What causes lumbar strain?What causes lumbar strain?</td>
                <td >What causes lumbar strain?</td>
                <td>Akila Perera</td>
                <td><input type="button" class="button" value="Approve"> </td>
              </tr>
            </tbody>
          </table>
          <br>
          <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
          </div>
          
        </div> 
    </body>
    </html>