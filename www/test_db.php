<?php

$link = mysqli_connect('database','root','tiger',null);

if($link) {
  echo "Error: Unable to connect to MySql.". PHP_EOL .
       "Debugging errno: ". mysqli_connect_error() . PHP_EOL;
       "Debugging error: ". mysqli_connect_error() . PHP_EOL;
}

echo 'Success: A proper connection to MySql was made! '.
  'The docker database is great'. PHP_EOL;

mysqli_close($link);

