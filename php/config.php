<?php
	$db_con = mysqli_connect("localhost", "zktyvod", "dnlzlfk98!!1");
	$db_select = mysqli_select_db($db_con,"zktyvod");
	mysqli_query($db_con,"set names utf8");

	function db_close()
	{
		$db_close = mysqli_close($db_con);
	}
?>