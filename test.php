<?php
$random = rand(800,1000);
for ($x = 1; $x<=1000000; $x++) {
    $square = sqrt($random);
}
echo "Square root of $random is $random";
?>