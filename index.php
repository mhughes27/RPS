



<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
</head>

<body>

	<p><?php print_r($_GET); ?></p>

	<h1> Rock, Paper, Scissors</h1>

	
	
	


	<form>
		<input type="text" name="choice">
		<input type="submit" <a href="random.php?choice=rock"></a> 
	</form>


<?php
	$weapon = $_GET["choice"];
	echo "You chose $weapon!";
	?>

<a href="random.php?choice=rock">DID I WIN?</a>

</body>
</html>


	

