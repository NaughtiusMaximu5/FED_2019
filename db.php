<?php
try {
  $username = 'jkingston3';
  $password = 'Jk1036052';
  $connection = new PDO( 'mysql:host=mysql.yaacotu.com;dbname=fed_db_joe', $username, $password );
}
catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>