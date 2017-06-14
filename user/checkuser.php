<?
session_start();
include("../conn/connect.php"); //เป็นการดึงไฟล์ชุดนี้มาทำงาน
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
$user = $_POST['username'];
$pass = base64_encode($_POST['pass']);
$sql = "select * from user where username = '$user' and password = '$pass'";
$query = mysqli_query($link,$sql) or die (mysql_error());
$num = mysqli_num_rows($query);
if($num==0){
	exit ("<script>alert('กรุณาตรวจสอบชื่อผู้ใช้และรหัสผ่าน');history.back();</script>");
}
else {
	$_SESSION['m_user'] = $user;
	exit("<script>alert('ยินดีต้อนรับเข้าสู่ระบบ');window.location = 'main.php';</script>");	
}
?>
</body>
</html>