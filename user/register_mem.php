<?php
	include("../conn/connect.php");
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$name = $_POST['name'];
$user = $_POST['username'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$address = $_POST['address'];
//print_r($attach);
if($pass<>$repass){
	exit("<script>alert('Password and Re=Password are not match');history.back();</script>");
}
$attach = $_FILES['attach']; //print_r($attach);
if($attach['error']=='0')
{
 $fileinfo = pathinfo($attach['name']);
 $filetype = strtolower($fileinfo['extension']);
 $type = array('gif','jpg','png','jpeg');

 if(in_array($filetype,$type))
 //if($filetype =='gif'||$filetype =='jpg'||$filetype=='jpeg'||$filetype=='png')
 {
	 $file = time().".$filetype";
	 move_uploaded_file($attach['tmp_name'],"../ig/$file");	
}
else{
	exit("<script>alert('Please check your file');history.back();</script>");
}
}
$sqlc = "select * from user where username = '$user'";
$queryc = mysqli_query($link,$sqlc) or die("error=$sqlc <hr>".mysql_error());
$numc = mysqli_num_rows($queryc);
if($numc==0){
	$pass = base64_encode($pass);
	$sqli = "insert into user values(null,'$name','$user','$pass','address','$file',now())";
	mysqli_query($link,$sqli) or die ("error=sqli <hr>".mysql_error());
	//$queryi = mysqli_query($link,$sqli);
 exit("<script>alert('สมัครสมาชิกสำเร็จ');window.location='index.php';</script>");	

}
 else{
	exit("<script>alert('กรุณาตั้งชื่อผู้ใช้ใหม่');history.back();</script>");
}

?>
</body>
</html>