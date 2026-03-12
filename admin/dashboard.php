<?php

session_start();

if(!isset($_SESSION['admin'])){
header("location:login.php");
}

include "../db.php";

$data=mysqli_query($conn,"SELECT * FROM users");

?>

<h2>Admin Dashboard</h2>

<a href="add.php">Add Profile</a>

<table border="1">

<tr>

<th>Name</th>
<th>Action</th>

</tr>

<?php while($r=mysqli_fetch_assoc($data)){ ?>

<tr>

<td><?php echo $r['name']; ?></td>

<td>

<a href="edit.php?id=<?php echo $r['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>