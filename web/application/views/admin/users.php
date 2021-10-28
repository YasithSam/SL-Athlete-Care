<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/admin/users.css") ?>
</head>
<body>
    <div class="description">
        All Users
   </div>

    <div class="wrapper">
       <table class="content-table">
        <thead>
          <tr>
            <th class="uuid">UUID</th>
            <th class="roleid">Role ID</th>
            <th class="fullname">Full Name</th>
            <th class="nic">NIC</th>
            <th class="email">Email</th>
            <th class="btnrow">Disable User</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>AID0001</td>
            <td>4</td>
            <td>Akila Perera</td>
            <td>971267456v</td>
            <td>akilaperera@gmail.com</td>
            <td><input type="button" class="button" value="Disable"> </td>
          </tr>
          <tr class="active-row">
            <td>AID0001</td>
            <td>4</td>
            <td>Akila Perera</td>
            <td>971267456v</td>
            <td>akilaperera@gmail.com</td>
            <td><input type="button" class="button" value="Disable"> </td>
          </tr>
          <tr>
            <td>AID0001</td>
            <td>4</td>
            <td>Akila Perera</td>
            <td>971267456v</td>
            <td>akilaperera@gmail.com</td>
            <td><input type="button" class="button" value="Disable"> </td>
          </tr>
          <tr class="active-row">
            <td>AID0001</td>
            <td>4</td>
            <td>Akila Perera</td>
            <td>971267456v</td>
            <td>akilaperera@gmail.com</td>
            <td><input type="button" class="button" value="Disable"> </td>
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