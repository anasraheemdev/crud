<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];

$connection = mysqli_connect("localhost", "root", "", "crud_db") or die();

$insert = "INSERT INTO users (name,phone,	email,age) values ('{$name}','{$phone}','{$email}','{$age}')";
mysqli_query($connection, $insert);

header("Location: http://localhost/crud/");


?>