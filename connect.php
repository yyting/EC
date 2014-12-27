<?php
	require_once "./config.php";
	$conn=mysql_connect($DBServer,$DBacc,$DBpwd) or die("Can not connect to mysql");
	$db=mysql_select_db("d10116238");
	
?>