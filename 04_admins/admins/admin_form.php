<?php
$kat = $HTTP_GET_VARS['kat'];
if ($kat == 'pruefung'){
	echo "<div align='center'>";
	echo "Administrator_page";
	echo "</div>";
	}
	else {
	echo "<meta http-equiv='refresh' content='0;URL=../login.php'>";
}
?>
<html lang="th">
<head><title>เพิ่ม login name &amp; password</title>
<meta http-equiv="content-type" content="text/html;charset=X-MAC-THAI">
<script language="JavaScript">
<!--
function clearform()
{
      document.Form1.login.value = "";
        document.Form1.password.value = "";
      document.Form1.login.focus(); 
}

function check()
{
      var v1 = document.Form1.login.value;
      var v2 = document.Form1.password.value;

       if (v1.length==0)
           {
           alert("กรุณาใส่ชื่อสำหรับล๊อกอินด้วยค่ะ");
           document.Form1.login.focus();           
           return false;
           }
        else if (v2.length==0)
          {
           alert("ลืมพาสเวิร์ดครับ");
           document.Form1.password.focus();           
          return false;
           }
       else
           return true;
}
//-->
</script>
<link rel="stylesheet" href="../../05_scripts/classic_th.css">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>
<body  onload="clearform()"  topmargin="0" marginheight="0"><br><br>
	<div align=center>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
				<tr>
					<td valign="top" align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="494" bgcolor="#7798E6" >
							<tr height="15">
								<td width="15" valign="top" align="left"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="545" valign="top" align="left"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="15" valign="top" align="left"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
							<tr height="10">
								<td width="15" valign="top" align="left" height="10"></td>
								<td width="545" valign="top" align="left" height="10"><img src="../../02_images/one_pix.gif" alt="" height="40" width="545" border="0"></td>
								<td width="15" valign="top" align="left" height="10"></td>
							</tr>
							<tr>
								<td width="15"></td>
								<td width="545" align="center"><span class="style1">เพิ่ม login &amp; password </span></td>
								<td width="15"></td>
							</tr>
							<tr height="10">
								<td width="15" height="10"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="545" height="10"><img src="../../02_images/one_pix.gif" alt="" height="20" width="545" border="0"></td>
								<td width="15" height="10"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
							<tr height="10">
								<td width="15" height="10"></td>
							  <td width="545" height="10">&nbsp;</td>
								<td width="15" height="10"></td>
							</tr>
							<tr height="10">
								<td width="15" height="10"></td>
								<td width="545" height="10"><img src="../../02_images/one_pix.gif" alt="" height="20" width="545" border="0"></td>
								<td width="15" height="10"></td>
							</tr>
							<tr>
								<td width="15">
									
								</td>
								<td width="545">
									<form action="admin_recive.php" name="Form1" enctype="multipart/form-data" method="post" onsubmit="return check()">
										<table border=0 cellpadding=5 width=543>
											<tr>
											  <td width=150 align="right" valign="top">login name </td>
												<td width=350><input type="text" name="login" size="20" border="0"></td>
											</tr>
											<tr>
												<td width=150 align="right" valign="top">password</td>
												<td width=350><input type="text" name="password" size="20" border="0"></td>
											</tr>
											<tr>
												<td width=150 align="right" valign="top"></td>
												<td width=350>&nbsp;</td>
											</tr>
											<tr>
												<td width="150" align="right" valign="top" ><img src="../../02_images/one_pix.gif" alt="" height="20" width="100" border="0"></td >
												<td width="350">
												<input type="Submit"  name="Submit" value="เพิ่ม password">
												<input type="reset" border="0"><input name="Aktion" type="hidden" id="Aktion" value="inserts"></td>
											</tr>
										</table>
									</form>
								</td>
								<td width="15"></td>
							</tr>
							<tr>
								<td width="15" valign="top" align="left"></td>
								<td valign="middle" align="left" width="545"><img src="../../02_images/one_pix.gif" alt="" height="20" width="545" border="0"></td>
								<td width="15"></td>
							</tr>
							<tr>
								<td width="15" valign="top" align="left"></td>
								<td valign="middle" align="center" width="545"><a href="admin.php?kat=pruefung" target="_self">กลับไปยัง Admins </a></td>
								<td width="15"></td>
							</tr>
							<tr>
							  <td valign="top" align="left"></td>
							  <td valign="middle" align="center"><img src="../../02_images/one_pix.gif" alt="" height="20" width="545" border="0"></td>
							  <td></td>
						  </tr>
							<tr>
								<td width="15" valign="top" align="left"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td valign="top" align="left" width="545"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="15"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		</body >
		</html>