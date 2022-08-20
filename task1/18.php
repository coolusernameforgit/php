<?php

function bigger_than_10($first, $second) {
  return $first + $second > 10;
}

function equal($first, $second) {
  return $first === $second;
}

$test = 0;
if (!$test) echo "верно\n";

function sum_helper($n) {
  $temp = 0;
  while ($n > 0) {
    $last_digit = (int)$n % 10;
    $temp += $last_digit;
    $n /= 10;
  }
  return $temp;
}

$age = rand(0, 200);
if ($age < 10 || $age > 99) {
  echo "число меньше 10 или больше 99";
} else {
  $age_dig_sum = sum_helper($age);
  if ($age_dig_sum <= 9) {
    echo "сумма цифр однозначна";
  } else {
    echo "сумма цифр двузначна";
  }
}
echo "\n";

$arr = [1, 2, 3];
function accumulate($arr) {
  $ans = 0;
  foreach ($arr as &$val) {
    $ans += $val;
  }
  return $ans;
}

if (count($arr) === 3) {
  echo accumulate($arr);
}

?>