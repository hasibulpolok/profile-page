<?php

session_start();

if(!isset($_SESSION['admin'])){
header("location:login.php");
}

?>

<h2>Admin Panel</h2>

<a href="add.php">Add Profile</a>