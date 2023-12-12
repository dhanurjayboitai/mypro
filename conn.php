<?php
echo "Welcome to the stage where we are ready to connect to a database <br>";
//create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);
echo "Connected to database";
//create a db
$sql = "CREATE DATABASE dbdhana";
 if (mysqli_query($conn, $sql)){
    echo "A new database called mycompany is successfully created!";
 }
else{
    echo "Error:" . mysqli_error($conn); 
}
mysqli_close($conn);
?>