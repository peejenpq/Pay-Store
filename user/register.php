<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="register_mem.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1" align="center" >
    <tr>
      <td colspan="2" align="center">สมัครสมาชิก</td>
    </tr>
    <tr>
      <td>ชื่อ</td>
      <td><input type="text" name="name" id="textfield" /></td>
    </tr>
    <tr>
      <td>ชื่อผู้ใช้<br />
      (username)</td>
      <td><input type="text" name="username" id="textfield2" /></td>
    </tr>
    <tr>
      <td><p>รหัสผ่าน</p></td>
      <td><input type="password" name="pass" id="textfield3" /></td>
    </tr>
    <tr>
      <td>ยืนยันรหัสผ่าน</td>
      <td><input type="password" name="repass" id="textfield4" /></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><textarea name="address" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>แนบรูปประจำตัว</td>
      <td><input type="file" name="attach" id="fileField" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="ตกลง" />&nbsp;
      <input type="submit" name="button2" id="button2" value="ยกเลิก" /></td>
    </tr>
  </table>
</form>
</body>
</html>