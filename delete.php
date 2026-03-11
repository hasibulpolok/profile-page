<?php

include "db.php";

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM person WHERE id=$id");

header("location:index.php");

?>