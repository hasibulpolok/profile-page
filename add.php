<?php

include "db.php";

$name=$_POST['name'];
$father=$_POST['father_name'];
$birth=$_POST['birth_date'];
$profession=$_POST['profession'];
$address=$_POST['address'];
$nid=$_POST['nid'];
$passport=$_POST['passport'];
$license=$_POST['license'];
$pass=$_POST['edit_pass'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$photo);

mysqli_query($conn,"INSERT INTO person(name,father_name,birth_date,profession,address,nid,passport,license,photo,edit_pass)

VALUES('$name','$father','$birth','$profession','$address','$nid','$passport','$license','$photo','$pass')");

header("location:index.php");

?>