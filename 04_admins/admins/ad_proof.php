<?php
	$Aktion = $HTTP_POST_VARS['Aktion'];
	$login = $HTTP_POST_VARS['login'];
	$pass = $HTTP_POST_VARS['password'];
	
if($login && $pass){

	include ('../includes/config.inc.php');
	include ('../includes/connect.inc.php');

	
	mysql_select_db($db,$conn);
	$query = "select * from admins where login ='$login' and password ='$pass' ";
	$result = mysql_query($query, $conn);
	$rows = mysql_num_rows($result);
	$arr = mysql_fetch_row($result);
	
if($rows <=0 ){
			print "<meta http-equiv='refresh' content='0;URL=../login.php'>";
			exit;
	}
		else{
			setcookie("login","$login",time()+7200,"");
			setcookie("password","$pass",time()+7200,"");
		}
}
		else{
			echo "<div align='center'><b>forget your Password!!</b></div>";
			echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
			exit;
}
			$kat = $HTTP_GET_VARS['kat'];	
			echo "<meta http-equiv='refresh' content='0;URL=admin.php?kat=pruefung'>";
			exit;

?>