<?php $player = echo $_GET["choice"];?>
<?php $computer = echo weapon();?>


<?php function outcome(){

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



















<?php $player = echo $_GET["choice"];?>
<?php $computer = echo weapon();?>


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





















<?php function outcome(){

	if(echo $_GET["choice"]; ==  echo weapon();){
		return "NO BLOOD, PLAY AGAIN";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "ROCK" && <?php echo weapon(); ?> == "SCISSORS") {
		return "You WIN";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "ROCK" && <?php echo weapon(); ?> == "PAPER") {
		return "You LOSE";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "PAPER" && <?php echo weapon(); ?> == "ROCK") {
		return "You WIN";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "PAPER" && <?php echo weapon(); ?> == "SCISSORS") {
		return "You LOSE";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "SCISSORS" && <?php echo weapon(); ?> == "ROCK") {
		return "You LOSE";
	}
	elseif (<?php echo $_GET["choice"]; ?> == "SCISSORS" && <?php echo weapon(); ?> == "PAPER") {
		return "You WIN";
	}
}
?>


<?php function outcome(){

	if(<?php $_GET["choice"]; ?> == <?php weapon(); ?>){
		return "NO BLOOD, PLAY AGAIN";
	}
	elseif (<?php $_GET["choice"]; ?> == "ROCK" && <?php weapon(); ?> == "SCISSORS") {
		return "You WIN";
	}
	elseif (<?php $_GET["choice"]; ?> == "ROCK" && <?php weapon(); ?> == "PAPER") {
		return "You LOSE";
	}
	elseif (<?php $_GET["choice"]; ?> == "PAPER" && <?php weapon(); ?> == "ROCK") {
		return "You WIN";
	}
	elseif (<?php $_GET["choice"]; ?> == "PAPER" && <?php weapon(); ?> == "SCISSORS") {
		return "You LOSE";
	}
	elseif (<?php $_GET["choice"]; ?> == "SCISSORS" && <?php weapon(); ?> == "ROCK") {
		return "You LOSE";
	}
	elseif (<?php $_GET["choice"]; ?> == "SCISSORS" && <?php weapon(); ?> == "PAPER") {
		return "You WIN";
	}
}
?>








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


<?php function outcome(){

	if($player == <?php echo computer(); ?>){
		return "NO BLOOD, PLAY AGAIN";
	}
	elseif ($player == "ROCK" && <?php echo computer(); ?> == "SCISSORS") {
		return "You WIN";
	}
	elseif ($player == "ROCK" && <?php echo computer(); ?> == "PAPER") {
		return "You LOSE";
	}
	elseif ($player == "PAPER" && <?php echo computer(); ?> == "ROCK") {
		return "You WIN";
	}
	elseif ($player == "PAPER" && <?php echo computer(); ?> == "SCISSORS") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && <?php echo computer(); ?> == "ROCK") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && <?php echo computer(); ?> == "PAPER") {
		return "You WIN";
	}
}
?>










<?php $player = echo $_GET["choice"];?>

<?php $computer = echo weapon();?>



<?php function outcome(){

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







<h1>HELLO</h1>
	
	<p><?php print_r($_GET); ?></p>

	<h1> Rock, Paper, Scissors</h1> 

<p> You chose <?php echo $_GET["choice"]; ?>! </p>	





<p> The computer chose <?php echo weapon(); ?>!<p>
	

<h1><?php echo $player; ?></h1>

<h1><?php echo outcome(); ?></h1>

<h1><?php echo $computer; ?></h1>



<h1> <?php echo outcome(); ?></h1>






<!-- <?php $player = $_GET["choice"]; ?> -->


<!-- 
<?php function outcome(){

	if($player == <?php echo weapon(); ?>){
		return "NO BLOOD, PLAY AGAIN";
	}
	elseif ($player == "ROCK" && <?php echo weapon(); ?> == "SCISSORS") {
		return "You WIN";
	}
	elseif ($player == "ROCK" && <?php echo weapon(); ?> == "PAPER") {
		return "You LOSE";
	}
	elseif ($player == "PAPER" && <?php echo weapon(); ?> == "ROCK") {
		return "You WIN";
	}
	elseif ($player == "PAPER" && <?php echo weapon(); ?> == "SCISSORS") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && <?php echo weapon(); ?> == "ROCK") {
		return "You LOSE";
	}
	elseif ($player == "SCISSORS" && <?php echo weapon(); ?> == "PAPER") {
		return "You WIN";
	}
}
?>
 -->

