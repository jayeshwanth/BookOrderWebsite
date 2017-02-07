<?php
$kat = $HTTP_GET_VARS['kat'];
if ($kat == 'pruefung'){
	echo "<div align='center'>";
	echo "Administrator_page";
	echo "</div>";
	}
	else {
	echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=X-MAC-THAI">
<title>แก้ไขหรือลบ ข้อมูลของตาราง Admins lists</title>
</head>

<body bgcolor="#7798E6">
<div align="center">
<table width="630">
  <tr>
    <td align="center" valign="top"><table width="640" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="10"></td>
        <td width="620"><img src="../../02_images/one_pix.gif" alt="" height="15" width="620" border="0"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="620">
<?php
include ('../includes/config.inc.php');
include ('../includes/connect.inc.php');
?>
        </td>
        <td width="10"></td>
      </tr>
      <tr>
        <td width="10" height="50"></td>
        <td width="620"><b>ตารางแสดงรายการของ Admins Lists Table</b></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td width="10"></td>
        <td width="620">
		<table width="100%" border="1" cellspacing="0" cellpadding="4"  bgcolor="#EBE1FF">
          <tr align="center" valign="middle">
            <td>ลำดับที่</td>
            <td>login name</td>
			<td>password</td>
            <td>แก้ไขข้อมูล</td>
            <td>ลบข้อมูล</td>
          </tr>
<?php
	$abfrage = "select * from admins";
	$erg = mysql_query ($abfrage);
	$anzahl = mysql_num_rows($erg);
	for ($i = 0; $i < $anzahl; $i++){
		$id_login = mysql_result($erg, $i, "id_login");
		$login = mysql_result($erg, $i, "login");
		$password = mysql_result($erg, $i, "password");
?>

          <tr align="center" valign="middle">
<?php
print<<<KOPF
<form name="form1" method="post" action="admin_recive.php">
            <td>$id_login</td>
            <td><input name="login" value="$login"></td>
			<td><input name="password" value="$password"></td>
            <td>

<input type="submit" name="Submit" value="ปรับปรุงแก้ไข">
<input name="Aktion" type="hidden" id="Aktion" value="editieren">
<input name="id_login" type="hidden" id="id_login" value="$id_login">
</form>
			</td>
            <td>
<form name="form2" method="post" action="admin_recive.php">
<input type="submit" name="Submit2" value="ลบทิ้ง">
<input name="Aktion" type="hidden" id="Aktion" value="loeschen">
 <input name="id_login" type="hidden" id="id_login" value="$id_login">
</form>
KOPF;
?>
		  </td>
          </tr>
<?php
}
?>
        </table>
		</td>
        <td width="10"></td>
      </tr>      
      <tr>
        <td width="10" height="50"></td>
        <td width="620"><a href="admin.php?kat=pruefung">กลับไปยังหน้า Admins</a></td>
        <td width="10"></td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</div>
</body>
</html>
