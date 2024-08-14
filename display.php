<?php 
$servername = "localhost";
 $username = "root"; 
 $password = ""; 
 $dbname = "robot_control";

 $conn = new mysqli($servername, $username, $password, $dbname); 
 if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }

$sql = "SELECT direction FROM movements ORDER BY id DESC LIMIT 1";
 $result = $conn->query($sql);

if ($result->num_rows > 0) { 
    $row = $result->fetch_assoc();
     echo "Last Command: " . $row["direction"]; 
     } else {
         echo "No commands found."; 
         }
     $conn->close(); 
     
?>
