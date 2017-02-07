<?php
$kat = $HTTP_GET_VARS['kat'];
if ($kat == 'pruefung'){
	echo "<div align='center'>";
	echo "ACA Administrator_page";
	echo "</div>";
	}
	else {
	echo "<meta http-equiv='refresh' content='0;URL=admins/login.php'>";
}
?>
<html lang="th">
<head><title>รายละเอียดของ Login &amp; Password</title>
<meta http-equiv="content-type" content="text/html;charset=X-MAC-THAI">
<link rel="stylesheet" href="../../05_scripts/classic_th.css">
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #999999}
-->
</style>
</head>
<body  onload="clearform()" bgcolor="#7798E6" topmargin="0" marginheight="0">
	<div align=center>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
				<tr>
					<td valign="top" align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="494" bgcolor="#FFFF99" >
							<tr height="10">
								<td width="15" valign="top" align="left" height="10"></td>
								<td width="545" valign="top" align="left" height="10"><img src="../../02_images/one_pix.gif" alt="" height="25" width="545" border="0"></td>
								<td width="15" valign="top" align="left" height="10"></td>
							</tr>
							<tr>
								<td width="15"></td>
								<td width="545"><span class="style1">รายละเอียดของ login และ Password </span></td>
								<td width="15"></td>
							</tr>
							<tr>
							  <td></td>
							  <td>
<?php
include ('../includes/config.inc.php');
include ('../includes/connect.inc.php');
?></td>
							  <td></td>
						  </tr>
							<tr>
							  <td></td>
							  <td><img src="../../02_images/one_pix.gif" alt="" height="10" width="545" border="0"></td>
							  <td></td>
						  </tr>
							<tr>
							  <td></td>
							  <td>
<?php
$thaiweek = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์");
$thaimonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
echo $thaiweek[date("w")], " ที่  ", date("j"),  $thaimonth[date("m")-1], "  พุทธศักราช  ",  date("Y")+543;													
?>
							  
							  </td>
							  <td></td>
						  </tr>
							<tr height="10">
								<td width="15" height="10"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
								<td width="545" height="10"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"><img src="../../02_images/one_pix.gif" alt="" height="10" width="545" border="0"></td>
								<td width="15" height="10"><img src="../../02_images/one_pix.gif" width="1" height="1" border="0"></td>
							</tr>
							<tr>
								<td width="15">
									
								</td>
								<td width="545"></td>
								<td width="15"></td>
							</tr>
							<tr>
							  <td></td>
							  <td><table width="545" border="1" bordercolor="#CCCCCC">
                                <tr align="center" valign="middle" bgcolor="#FFCC00">
                                  <td width="182" scope="row">Login Name</td>
                                  <td width="347">Password</td>
                                </tr>
<?php
$abfrage = "SELECT * FROM admins";
$erg = mysql_query($abfrage);
$anzahl = mysql_num_rows($erg);
$totalpage= round($anzahl/20)+1;

//จะไปหน้าไหน
$page = $HTTP_POST_VARS ['page'];
$current = $HTTP_POST_VARS ['current'];

if (!isset($current)){
	$current=0;
	$page=1;
}
switch($page){
case "First Page":
	$page=1;
	break;
case "Prev Page":
	$page=$current-1<=0?1:$current-1;
	break;
case "Next Page":
	$page=$current+1>=$totalpage?$totalpage:$current+1;
	break;
case "Last Page":
	$page=$totalpage;
	break;
}

$goto=($page-1)*20;
$abfrage2 = "SELECT * FROM admins  limit $goto, 30";
$erg2 = mysql_query($abfrage2);
while($row=mysql_fetch_row($erg2)){
?>
                                <tr align="center" valign="middle" bgcolor="#FFFFFF">
                                  <td width="182" scope="row"><?php echo $row['1'] ?></td>
                                  <td width="347"><?php echo $row['2'] ?></td>
                                </tr>
<?php
}
?>
                              </table></td>
							  <td>&nbsp;</td>
						  </tr>
							<tr>
								<td width="15" valign="top" align="left"></td>
								<td valign="middle" align="left" width="545"><img src="../../02_images/one_pix.gif" alt="" height="10" width="545" border="0"></td>
								<td width="15"></td>
							</tr>
							<tr>
							  <td valign="top" align="left"></td>
							  <td valign="middle" align="left">
หน้าที่ <?php  echo $page,"/", $totalpage ?> <br>
<form action="<?php  getenv("URL"); ?>" method="post">
<input type="hidden" name="current" value="<?php echo $page ?>">
<input type="submit" name="page" value="First Page">
<input type="submit" name="page" value="Prev Page">
<input type="submit" name="page" value="Next Page">
<input type="submit" name="page" value="Last Page">
</form>  
							  </td>
							  <td></td>
						  </tr>
							<tr>
							  <td valign="top" align="left"></td>
							  <td valign="middle" align="left"><img src="../../02_images/one_pix.gif" alt="" height="10" width="545" border="0"></td>
							  <td></td>
						  </tr>
							<tr>
								<td width="15" valign="top" align="left"></td>
								<td valign="middle" align="center" width="545"><a href="admin.php?kat=pruefung" target="_self">กลับไปยัง หน้า Admins </a></td>
								<td width="15"></td>
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