<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	mysql_connect("localhost","root","root");
	mysql_select_db("Project");
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "password not Match!";
		exit();
	}
	$strSQL = "UPDATE member SET password = '".trim($_POST['txtPassword'])."' 
	,Name = '".trim($_POST['txtName'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	echo "Save Completed!<br>";		
	
	if($_SESSION["Status"] == "Admin")
	{
		echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
	}
	else
	{
		echo "<br> Go to <a href='user_page.php'>User page</a>";
	}
	
	mysql_close();
?>