<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('68.97.240.12', 'HW3JR', $password, 'hw3mis4013'); //could use local host instead of IP?
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
