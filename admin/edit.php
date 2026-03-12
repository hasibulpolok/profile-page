<?php

include "../db.php";

if(!isset($_GET['id'])){
die("No ID Found");
}

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$r = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

$name=$_POST['name'];
$father=$_POST['father'];
$profession=$_POST['profession'];
$profession2=$_POST['profession2'];

$address=$_POST['address'];
$current_address=$_POST['current_address'];

$phone=$_POST['phone'];
$email=$_POST['email'];

$nid=$_POST['nid'];
$passport=$_POST['passport'];
$license=$_POST['license'];

$job=$_POST['job_status'];
$website=$_POST['website'];

$facebook=$_POST['facebook'];
$linkedin=$_POST['linkedin'];
$twitter=$_POST['twitter'];

mysqli_query($conn,"UPDATE users SET

name='$name',
father_name='$father',
profession='$profession',
profession2='$profession2',
address='$address',
current_address='$current_address',
phone='$phone',
email='$email',
nid='$nid',
passport='$passport',
license='$license',
job_status='$job',
website='$website',
facebook='$facebook',
linkedin='$linkedin',
twitter='$twitter'

WHERE id=$id");

header("location:dashboard.php");

}

?>
<form method="post">

<input name="name" value="<?php echo $r['name']; ?>" placeholder="Name">

<input name="father" value="<?php echo $r['father_name']; ?>" placeholder="Father">

<input name="profession" value="<?php echo $r['profession']; ?>">

<input name="profession2" value="<?php echo $r['profession2']; ?>">

<input name="address" value="<?php echo $r['address']; ?>">

<input name="current_address" value="<?php echo $r['current_address']; ?>">

<input name="phone" value="<?php echo $r['phone']; ?>">

<input name="email" value="<?php echo $r['email']; ?>">

<input name="nid" value="<?php echo $r['nid']; ?>">

<input name="passport" value="<?php echo $r['passport']; ?>">

<input name="license" value="<?php echo $r['license']; ?>">

<input name="job_status" value="<?php echo $r['job_status']; ?>">

<input name="website" value="<?php echo $r['website']; ?>">

<input name="facebook" value="<?php echo $r['facebook']; ?>">

<input name="linkedin" value="<?php echo $r['linkedin']; ?>">

<input name="twitter" value="<?php echo $r['twitter']; ?>">

<button name="update">Update</button>

</form>