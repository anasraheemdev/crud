<?php
$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$age = $_POST["age"];

$connection = mysqli_connect("localhost", "root", "", "crud_db") or die() ;

$query = "UPDATE users SET name = '{$name}', age = {$age}, email = '{$email}', phone = '{$phone}'where id = {$id} " or die();

$update = mysqli_query($connection,$query);

header("Location: http://localhost/crud/read.php")




?>