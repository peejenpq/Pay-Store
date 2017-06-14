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
<table width="743" border="0" align="center">
  <tr>
    <td height="26" colspan="2" align="center">LOGO</td>
  </tr>
  <tr>
    <td height="96" valign="middle"><p>ผู้ใช้ในขณะนี้ คือ <?php echo $_SESSION['m_user']; ?></p>
      <p>&nbsp;</p>
    <p><a href="logout.php">Logout</a></p></td>
    <td width="497"><table width="200" border="1" align="center">
      <tr>
        <td align="center" bgcolor="#CC9999">รหัสสินค้า</td>
        <td align="center" bgcolor="#CC9999">ชื่อสินค้า</td>
        <td align="center" bgcolor="#CC9999">ราคา</td>
      </tr>
       <?php
	   $str = "where 1=1";   //กดค้นหาไปไม่มีอะไรก็โชว์ทั้งหมด
	   $str .= !empty($_GET['textfield2'])?" and p_name like'%{$_GET['textfield2']}%'":"";
  $sql = "select * from detail_p $str";
  $query = mysqli_query($link,$sql) or die(mysql_error());
  $num = mysqli_num_rows($query);
  for($i=1;$i<=$num;$i++){
	  $row = mysqli_fetch_array($query);
	  ?>
      <tr>
        <td align="center"><?php echo $row['p_id'];?>&nbsp;</td>
        <td align="center"><?php echo $row['p_name'];?>&nbsp;</td>
        <td align="center"><?php echo $row['price'];?>&nbsp;</td>
      </tr>
     <?php } ?>
    </table></td>
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