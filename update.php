<?php
	require 'config.php';

	mysql_query("update content set name = '".$_POST['name']."', addr = '".$_POST['addr']."' where id = ".$_POST['id']) or die("update query failture");

	echo "update success";

?>