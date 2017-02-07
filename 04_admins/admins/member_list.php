<link href="../05_scripts/laox_th.css" rel="stylesheet" media="screen">
<?php
$aktion = $HTTP_GET_VARS['aktion'];
$kat = $HTTP_GET_VARS['kat'];

if ($kat == 'pruefung'){
	echo "<div align='center'>";
	echo "Administrator_page";
	echo "</div>";
	}
	else {
	echo "<meta http-equiv='refresh' content='0;URL=admins/login.php'>";
}
?>
<html lang="th">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {
	color: #000099;
	font-weight: bold;
}
-->
</style>
<head><title>Member Lists</title>
<meta http-equiv="content-type" content="text/html;charset=X-MAC-THAI">
<link rel="stylesheet" href="../../05_scripts/classic_th.css">
</head>
<body  onload="clearform()" bgcolor="#0066FF" topmargin="0" marginheight="0">
	<div align=center>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
				<tr>
					<td height="465" align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" >
							<tr height="15">
								<td width="15" valign="top" align="left"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="900" valign="top" align="left"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="15" valign="top" align="left"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
							<tr height="10">
								<td width="15" valign="top" align="left" height="10"></td>
								<td width="900" valign="top" align="left" height="10"><img src="../../02_images/one_pix.gif" alt="" height="10" width="640" border="0"></td>
								<td width="15" valign="top" align="left" height="10"></td>
							</tr>
							<tr>
							  <td></td>
							  <td width="900"><span class="style3">รายละเอียดของสมาชิก Classic Project </span></td>
							  <td></td>
						  </tr>
							<tr>
							  <td></td>
							  <td width="900">
<?php
include ('../includes/config.inc.php');
include ('../includes/connect.inc.php');
?></td>
							  <td></td>
						  </tr>
							<tr>
							  <td></td>
							  <td width="900"><img src="../../02_images/one_pix.gif" alt="" height="10" width="640" border="0"></td>
							  <td></td>
						  </tr>
							<tr>
							  <td></td>
							  <td width="900">
<?php
$thaiweek = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์");
$thaimonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
echo $thaiweek[date("w")], " ที่  ", date("j"),  $thaimonth[date("m")-1], "  พุทธศักราช  ",  date("Y")+543;													
?>
							  
							  </td>
							  <td></td>
						  </tr>
							<tr height="10">
								<td width="15" height="10"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="900" height="10"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"><img src="../../02_images/one_pix.gif" alt="" height="10" width="640" border="0"></td>
								<td width="15" height="10"><img src="../01_images/05_graphics/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
							<tr>
								<td width="15">
									
								</td>
								<td width="900"></td>
								<td width="15"></td>
							</tr>
							<tr>
							  <td></td>
							  <td width="900"><table width="900" border="0" cellpadding="0" cellspacing="2" bordercolor="#CCCCCC">
                                <tr align="left" valign="middle" bgcolor="#0033CC">
                                  <td width="43" scope="row"><span class="style2">ลำดับที่</span></td>
                                  <td width="200" align="center"><span class="style2">ชื่อ-สกุล</span></td>
                                  <td width="200" align="center"><span class="style2">ที่อยู่</span></td>
                                  <td width="100" align="center"><span class="style2">tel</span></td>
                           