
<?php

function weapon(){
	$num = rand(1,300);

	if($num%3 == 0){
		return "ROCK";
	}
	elseif($num%3 == 1){
		return "PAPER";
	}
	else{
		return "SCISSORS";
	}
}

?>

<?php $player = $_GET["choice"]; ?>
<?php $computer = weapon(); ?>


<?php function outcome($player, $computer){

	if($player == $computer){
		return "NO BLOOD, PLAY AGAIN";
	}
	elseif ($player == "ROCK" && $computer == "SCISSORS") {
		return "You WIN";
	}
	elseif ($player == "ROCK" && $computer == "PAPER") {
		return "You LOSE";
	}
	elseif ($player == "PAPER" && $computer == "ROCK") {
		return "You WIN";
	}
	elseif ($player == "PAPER" && $computer == "SCISSORS") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && $computer == "ROCK") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && $computer == "PAPER") {
		return "You WIN";
	}
}
?>







