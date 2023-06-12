<?php

$connection = mysqli_connect('localhost','root','jhn14300','website');

mysqli_select_db($connection,"website");

$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "INSERT INTO Comment(user,email,comment) VALUES ('$user','$email','$comment') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>