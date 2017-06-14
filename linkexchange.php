<?php
// รับค่าจากฟอร์ม (ไม่ต้องแก้ไข)
$nameuser= $_POST['ppname'];
$emailuser =$_POST['ppemail'];
$textcodeuser =  htmlspecialchars($_POST['pplinkcode']);
$pagelinkuser = $_POST['ppgetpagelink'];

// ค่ากำหนดโดยผู้ใช้ (แก้ไขได้เอง)
$sendtoemail  = "contact@gdicenter.ws"; // แก้ไขเป็นอีเมล์ที่คุณต้องการรับ
$recievename = "Pongsak"; // แก้ไขชื่อผู้รับเป็นชื่อคุณ
$topicemail = "ส่งข้อความขอแลกลิงค์"; // แก้ไขหัวเรื่องที่ต้องการ
$messageuser = "<p>รายละเอียดการข้อแลกลิงค์ดังนี้<br />
  <b>ชื่อ</b> : ".$nameuser."<br>
  <b>Code</b> : ".$textcodeuser."<br />
  <b>หน้าที่จะติดให้</b> : ".$pagelinkuser."<br />
</p>";


if(!empty($nameuser) and !empty($emailuser) and !empty($textcodeuser) and !empty($pagelinkuser)){
// ส่งเมล์เข้า
	$sendto = $recievename. "<".$sendtoemail.">";
	$subject = "=?utf-8?B?".base64_encode("คุณ ".$nameuser." $topicemail")."?=";
	$message =  $messageuser;
	
	$headers = "From:".$nameuser." <".$emailuser."> \n"; // I suggest you try using only \n 
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=utf-8\n";
	$headers .= "Reply-To: ".$nameuser." <".$emailuser."> \n";
	$headers .= "X-Priority: 1\n"; // Urgent message!
	$headers .= "X-MSmail-Priority: High\n";
	$headers .= "X-mailer: guidelinemaster.ws";
	$sendmailcp =  mail( $sendto, $subject, $message, $headers ) or die("Unable to send the Email");

	if($sendmailcp){
	echo "addcommentsuccess";
	die();
	}else{
	echo "addcommentfail";
	die();
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Link Exchange System</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script><!--jQuery-->
    <script type="text/javascript">
	$(function(){
		//คลิ๊กปุ่มส่งความคิดเห็น
		$("#bntcomment").click(function(){
			
			var checkstep1 = false;
			var checkstep2 = false;
			var checkstep3 = false;
			var checkstep4 = false;
			
			var getname = $("#name").val();
			var getemail = $("#email").val();
			var getcodeexchange = $("#codeexchange").val();
			var getpagelink = $("#pagelink").val();
			
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			
			if(getname == ''){
					$("#errorformname").html('ป้อนชื่อก่อน');
				}else{
					$("#errorformname").html('');
					checkstep1 = true;
				}
				
			if(getemail == ''){
					$("#errorformemail").html('ป้อนอีเมล์ก่อน');
				}else if(!emailReg.test(getemail)) {
					$("#errorformemail").html('อีเมล์ไม่ถูกต้อง');
				}else{
					$("#errorformemail").html('');
					checkstep2 = true;
				}
				
			if(getcodeexchange == ''){
					$("#errorformtext").html('ป้อน code html ลิงค์ของคุณก่อน');
				}else{
					$("#errorformtext").html('');
					checkstep3 = true;
				}
				
			if(getpagelink == ''){
					$("#errorformpage").html('ป้อน url หน้าเว็บที่คุณจะติดลิงค์ให้ก่อน');
				}else{
					$("#errorformpage").html('');
					checkstep4 = true;
				}
				
						
			if((checkstep1 == true) && (checkstep2 == true) && (checkstep3 == true) && (checkstep4 == true)){
					$.post("linkexchange.php", { ppname:getname, ppemail:getemail, pplinkcode:getcodeexchange, ppgetpagelink:getpagelink},
						function(data){
							if(data == "addcommentsuccess"){ // บันทึกเรียบร้อยแล้ว
							
								$('#formcomment').html('<span style="color:#009900; font-size:12px"><b>ได้รับข้อมูลเรียบร้อยแล้ว</b></span><br> <span style="font-size:12px">จะตอบกลับภายใน 24 ชั่วโมง ทางอีเมล์ที่คุณให้ไว้ครับ</span><br>');
								
								$("#name").val('');
								$("#email").val('');
								$("#name").focus();
							} // end if
					 }); // end post
				} // end if
			
			return false;
		});
	});
	
</script>

</head>

<body>
<div style="font-size:18px; font-weight:bold; padding-top:10px; padding-bottom:10px">Link Exchange</div>
<div id="formcomment" style=" width:720px;text-align:left;  padding-bottom:5px;">
  <form id="ppcommentlp" name="ppcommentlp" method="post" action="#">
    <table width="420" border="0" cellpadding="10" style="border:solid 1px #CCCCCC;border-collapse:collapse">
    <tr>
      <td><table width="420" height="233" border="0" cellpadding="0" cellspacing="0" style="font-size:12px;">
  
  <tr>
      <td width="78" height="30" style="text-align:right">ชื่อ</td>
      <td width="10">&nbsp;</td>
      <td width="291"><input name="name" type="text" id="name"  size="20" />
      &nbsp;<span style="color:#FF0000; font-size:12px;" id="errorformname">* ต้องใส่ </span></td>
    </tr>
    <tr>
      <td width="78" height="28" style="text-align:right">อีเมล์</td>
      <td>&nbsp;</td>
      <td><input name="email" type="text" id="email" size="30" />
        &nbsp;<span style="color:#FF0000; font-size:12px;" id="errorformemail">* ต้องใส่</span>
        </td>
    </tr>
    <tr>
      <td height="27" valign="top" style="text-align:right">HTML Code</td>
      <td>&nbsp;</td>
      <td valign="middle"><label for="linktype"></label>
        <textarea name="codeexchange" id="codeexchange" rows="5" style="width:320px"></textarea><div style="padding-left:0px; font-size:11px; color:#999; padding-top:3px; padding-bottom:3px"><span style="font-weight:bold; color:#009">โค๊ด html ของคุณ</span>ที่ต้องการให้เราเอาไปติด ตัวอย่าง <br />          
          <span style="color:#090">&lt;a  href=&quot;http://www.job.com&quot; title=&quot;หางาน&quot; target=&quot;_blank&quot;&gt;หางาน&lt;/a&gt;</span></div><div style="color:#FF0000; font-size:11px; padding-bottom:5px" id="errorformtext"></div>
        </td>
    </tr>
    <tr>
      <td height="50" valign="top" style="text-align:right">หน้าติดลิงค์</td>
      <td>&nbsp;</td>
      <td valign="top"><div style="padding-top:5px; display:none" id="urlid">URL: 
        <input name="urltext" type="text" id="urltext" size="40" /><div style="padding-left:35px; font-size:10px; color:#999; padding-top:3px; padding-bottom:3px">ลิงค์เว็บ http://www.google.com</div></div>
        <input name="pagelink" type="text" id="pagelink" style="width:320px" />
        <div style="padding-left:0px; font-size:11px; color:#999; padding-top:3px; padding-bottom:3px">หน้าที่คุณจะ<span style="font-weight:bold; color:#009">ติดลิงค์ให้เรา</span> ตัวอย่าง http://www.yoursite.com</div><div style="color:#FF0000; font-size:11px; padding-bottom:5px" id="errorformpage"></div></td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="button" name="bntcomment" id="bntcomment" value="ส่งข้อมูล" style="font-size:12px" /></td>
    </tr>
</table></td>
    </tr>
  </table><a title="หางาน" href="http://www.job.com" target="_blank"><strong></a>
  </form>
<label></label>
<div style="padding-top:5px;padding-bottom:5px; font-size:12px; color:#666666"></div>
</div>
</body>
</html>