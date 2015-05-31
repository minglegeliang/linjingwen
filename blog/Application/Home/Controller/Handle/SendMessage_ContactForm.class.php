<?php
	include"connectDB.class.php";
	header("content-type:text/html;charset=utf-8");
	$ContactForm_username = $_POST["ContactForm_username"];
	$ContactForm_email = $_POST["ContactForm_email"];
	$ContactForm_content = $_POST["ContactForm_content"];
	date_default_timezone_set('PRC');
	$ContactForm_time = date('Y-m-d H:i:s');
	$url = "../../Blog.class.php";
	$sql = "INSERT INTO ContactForm(ContactForm_username,ContactForm_email,ContactForm_content,ContactForm_time) VALUES ('$ContactForm_username','$ContactForm_email','$ContactForm_content','$ContactForm_time')";
	$res = $dbh->prepare($sql);
	if(!empty($ContactForm_email) && !empty($ContactForm_username) && !empty($ContactForm_content))
	{
  		if($dbh->exec($sql))
  		{
  			echo "已留下你的足迹";
  		}
	}else{
  		echo "输入的信息不完整";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">
</head>
</html> 