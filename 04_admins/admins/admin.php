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
<head><title>ClassicProject DB_Adminstrator</title>
		<meta http-equiv="content-type" content="text/html;charset=X-MAC-THAI">
		<link href="../../05_scripts/classic_th.css" rel="stylesheet" media="screen">
	    <style type="text/css">
<!--
.style1 {color: #0033FF}
-->
        </style>
</head>
<body bgcolor="#7798E6">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top">
					<table width="640" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="center" valign="top">
								<table width="554" border="0" cellspacing="2" cellpadding="4">
									<tr>
										<td colspan="4" align="center" valign="middle" width="542"><br>
										  Administrator<br>
											<b><font color="white">Classic Project , Bangkok, Thailand</font><font color="#0066ff"><br>
													<br>
										  </font></b></td>
									</tr>
									<tr>
										<td align="left" valign="middle" bgcolor="#ffffcc" width="542">��¡�õ��ҧ</td>
										<td align="center" valign="middle" bgcolor="#ffffcc" width="128">��������´�ͧ���ҧ</td>
										<td align="center" valign="middle" bgcolor="#ffffcc" width="128">��䢵��ҧ</td>
										<td align="center" valign="middle" bgcolor="#ffffcc" width="128">������¡��</td>
									</tr>
									<tr>
										<td width="542" align="left" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="5" width="128" border="0"></td>
										<td width="128" align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="5" width="128" border="0"></td>
										<td width="128" align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="5" width="128" border="0"></td>
										<td width="128" align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="5" width="128" border="0"></td>
									</tr>
									<tr bgcolor="#FFFFFF">
										<td width="542" align="right" valign="middle">���ǻ�Ъ�����ѹ��<br>
											NEWS<br>											</td>
									  <td width="128" align="center" valign="middle">xxxxx</td>
										<td width="128" align="center" valign="middle" bgcolor="#FFFFFF"><a href="news_admin.php?kat=pruefung" target="_self">�������ź<br>
												����</a></td>
										<td width="128" align="center" valign="middle" bgcolor="#FFFFFF"><a href="news_form.php?kat=pruefung" target="_self">������¡�â���</a></td>
									</tr>
									<tr bgcolor="#CCCCCC">
									  <td align="right" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
								  </tr>
									<tr>
									  <td align="right" valign="middle" bgcolor="#FFFFFF" width="542">Webboard<br>											</td>
										<td align="center" valign="middle" bgcolor="white" width="128">xxxxx</td>
										<td align="center" valign="middle" bgcolor="#FFFFFF" width="128"><a href="webboard_admin.php?kat=pruefung" target="_self">�������ź<br> 
									  ��¡�âͧ��纺���</a></td>
										<td align="center" valign="middle" bgcolor="white" width="128">xxxxx</td>
									</tr>
									<tr bgcolor="#CCCCCC">
									  <td align="right" valign="top"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
								  </tr>
									<tr bgcolor="#E9F2FC">
									  <td align="right" valign="middle">Products</td>
									  <td align="center" valign="middle">xxxxx</td>
									  <td align="center" valign="middle"><a href="product_admin.php?kat=pruefung" target="_self">�������ź<br>
��¡���Թ���</a></td>
									  <td align="center" valign="middle"><a href="product_form.php?kat=pruefung" target="_self">������¡���Թ���</a></td>
								  </tr>
									<tr bgcolor="#E9F2FC">
									  <td align="right" valign="middle">�١���</td>
									  <td align="center" valign="middle" bgcolor="#E9F2FC"><a href="member_list.php?kat=pruefung" target="_self">��������´<br>
�ͧ���ҧ</a></td>
									  <td align="center" valign="middle">xxxxx</td>
									  <td align="center" valign="middle">xxxxx</td>
								  </tr>
									<tr bgcolor="#CCCCCC">
									  <td align="right" valign="top"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle" bgcolor="#CCCCCC"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									  <td align="center" valign="middle"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
								  </tr>
									<tr bgcolor="#FFFFFF">
									  <td align="right" valign="top" width="542">admins</td>
									  <td align="center" valign="middle" width="128"><a href="admin_list.php?kat=pruefung" target="_self">��������´<br> 
								      �ͧ���ҧ</a></td>
									  <td align="center" valign="middle" width="128"><a href="admin_correct.php?kat=pruefung" target="_self">�������ź<br> 
									    ��ª���</a></td>
										<td align="center" valign="middle" width="128"><a href="admin_form.php?kat=pruefung" target="_self">������¡��admins</a></td>
									</tr>
									<tr>
										<td align="right" valign="middle" bgcolor="#4169e1" width="542"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
										<td align="center" valign="middle" bgcolor="#4169e1" width="128"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
										<td align="center" valign="middle" bgcolor="#4169e1" width="128"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
										<td align="center" valign="middle" bgcolor="#4169e1" width="128"><img src="../../02_images/one_pix.gif" alt="" height="10" width="128" border="0"></td>
									</tr>
									<tr bgcolor="#FFFF66">
										<td width="542" align="left" valign="middle"></td>
										<td width="128" align="center" valign="middle"></td>
										<td width="128" align="center" valign="middle"></td>
										<td width="128" align="center" valign="middle"></td>
									</tr>
									<tr align="center">
										<td colspan="4" valign="middle" width="542"> &lt;&lt; <a href="../../index.php" target="_self">log out </a>&gt;&gt;</td>
								  </tr>
							  </table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>