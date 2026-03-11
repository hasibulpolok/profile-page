<?php

include "db.php";

$id=$_GET['id'];

$r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM person WHERE id=$id"));

$birth = new DateTime($r['birth_date']);
$today = new DateTime();
$age = $today->diff($birth);

?>

<h2><?php echo $r['name']; ?></h2>

<img src="uploads/<?php echo $r['photo']; ?>" width="200">

<p>Father: <?php echo $r['father_name']; ?></p>

<p>Profession: <?php echo $r['profession']; ?></p>

<p>Address: <?php echo $r['address']; ?></p>

<p>NID: <?php echo $r['nid']; ?></p>

<p>Passport: <?php echo $r['passport']; ?></p>

<p>License: <?php echo $r['license']; ?></p>

<p>

Age: <?php echo $age->y; ?> Years
<?php echo $age->m; ?> Months
<?php echo $age->d; ?> Days

</p>