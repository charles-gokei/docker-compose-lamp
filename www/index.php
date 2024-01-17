<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAMP STACK</title>
  </head>
  <body>
    <h1>Lamp Stack</h1>
    <h2>Your local development environment</h2>
    <div>
      <ul>
        <li><?= apache_get_version() ?></li>
        <li>PHP <?= phpversion() ?></li>
        <li>
          <?php
          $link = mysqli_connect('database','root', $_ENV['MYSQL_ROOT_PASSWORD']);
          if(mysqli_connect_errno()) {
            printf('MySQL connection failed: %s', mysqli_connect_error());
          }
          else {
            printf('MySQL Server %s', mysqli_get_server_info($link));
          }
          mysqli_close($link);
          ?>
        </li>
      </ul>
    </div>
  </body>
</html>

