<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "cseasy");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "something is wrong";
    
}
?>