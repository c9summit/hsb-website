<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DASHBOARD</title>
</head>
<body>
    <a href="logout.php">Logout</a>
	<h1>This is the DASHBOARD</h1>

    <br>
	Hello, <?php echo $user_data['user_name']; ?>

</body>
</html>