<?php
	include"connectDB.class.php";
	header("content-type:text/html;charset=utf-8");
	$Blog_header = $_POST["Blog_header"];
	$Blog_content = $_POST["Blog_content"];
	date_default_timezone_set('PRC');
	$Blog_time = date('Y-m-d H:i:s');

	$url = "../../BlogList.class.php";
	$sql = "INSERT INTO BlogList(Blog_header,Blog_content,Blog_time) VALUES ('$Blog_header','$Blog_content','$Blog_time')";
	$res = $dbh->prepare($sql);
	if(!empty($Blog_content) && !empty($Blog_header))
	{
  		if($dbh->exec($sql))
  		{
  			echo "发表成功";
  		}
	}else{
  		echo "你输入的信息不完整";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">
</head>
</html> 