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
        <th class="email">Email</th>
        <th class="btnrow">Disable User</th>
      </tr>
    </thead>
    <tbody>
    <?php if(!empty($data)): ?>

        <?php foreach($data as $item): ?>
            <tr class="">
              <td><?php echo ucwords($item->uuid); ?></td>
              <td><?php echo ucwords($item->role); ?></td>
              <td><?php echo ucwords($item->username); ?></td>  
              <td><?php echo ucwords($item->email); ?></td>
              <td><input type="button" class="button" value="Disable"> </td>
            </tr>
      <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
     
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