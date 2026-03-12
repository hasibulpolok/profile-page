<?php

include "db.php";

$id=$_GET['id'];

$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id=$id"));

$birth=new DateTime($r['birth_date']);
$today=new DateTime();
$age=$today->diff($birth);

?>

<!DOCTYPE html>
<html>

<head>

<title><?php echo $r['name']; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<div class="card p-4 text-center">

<img src="uploads/<?php echo $r['photo']; ?>" width="200">

<h2><?php echo $r['name']; ?></h2>

<p>Father: <?php echo $r['father_name']; ?></p>

<p>Profession: <?php echo $r['profession']; ?></p>
<p>Profession 2: <?php echo $r['profession2']; ?></p>

<p>Phone: <?php echo $r['phone']; ?></p>

<p>Email: <?php echo $r['email']; ?></p>

<p>Job Status: <?php echo $r['job_status']; ?></p>

<p>Website: <?php echo $r['website']; ?></p>

<a href="<?php echo $r['facebook']; ?>">Facebook</a>

<p>

Age:

<?php echo $age->y ?> Years
<?php echo $age->m ?> Months
<?php echo $age->d ?> Days

</p>

</div>

</body>
</html>