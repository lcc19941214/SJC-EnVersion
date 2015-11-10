<?php $siteurl = "http://localhost/SJC/"; ?>

<?php 
	$server = "localhost:3306";
	$user = "test";
	$pwd = "941214";

	@ $lnk = mysql_connect($server, $user, $pwd)
		or die("连接失败！".mysql_error());
	@ $db_selected = mysql_select_db("test", $lnk) or die("database selected error!");
	@ mysql_query("set names 'utf8'");
 ?>	