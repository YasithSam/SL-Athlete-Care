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
        <th class="btnrow">Approve</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
        <td><input type="button" class="button" value="Approve"> </td>
      </tr>
      <tr class="active-row">
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
        <td><input type="button" class="button" value="Approve"> </td>
      </tr>
      <tr>
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
        <td><input type="button" class="button" value="Approve"> </td>
      </tr>
      <tr class="active-row">
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
        <td><input type="button" class="button" value="Approve"> </td>
      </tr>
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
        <td><input type="button" class="button" value="Approve"> </td>
      </tr>
      <tr class="active-row">
        <td>Article Title</td>
        <td>Enjoyed reading the article above , really explains everything in detail. Thanks for the information.</td>
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
    <a href="#">&raquo;</a>
  </div>
</div> 
</div>
</body>
</html>