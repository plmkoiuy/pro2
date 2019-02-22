<?php
session_start();
include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];

if($username == ''){
	echo "Please username";
} else if($password == '') {
	echo "Please password";

} else {
	$sql = mysqli_query($MyConnect,"SELECT * FROM member 
WHERE username = '$username' AND password = '$password' ");
	$num = mysqli_num_rows($sql);
	if($num <=0){
		echo "<meta http-equiv='refresh' constant='1;URL=index.php'>";
	}else {
		while ($user <= mysqli_fetch_array($sql)) {
			//Admin
			if ($username['ststus'] == 1) 
			{
				$_SESSION['id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = $user[1];
				echo "<meta http-equiv='refresh' constant='1;URL=admin.php'>";
				//User
			}  else if ($username['status'] ==2) {
				$_SESSION['id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = $user[2];
				echo "<meta http-equiv='refresh' constant='1;URL=user.php'>";
			
			}
		}
	}
}
?>