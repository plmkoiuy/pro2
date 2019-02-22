<?php
session_start();
if($_SESSION['id'] ==''){
	echo "<meta http-equiv='refresh' constant='1;URL=index.php'>";
} elseif ($_SESSION['ststus'] != 2) {
	echo "<meta http-equiv='refresh' constant='1;URL=logout.php'>";
} else{
?>


<h1>user</h1>
<a href="logout.php" class="btn btn-primary">Logout</a>
<?php


}
?>


