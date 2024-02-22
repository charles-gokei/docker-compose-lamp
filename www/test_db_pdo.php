<?php

try {
  new PDO('mysql:host=database:3306','root',$_ENV['MYSQL_ROOT_PASSWORD']);

  echo 'Success: A proper connection to MySQL was made! The docker '.
    'database is great.';

} catch (PDOException $e) {
  echo "Error: Unable to connect to MySQL. Error:\n $e";
}

