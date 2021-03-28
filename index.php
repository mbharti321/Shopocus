<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Shopocus!</title>
</head>

<body>
	Hello!
	<div>
	  <h1>  Welcome to Shopocus! </h1>
	</div>
</body>

</html>