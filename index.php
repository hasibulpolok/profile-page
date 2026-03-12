<?php
include "db.php";
$data=mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>

<head>

<title>Profiles</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2 class="mb-4">All Profiles</h2>

<div class="row">

<?php while($r=mysqli_fetch_assoc($data)){ ?>

<div class="col-md-3">

<div class="card p-3">

<img src="uploads/<?php echo $r['photo']; ?>" height="200">

<h5><?php echo $r['name']; ?></h5>

<a href="profile.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">

View Profile

</a>

</div>

</div>

<?php } ?>

</div>

</body>
</html>