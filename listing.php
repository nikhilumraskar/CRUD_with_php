<?php
	require 'config.php';

	$result = mysql_query("select * from content");

	$json = array();

	while($r = mysql_fetch_assoc($result)){
		array_push($json, $r);
	}

	echo json_encode($json);
?>