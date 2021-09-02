<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];
  $ use_id =
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id=:id");
	$stmt->execute(array(":id"=>$id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Livestrock Tracker</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>



	<div id="main">

								<h1><font color='green'>Welcome!</font></h1>

               <p><b>You can Access this Page.</b></p>


						<p><a href="https://traker-platform.web.app"  ><button class="button" >Launch Dashboard</button</a></p>

        </div>

</body>
</html>
