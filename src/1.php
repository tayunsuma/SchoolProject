 <?php
function getRandomNumber() {
  $random = rand(1, 10);
  return $random;
}

$number = getRandomNumber();
echo $number;
 ?>