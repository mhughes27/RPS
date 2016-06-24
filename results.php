<?php print_r($_GET); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
</head>

<body>
	<p><?php print_r($_GET); ?></p>
	
	<h1> Rock, Paper, Scissors</h1>




<p> You chose <?php echo $_GET[]; ?></p>




</body>
</html>




<?php
if($_GET == "rock"){
	echo "You chose ROCK!";
}
elseif($_GET == "paper"){
	echo "You chose PAPER!";
}
elseif ($_GET == "scissors") {
	echo "You chose SCISSORS!";
}
else{
	echo "INVALID ENTRY: Please type rock paper or scissors";
}
?>
