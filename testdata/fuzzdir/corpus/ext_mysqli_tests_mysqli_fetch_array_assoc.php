<?php
	require('table.inc');

	if (!$res = mysqli_query($link, "SELECT * FROM test ORDER BY id LIMIT 5")) {
		printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}
	print "[002]\n";
	var_dump(mysqli_fetch_array($res, MYSQLI_ASSOC));
	mysqli_free_result($res);

	if (!$res = mysqli_query($link, "SELECT id, label FROM test ORDER BY id LIMIT 5")) {
		printf("[003] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}
	print "[004]\n";
	var_dump(mysqli_fetch_array($res, MYSQLI_ASSOC));
	mysqli_free_result($res);

	mysqli_close($link);
	print "done!";
?>
