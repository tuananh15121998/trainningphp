<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "signupforms";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 
 if(!$conn) {
   die(mysqli_error($conn));
 }
 
   
?>