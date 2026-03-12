<?php

include "../db.php";

if(!isset($_GET['id'])){
die("No ID");
}

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id=$id");

header("location:dashboard.php");

?>