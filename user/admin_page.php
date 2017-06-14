<?php
	session_start();
	if($_SESSION['id_user'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "Admin")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	mysql_connect("localhost","root","root");
	mysql_select_db("Project");
	$strSQL = "SELECT * FROM member WHERE id_user = '".$_SESSION['id_user']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<title></title>
</head>
<body>
  Welcome to Admin Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?php echo $objResult["username"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo $objResult["name"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>