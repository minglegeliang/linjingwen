<?php
	include'connectDB.class.php';
	$sql = "SELECT ContactForm_username,ContactForm_content,ContactForm_time FROM ContactForm  ORDER BY ContactForm_id DESC";
	$res = $dbh->query($sql);
	$allMessage = $res->fetchAll(PDO::FETCH_ASSOC);
?>