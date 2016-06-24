


<!DOCTYPE html>
<html>

<head>
	<title>Rock, Paper, Scoissors</title>
	<link rel="stylesheet" type="text/class" href="teststyle3.css">
</head>

<body>
	<h1> Rock, Paper, Scissors</h1>

<p> You chose <?php echo $_GET["choice"]; ?> 	

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



<a href="index.php">PLAY AGAIN</a>

</body>
</html>


