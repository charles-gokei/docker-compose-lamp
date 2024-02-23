<?php ini_set('display_errors',0); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>LAMP STACK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
    <header class="hero is-info has-text-centered is-medium">
     <div class="hero-body">
       <h1 class="title">LAMP STACK</h1>
       <h2 class="subtitle">Your local development environment</h2>
     </div>
    </header>
    <section class="section">
      <header class='title'><h3>Environment</h3></header>
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
    <section class="section">
      <header class='title'><h3>Quick links</h3></header>
      <ul>
        <li><a href="/phpinfo.php">phpinfo()</a></li>
        <li><a href="http://localhost:8081">phpMyAdmin</a></li>
        <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
        <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
      </ul>
    </section>
  </body>
</html>
