<?php

$connection = mysqli_connect('localhost','root','jhn14300','website');

mysqli_select_db($connection,"website");

$user = $_POST['user'];
$email = $_POST['email'];
$subject=$_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO contact(name,email,subject,comment) VALUES ('$user','$email','$subject','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>