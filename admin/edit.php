<?php

include "../db.php";

$id=$_GET['id'];

$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM person WHERE id=$id"));

if(isset($_POST['update'])){

$name=$_POST['name'];

mysqli_query($conn,"UPDATE person SET name='$name' WHERE id=$id");

header("location:dashboard.php");

}

?>

<form method="post">

<input name="name" value="<?php echo $r['name']; ?>">

<button name="update">Update</button>

</form>