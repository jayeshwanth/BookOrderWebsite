<?php

include ('../includes/config.inc.php');
include ('../includes/connect.inc.php');

// Formulardaten ?bernehmen
$login = $HTTP_POST_VARS['login'];
$password = $HTTP_POST_VARS['password'];
$id_login = $HTTP_POST_VARS['id_login'];
$Aktion = $HTTP_POST_VARS['Aktion'];
//$nachricht = $HTTP_POST_VARS['nachricht'];
//echo "$NID<br>$Aktion<p>";
// Datenbankverbindung ?ffnen

/*
$verb = mysql_connect("localhost","root","");
if(!$verb){
	echo "Verbindung fehgeschlagen<p>";
}

$db = mysql_select_db("db_chaomai");

/*  Wenn editieren few?nscht
	Abfragen ausf?hren, Datensatz mit 
	gew?nschter ID holen und in einem
	Formular anzeigen
*/

if ($Aktion == 'inserts'){
	$abfrage = " insert into admins (login, password) values ('$login', '$password' )";
	$erg = mysql_query($abfrage);

	echo "new Login name and Password have saved";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2; URL=admin_correct.php?kat=pruefung'>";
}

/*  Wenn loeschen gew?nscht
 	Delete Abfrage ausf?hren mit
	?bermittelter ID
*/

if ($Aktion == 'loeschen'){
	$abfrage = "delete from admins where id_login =$id_login ";
	mysql_query($abfrage);
	echo "'delete your account/login name:' $login 'and your password:' $password";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2; URL=admin_correct.php?kat=pruefung'>";

}

/* Wenn das editieren Formular abgeschickt
	wurde, muss ein Update Befehl laufen
	Informationen die ?bermittelt werden:
	$NID NachrichtenID
	$Aktion update
*/	

/* 
if ($Aktion == 'update'){
	$abfrage = "update cm4_tourprog";
	$abfrage .= "SET Nachricht = '$nachricht' ";
	$abfrage .= "where id_tour = $id_tour";
	mysql_query($abfrage);

}
	
/*  Wenn editieren few?nscht
	Abfragen ausf?hren, Datensatz mit 
	gew?nschter ID holen und in einem
	Formular anzeigen
*/

if ($Aktion == 'editieren'){
	$abfrage = " UPDATE admins SET login ='$login', password ='$password' where id_login ='$id_login'";
	$erg = mysql_query($abfrage);

	echo "your password and login name have been changed";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2; URL=admin_correct.php?kat=pruefung'>";
}

//echo "<META HTTP-EQUIV='REFRESH' CONTENT='2; URL=admin_correct.php'>";
?>