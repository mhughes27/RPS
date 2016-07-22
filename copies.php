<?php include("functions.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
</head>

<body>
	<h1>Rock, Paper, Scissors</h1>

	<h3>You chose <?php echo $_GET["choice"]; ?>!</h3>

	<h3>The Computer chose <?php echo weapon(); ?>!</h3>

	

	<h1><?php echo outcome($player, $computer); ?></h1>


	<a href="index.php">PLAY AGAIN</a>






</body>
</html>


