<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port); //could use local host instead of IP?
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
