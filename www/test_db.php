<?php

$link = mysqli_connect('database','root','docker',null);

if(!$link) {
  echo <<<MESSAGE
  Error: Unable to connect to MySQL
  Debugging errno: mysqli_connect_errno()
  Debugging error: mysqli_connect_error()
  MESSAGE;
  exit;
}

echo "Success: A proper connection to MYSQL was made! The docker database is great.".PHP_EOL;

mysqli_close($link);

