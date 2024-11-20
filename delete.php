<?php
$id = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "crud_db") or die();
$query = "DELETE FROM users WHERE id = $id";
$go = mysqli_query($connection,$query);
header("Location: http://localhost/crud/read.php");
?>