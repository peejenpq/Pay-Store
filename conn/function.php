<?php
function check($ses_user){
	if(!isset($ses_user))
	esit("<script>alert();('กรุณาเข้าสู่ระบบ');window.location='index.php';</script>");
}
?>