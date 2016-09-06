<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'simplonco');
   define('DB_DATABASE', 'ATS_SPC');
  $con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_DATABASE,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>
