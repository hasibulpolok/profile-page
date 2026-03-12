<?php

include "../db.php";

if(isset($_POST['save'])){

$name=$_POST['name'];
$father=$_POST['father'];
$birth=$_POST['birth'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$photo);

mysqli_query($conn,"INSERT INTO users(name,father_name,birth_date,photo)

VALUES('$name','$father','$birth','$photo')");

}

?>

<form method="post" enctype="multipart/form-data">

<input name="name" placeholder="Name">

<input name="father" placeholder="Father Name">

<input type="date" name="birth">

<input type="file" name="photo">

<button name="save">Save</button>

</form>