<?php ini_set('display_errors',0); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>LAMP STACK</title>
  </head>
  <body>
    <header>
     <h1>LAMP STACK</h1>
     <h2>Your local development environment</h2>
    </header>
    <section>
      <header>Environment</header>
      <ul>
        <li><?= apache_get_version() ?></li>
        <li>PHP <?= phpversion() ?></li>
        <li><?php
          try {
            $link = new mysqli('database','root',$_ENV['MYSQL_ROOT_PASSWORD']);
            echo printf('MySQL Server %s',$link->get_server_info());
          } catch (mysqli_sql_exception $e) {
            echo printf('MySQL connection failed: %s', $e->getMessage());
          }
        ?></li>
      </ul>
    </section>
    <section>
      <header>Quick links</header>
      <ul>
        <li><a href="/phpinfo.php">phpinfo()</a></li>
        <li><a href="http://localhost:8081">phpMyAdmin</a></li>
        <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
        <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
      </ul>
    </section>
  </body>
</html>
