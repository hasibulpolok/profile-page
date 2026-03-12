<?php

session_start();

if(isset($_POST['login'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user=="admin" && $pass=="1234"){

$_SESSION['admin']=true;

header("location:dashboard.php");

}else{

echo "Login Failed";

}

}

?>

<form method="post">

<input name="user" placeholder="Username">

<input name="pass" type="password" placeholder="Password">

<button name="login">Login</button>

</form>