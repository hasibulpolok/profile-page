<?php
include "db.php";

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM person WHERE id=$id"));

if(isset($_POST['update'])){

$name = $_POST['name'];
$profession = $_POST['profession'];

mysqli_query($conn,"UPDATE person SET

name='$name',
profession='$profession'

WHERE id=$id");

header("location:view.php?id=$id");

}

?>

<form method="post">

Name
<input type="text" name="name" value="<?php echo $data['name']; ?>">

Profession
<input type="text" name="profession" value="<?php echo $data['profession']; ?>">

<button name="update">Update</button>

</form>