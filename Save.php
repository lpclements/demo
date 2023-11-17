<?php
$servername = "localhost";
$database = "u817352053_Mess";
$username = "u817352053_Grace";
$password = "Z+^0@Ehhx3H";
// Create connection
$db = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$db) {
    die("Connection to database backend failed. Please contact the administrator");
}
$Places = $_REQUEST['places'];
$Meals = $_REQUEST['meals'];

$sql = "INSERT INTO Dinner (places, MealType) VALUES ($Places, '$Meals')";

if (mysqli_query($db, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
?>