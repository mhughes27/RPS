<?php
	$player = $_GET["choice"];
	?>


<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
</head>

<body>
	<p><?php print_r($_GET); ?></p>

	<h1> Rock, Paper, Scissors</h1>

<p> You chose <?php echo $_GET["choice"]; ?> </p>	

<p> The computer chose <?php
	$num = rand(1,300);
		echo $compnum;

if($num%3 == 0){
	echo "Rock";
}
elseif($num%3 == 1){
	echo "Paper";
}
else{
	echo "Scissors";
}
?>!<p>

<?
if($player == XXXX){
	echo "NO BLOOD, PLAY AGAIN";
}
elseif ($player == "rock" && XXX == "sissors") {
	echo "You LOSE";
}
elseif ($player == "rock" && XXX == "paper") {
	echo "You WIN";
}
elseif ($player == "paper" && XXX == "rock") {
	echo "You WIN";
}
elseif ($player == "paper" && XXX == "sissors") {
	echo "You LOSE";
}
elseif ($player == "sissors" && XXX == "rock") {
	echo "You LOSE";
}
else ($player == "sissors" && XXX == "paper") {
	echo "You WIN";
}


<a href="index.php">PLAY AGAIN</a>

</body>
</html>


