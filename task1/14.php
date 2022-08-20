<?php

$a = 10;
$b = 3;
$remainder = $a % $b;
echo "остаток от деления $a на $b = $remainder\n";

if ($remainder === 0) {
  echo "делится";
} else {
  echo $a; echo " делится на "; echo $b; echo " c остатком ";
  echo $remainder;
}
echo "\n";

$st = pow(2, 10);
$sqr = sqrt(245);

$arr = array(4, 2, 5, 19, 13, 0, 10);
$ans = 0;
$temp_sum = 0;
foreach ($arr as &$val) {
  $temp_sum += pow($val, 2);
}
$ans = sqrt($temp_sum);
echo $ans;
echo "\n";

$sqrt_379 = sqrt(379);
echo round($sqrt_379, 0); echo " ";
echo round($sqrt_379, 1); echo " ";
echo round($sqrt_379, 2);
echo "\n";

$sqrt_587 = sqrt(587);
$ass_arr = ["floor" => floor($sqrt_587),  "ceil" => ceil($sqrt_587)];

$arr2 = array(4, -2, 5, 19, -130, 0, 10);
$min = min($arr2);
$max = max($arr2);

echo(rand(1, 100));
echo "\n";

$rand_arr = [];
for ($i = 0; $i < 10; $i++) {
  $rand_arr[$i] = rand(1, 100);
  echo $rand_arr[$i]; echo " ";
}
echo "\n";

echo abs($a - $b); echo " ";
echo abs($b - $a); echo " ";

$a = 5; $b = 10;
echo abs($a - $b); echo " ";
echo abs($b - $a);
echo "\n";

$arr_with_numbers = [1, 2, -1, -2, 3, -3];
foreach ($arr_with_numbers as &$val) {
  $val = abs($val);
  echo $val; echo " ";
}
echo "\n";

$number = 113;
$divisors = [];

for ($i = 1, $counter = 0; $i <= $number; $i++) {
  if ($number % $i === 0) {
    $divisors[$counter] = $i;
    $counter++;
  }
}

foreach ($divisors as &$val) {
  echo $val; echo " ";
}

echo "\n";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$border = 10;
$sum = 0;
$counter = 0;
foreach ($arr as &$val) {
  $sum += $val;
  $counter++;
  if ($sum > $border) {
    break;
  }
}

echo $counter; echo " элементов";
echo "\n";

?>