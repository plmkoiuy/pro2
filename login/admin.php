<?php
session_start();
if($_SESSION['id'] ==''){
	echo "<meta http-equiv='refresh' constant='1;URL=index.php'>";
} elseif ($_SESSION['ststus'] != 1) {
	echo "<meta http-equiv='refresh' constant='1;URL=logout.php'>";
} else{
?>


<h1>Admin</h1>
<a href="logout.php" class="btn btn-primary">Logout</a>
<?php
}
?>
