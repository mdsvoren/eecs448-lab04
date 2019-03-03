<?php

$numCorrect = 0;

$q1Answer = $_POST['q1'];
$q2Answer = $_POST['q2'];
$q3Answer = $_POST['q3'];
$q4Answer = $_POST['q4'];
$q5Answer = $_POST['q5'];


if($q1Answer == WorldWideWeb)
{
  $numCorrect++;

}
if($q2Answer == MasaSon)
{
  $numCorrect++;

}
if($q3Answer == a35k)
{
  $numCorrect++;

}
if($q4Answer == Bugdroid)
{
  $numCorrect++;

}
if($q5Answer == Ripple)
{
  $numCorrect++;

}
$score = $numCorrect / 5 *100;

echo "Results: <br><br>";

echo "You answered $numCorrect out of 5 correctly<br>";
echo "Score: $score%<br><br>";

//Print question answers
echo ("Question 1: What was the first web browser?<br>");
echo "You answered: $q1Answer<br>";
echo "Correct answer: WorldWideWeb<br><br>";

echo "Question 2: Which tech titan is/was known for their 300 year plan?<br>";
echo "You answered: $q2Answer<br>";
echo "Correct answer: Masa Son <br><br>";

echo "Question 3: What was the entry-level target price for the Tesla Model 3?<br>";
echo "You answered: $q3Answer<br>";
echo "Correct answer: $35k <br><br>";

echo "Question 4: What is Google's Android mascot unofficially called?<br>";
echo "You answered: $q4Answer<br>";
echo "Correct answer: Bugdroid<br><br>";

echo "Question 5: What company does Brad Garlinghouse run (as of 2019)?<br>";
echo "You answered: $q5Answer<br>";
echo "Correct answer: Ripple<br><br>";


?>
