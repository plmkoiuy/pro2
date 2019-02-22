<?php
//$Myconnect = mysql_connect("http://localhost/phpmyadmin/server_databases.php?server=1");
//mysql_select_db("member",$Myconnect);
//mysql_query($Myconnect,"SET NAME utf8");

# FileName="Connection_php_mysqli.htm"
# Type="MYSQLI"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "user";
$MyConnect = mysqli_connect($hostname_MyConnect,$database_MyConnect) 
or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_query($MyConnect, "Set Names UTF8");




?>