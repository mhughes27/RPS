<?php include("functions.php") ?>


<?php
echo "\nTesting that player chose rock and computer chose rock is tie.\n";
if (outcome(ROCK, ROCK) == "NO BLOOD, PLAY AGAIN") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that player chose paper and computer chose rock is a win.\n";
if (outcome(PAPER, ROCK) == "You WIN") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that player chose rock and computer chose paper is a loss.\n";
if (Outcome(ROCK, PAPER) == "You LOSE") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>