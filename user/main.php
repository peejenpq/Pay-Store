<?php
session_start();
include("../conn/connect.php");
include("../conn/function.php");
check($_SESSION['m_user']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="476" border="0" align="center">
  <tr>
    <td height="26" colspan="2" align="center">LOGO</td>
  </tr>
  <tr>
    <td height="96" valign="middle"><p>ผู้ใช้ในขณะนี้ คือ <?php echo $_SESSION['m_user']; ?></p>
      <p>&nbsp;</p>
    <p><a href="logout.php">Logout</a></p></td>
    <td width="230">&nbsp;</td>
  </tr>
  <tr>
    <td width="236" height="118" align="center" valign="top"><p>ค้นหา</p>
      <form id="form1" name="form1" method="get" action="search.php">
        <p>
          <input type="text" name="textfield2" id="textfield2" />
        </p>
        <p>
          <input type="submit" name="button" id="button" value="ค้นหา" />
        </p>
      </form>
    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>