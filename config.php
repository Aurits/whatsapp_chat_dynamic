<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "survey_yoo");

# Connection
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}


error_reporting(E_ALL);
ini_set('display_errors', 1);
