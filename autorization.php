<?php
session_start();
require('connect.php');
header('Content-Type: text/html; charset= utf-8');
$UserName = $_POST["name"];
$Password = $_POST["Password"];
$dbh = Connection::getInstance()->connect();

	$sql = "SELECT * FROM `u247479859_auto`.`User`";
                $result = $dbh->query($sql);
	echo $UserName;
echo $Password;	
			
while ($row = $result->fetch(PDO::FETCH_ASSOC)){

	if ( ($row[Password] == $Password) and ($row[UserName] == $UserName)){
		$_SESSION['logged_user'] = $UserName;
		header("Location: stas.php");
		$sql = "INSERT INTO `u533224130_stas`.`Message` (`text`,`User`) VALUES ('&#1055;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1090;&#1077;&#1083;&#1100; {$UserName} &#1042;&#1086;&#1096;&#1077;&#1083; &#1074; &#1057;&#1080;&#1089;&#1090;&#1077;&#1084;&#1091;','&#1057;&#1080;&#1089;&#1090;&#1077;&#1084;&#1091;');";
		$msg = "OK";
		echo $msg;
		exit;	
	}
echo $row[Password];
echo $row[UserName];
}		
		
			
	
	
		header("location: enter.php");
		
	
?>
							