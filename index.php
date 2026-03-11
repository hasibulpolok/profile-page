<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>Profile System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h2>Add Person</h2>

<form action="add.php" method="post" enctype="multipart/form-data">

<input class="form-control mb-2" name="name" placeholder="Name">

<input class="form-control mb-2" name="father_name" placeholder="Father Name">

<input class="form-control mb-2" type="date" name="birth_date">

<input class="form-control mb-2" name="profession" placeholder="Profession">

<input class="form-control mb-2" name="address" placeholder="Address">

<input class="form-control mb-2" name="nid" placeholder="NID">

<input class="form-control mb-2" name="passport" placeholder="Passport">

<input class="form-control mb-2" name="license" placeholder="Driving License">

<input class="form-control mb-2" type="file" name="photo">

<input class="form-control mb-2" type="password" name="edit_pass" placeholder="Edit Password">

<button class="btn btn-primary">Save</button>

</form>

<hr>

<h2>Profiles</h2>

<?php

$q = mysqli_query($conn,"SELECT * FROM person");

while($row = mysqli_fetch_assoc($q)){

echo "

<div class='card p-3 mb-3'>

<img src='uploads/$row[photo]' width='120'>

<h4>$row[name]</h4>

<a class='btn btn-info' href='view.php?id=$row[id]'>View</a>

<a class='btn btn-warning' href='edit_login.php?id=$row[id]'>Edit</a>

<a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>

</div>

";

}

?>

</body>
</html>