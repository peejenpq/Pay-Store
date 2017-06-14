<table border='0' cellspacing='0' cellpadding='0' class='FormCaptionBorderBg ContentCaption_header'>
<tr>
<td><b>แจ้งการชำระเงิน</b></td>
</tr>
</table>
<table border='0' cellspacing='0' cellpadding='0' class='FormBorder ContentCaption_detail'>
<tr>
<td>

<table border='0' cellspacing='5' cellpadding='0' class='ContentCaption_detail'>
<input type='hidden' name='lang' value='th'>
<tr>
<td class='FormTextLeft'>ชื่อ-สกุล :</td>
<td>
<input type='text' name='name' maxlength='200' size='40' value=""> <font class='FormFieldRequest'>*</font>    </td>
</tr>

<tr>
<td class='FormTextLeft'>อีเมลล์ :</td>
<td>
<input type='text' name='email' maxlength='200' size='40' value="" onKeypress="check_email();"> <font class='FormFieldRequest'>*</font>    </td>
</tr>
<tr>
<td class='FormTextLeft'>เบอร์โทรศัพท์ :</td>
<td>
<input type='text' name='phone' maxlength='200' size='40' value="" onKeypress="check_number();"> <font class='FormFieldRequest'>*</font>    </td>
</tr>
<tr>
<td colspan="2">
<div style='padding-bottom: 5px;'><b><u>ชำระเงินเข้าบัญชี</u></b></div><table border='0' cellspacing='0' cellpadding='0' class='TableLine' width='100%'><tr align='center'><td align='left' id='TableLineCaption' nowrap>&nbsp; </td><td align='left' id='TableLineCaption' nowrap>ธนาคาร</td><td align='left' id='TableLineCaption' nowrap>ประเภทบัญชี</td><td align='left' id='TableLineCaption' nowrap>สาขา</td><td id='TableLineCaption' nowrap>เลขที่บัญชี</td></tr><tr align='center'><td align='left'><input type='radio' name='bank' checked value='scb' ></td> <td align='left'><table border='0' cellspacing='0' cellpadding='0'><tr><td id='TableLineBottomNoLine' style='padding-left: 0px; padding-top: 0px; padding-right: 5px; padding-bottom: 0px;'>ธนาคารไทยพาณิชย์</td></tr></table></td><td align='left'>ออมทรัพย์</td><td align='left'>&nbsp;</td><td>&nbsp;</td>
</tr><tr align='center'><td align='left'><input type='radio' name='bank' checked value='tfb' ></td> <td align='left'><table border='0' cellspacing='0' cellpadding='0'><tr><td id='TableLineBottomNoLine' style='padding-left: 0px; padding-top: 0px; padding-right: 5px; padding-bottom: 0px;'>ธนาคารกสิกรไทย</td></tr></table></td><td align='left'>ออมทรัพย์</td><td align='left'>&nbsp;</td><td>&nbsp;</td>
</tr></table>
<font class='FormFieldRequest'>*</font>    </td>
</tr>
<tr>
<td class='FormTextLeft'>จำนวนเงิน :</td>
<td><input type='text' name='Subtotal' maxlength='200' size='10' value="" > 
<font class='FormFieldRequest'>*</font>    </td>
</tr>
<tr>
<td class='FormTextLeft'>วันที่ชำระเงิน :</td>
<td><input type='text' name='Subtotal' maxlength='200' size='10' value="" >
</td>
</tr>
<tr>
<td class='FormTextLeft'>เวลาโดยประมาณ :</td>
<td>
<select name="ctl0$Main$payh" id="ctl0_Main_payh">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select> : <select name="ctl0$Main$paym" id="ctl0_Main_paym">
<option value="0">0</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="40">40</option>
<option value="50">50</option>
</select>
<font class='FormFieldRequest'></font>    </td>
</tr>
<tr valign='top'>
<td class='FormTextLeft'>หมายเหตุ :</td>
<td nowrap>   
<textarea name='description' id='description' cols='50' rows='6' wrap='VIRTUAL'></textarea> 
<font class='FormFieldRequest'></font>    </td>
</tr>
<tr valign='top'>
<td class='FormTextLeft'>รูป Slip :</td>
<td>
<!-- File -->
<div style='padding-left: 23px; padding-top: 5px;'>
<!--<input type="file" name="file" size='30'>-->
<input id="ctl0_Main_ImageUpload" type="file" name="ctl0$Main$ImageUpload" />
<div class='FormFieldRequest' style='padding-top: 3px;'>(นามสกุลไฟล์ควรเป็น [ jpg , jpeg , gif ] และไฟล์ไม่เกิน 100 Kb)</div>
</div>
<!-- End File -->    </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input type='button' value="OK" title="OK" class='FormButton' onClick = "PassPayment(this.form);"> 
<input type='reset' value="Cancel" title="Cancel" class='FormButton'>    </td>
</tr>
</table>