<?php 
$dbloc ="mysql.hostinger.ru"; 
$dbuser ="u247479859_mihai"; 
$dbpass ="123123"; 
if ($_SERVER["SERVER_ADDR"] == "127.0.0.1") { 
$dbloc ="localhost"; 
$dbuser ="root"; 
$dbpass =""; 
}; 
echo mb_internal_encoding(); 
//$conn = @mysql_connect($dbloc, $dbuser, $dbpass); 
$dsn = "mysql:host={$dbloc}"; 
$conn = new PDO($dsn, $dbuser, $dbpass); 
$conn-> exec("SET CHARACTER SET utf8"); 
$id = $_POST['id']; 
//$sqlstring = "INSERT INTO `kin4ik`.`u247479859_mihai` (id, Name, rating, Budget) VALUES(:id, :Name, :Producer, :Budget, :Rate)"; 
$sql = "DELETE FROM `u247479859_mihai`.`kin4ik` WHERE `id` = $id"; 
$result = $conn->prepare($sql); 
$result->bindValue(":id", $id); 
echo $result->execute(); 
$conn->lastInsertId(); 
?>