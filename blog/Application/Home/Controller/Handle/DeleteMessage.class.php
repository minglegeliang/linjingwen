<?php
	include'connectDB.class.php';
	header("content-type:text/html;charset=utf-8");
	$Blog_id = $_POST["Blog_id"];
	$url = "blog.class.php";
	$sql = "DELETE FROM BlogList WHERE Blog_id = $Blog_id ";	
	$res = $dbh->prepare($sql);
  		if($dbh->exec($sql)){
  			echo "删除成功";
  		}else{
  		echo "未删除";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">
</head>
</html> 


?>