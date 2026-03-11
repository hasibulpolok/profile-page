<form method="post">

<input type="password" name="pass" placeholder="Enter Password">

<button>Login</button>

</form>

<?php

include "db.php";

$id=$_GET['id'];

if(isset($_POST['pass'])){

$p=$_POST['pass'];

$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM person WHERE id=$id"));

if($p==$r['edit_pass']){

header("location:edit_profile.php?id=$id");

}else{

echo "Wrong Password";

}

}

?>