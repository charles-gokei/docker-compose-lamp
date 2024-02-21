<?php

try {
  $link = new mysqli('database','root',$_ENV['MYSQL_ROOT_PASSWORD']);

  echo 'Success: A proper connection to MYSQL was made! '.
    'The docker database is great.'.PHP_EOL;

  $link->close();

} catch (mysqli_sql_exception $e) {
  echo <<<MESSAGE
  Error: Unable to connect to MySQL
  Debugging errno: {$e->getCode()} </br>
  Debugging error: {$e->getMessage()} </br>
  MESSAGE;
  exit;

}

