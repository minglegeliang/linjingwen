<?php
	include'connectDB.class.php';
	$sql = "SELECT * FROM LoginForm";
	$res = $dbh->query($sql);
	$allMessage = $res->fetchAll(PDO::FETCH_ASSOC);
?>