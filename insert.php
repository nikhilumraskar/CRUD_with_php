<?php
	require 'config.php';

	mysql_query("insert into content (name, addr) VALUES('".$_POST['name']."', '".$_POST['addr']."')") or die("insert query failture");

	echo "insert success";

?>