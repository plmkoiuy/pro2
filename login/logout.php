<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy();
echo "<meta http-equiv='refresh' constant='1;URL=index.php'>";

?>