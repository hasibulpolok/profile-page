<?php

include "../db.php";

if(isset($_POST['save'])){

$name=$_POST['name'];
$father=$_POST['father'];
$birth=$_POST['birth'];

$profession=$_POST['profession'];
$profession2=$_POST['profession2'];

$address=$_POST['address'];
$current_address=$_POST['current_address'];

$nid=$_POST['nid'];
$passport=$_POST['passport'];
$license=$_POST['license'];

$phone=$_POST['phone'];
$email=$_POST['email'];

$job=$_POST['job_status'];

$website=$_POST['website'];

$facebook=$_POST['facebook'];
$linkedin=$_POST['linkedin'];
$twitter=$_POST['twitter'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$photo);

mysqli_query($conn,"INSERT INTO users
(name,father_name,birth_date,profession,profession2,address,current_address,nid,passport,license,phone,email,job_status,website,facebook,linkedin,twitter,photo)

VALUES
('$name','$father','$birth','$profession','$profession2','$address','$current_address','$nid','$passport','$license','$phone','$email','$job','$website','$facebook','$linkedin','$twitter','$photo')");

}

?>

<form method="post" enctype="multipart/form-data">

<input name="name" placeholder="Name">

<input name="father" placeholder="Father Name">

<input type="date" name="birth">

<input name="profession" placeholder="Profession">

<input name="profession2" placeholder="Second Profession">

<input name="address" placeholder="Permanent Address">

<input name="current_address" placeholder="Current Address">

<input name="nid" placeholder="NID">

<input name="passport" placeholder="Passport">

<input name="license" placeholder="Driving License">

<input name="phone" placeholder="Phone">

<input name="email" placeholder="Email">

<select name="job_status">
<option value="Job Holder">Job Holder</option>
<option value="Seeking Job">Seeking Job</option>
</select>

<input name="website" placeholder="Website">

<input name="facebook" placeholder="Facebook Link">

<input name="linkedin" placeholder="LinkedIn Link">

<input name="twitter" placeholder="Twitter Link">

<input type="file" name="photo">

<button name="save">Save</button>

</form>