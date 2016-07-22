<?php include("functions.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="rps.css">
</head>

<body class="body">
	<h1 class="title">Rock, Paper, Scissors</h1>
	<div class="outcome">
		<ul>
			<li><h3 class="outcome__text">You chose <?php echo $player; ?>!</h3></li>
		
			<li><h3 class="outcome__text">The Computer chose <?php echo $computer; ?>!</h3></li>
			
			<li><h3 class="outcome__text"><?php echo outcome($player, $computer); ?></h3></li>
		</ul>		
	</div>
	

	
	<div class="links">
		<ul>
			<a href="index.php">PLAY AGAIN</a>
		
			<a href="../index.php">RETURN HOME</a>
		</ul>
	</div>




</body>
</html>


