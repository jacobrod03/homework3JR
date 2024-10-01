<?php
function get_db_connection () {
  // define
$servername = "hw3mis4013.mysql.database.azure.com"; //
$username = "hw3jjr"; //
$password = "Database3909"; //
$dbname = "hw3mis4013"; 
$port = 3306;

// create the connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

?>
