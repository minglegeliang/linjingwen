<?php
	include'connectDB.class.php';
	$sql = "SELECT * FROM BlogList ORDER BY Blog_id DESC";
	$res = $dbh->query($sql);
	$allMessage = $res->fetchAll(PDO::FETCH_ASSOC);
?>