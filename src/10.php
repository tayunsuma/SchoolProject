<?php
function getRandomInt($min, $max) {
    return rand($min, $max);
}

$randomNumber = getRandomInt(1, 10);
echo $randomNumber;
?>
