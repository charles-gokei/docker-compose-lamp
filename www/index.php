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
        <?php if(function_exists('apache_get_version')): ?>
          <li><?= apache_get_version() ?></li>
        <?php endif ?>
        <li>PHP <?= phpversion() ?></li>
      </ul>
    </div>
  </body>
</html>

