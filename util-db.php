<?php
function get_db_connection(){
    // Create connection
    $servername = "hw3mis4013.mysql.database.azure.com";
    $username = "hw3jjr";
    $password = "Database3909";
    $dbname = "hw3db";
    $port = 3306;
    
    
$conn = new mysqli($servername, $username, $password, $dbname, $port); //could use local host instead of IP?
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
