<?php
session_start();
if(!(empty($_SESSION['logged_user'])))
	//header("Location: ../ajaxPR/ajax.php");
?>
<html>

<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link rel="stylesheet" href="../font-awesome-4.2.0/css/font-awesome.min.css" />
        <link href="FontAwesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css ">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
	<meta charset='utf-8'>
	<link rel="stylesheet" href="../css/enter.css" />
	<style type="text/css">
	</style>
</head>

<body>
<div class="container"
	<form id="loginform" class="unauthorized" method="post" action="autorization.php">
	<div id="enter">
		<input required="true"
 name="name" id="login"/> 
		<input required="true"  type="password" name="Password" id="password">
		<input value="&#1042;&#1086;&#1081;&#1090;&#1080;" id="button" class="btn btn-primary" type="submit">
	</div>
</div>
	
<form>
<div class="stas"></div>
<script src="../js/enter.js"></script>
</body>

</html>			