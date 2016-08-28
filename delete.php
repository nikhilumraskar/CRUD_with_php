<?php
	require 'config.php';

	mysql_query("delete from content where id = ".$_POST['id']) or die("delete query failture");

	echo "delete success";

?>