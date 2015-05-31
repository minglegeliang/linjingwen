<?php
	include"connectDB.class.php";
	header("content-type:text/html;charset=utf-8");
	$LoginForm_username = $_POST["LoginForm_username"];
	$LoginForm_password = $_POST["LoginForm_password"];
	$url = "../../LoginForm.class.php";
	$sql = "INSERT INTO LoginForm(LoginForm_username,LoginForm_password) VALUES ('$LoginForm_username','$LoginForm_password')";
	$res = $dbh->prepare($sql);
	if($LoginForm_username == "minglegeliang"  &&  $LoginForm_password == "123456")
	{
  		if($dbh->exec($sql))
  		{
  			echo "<script>alert('登陆成功');location.href='../../blogList.class.php';</script>";
  		}
	}
	else
	{
  		echo "<script>alert('你输入的信息不完整');</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="refresh" content="1;url=<?php echo $url; ?>">
</head>
</html> 