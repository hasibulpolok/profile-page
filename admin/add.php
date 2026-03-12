<?php

include "../db.php";

if(isset($_POST['save'])){

$name=$_POST['name'];
$father=$_POST['father'];
$birth=$_POST['birth'];
$profession=$_POST['profession'];
$address=$_POST['address'];
$nid=$_POST['nid'];
$passport=$_POST['passport'];
$license=$_POST['license'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$photo);

mysqli_query($conn,"INSERT INTO person(name,father_name,birth_date,profession,address,nid,passport,license,photo)

VALUES('$name','$father','$birth','$profession','$address','$nid','$passport','$license','$photo')");

}

?>

<form method="post" enctype="multipart/form-data">

<input name="name" placeholder="Name">

<input name="father" placeholder="Father Name">

<input type="date" name="birth">

<input name="profession" placeholder="Profession">

<input name="address" placeholder="Address">

<input name="nid" placeholder="NID">

<input name="passport" placeholder="Passport">

<input name="license" placeholder="Driving License">

<input type="file" name="photo">

<button name="save">Save</button>

</form>