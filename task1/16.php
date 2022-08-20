<?php

function increaseEnthusiasm($str) {
  return $str .= "!";
}

echo increaseEnthusiasm("increaseEnthusiasm");
echo "\n";

function repeatThreeTimes($str) {
  return $str .= $str .= $str;
}

echo repeatThreeTimes("repeatThreeTimes");
echo "\n";

echo(increaseEnthusiasm(repeatThreeTimes("123")));
echo "\n";

function cut($str, $cut_to = 10) {
  return substr($str, 0, $cut_to);
}

echo cut("012345678910", 5);
echo "\n";

$test_print = [0, 1, 2, 3, 4, 5, 6, 7, 8, 10];
function rec_print($arr) {
}

rec_print($test_print);
echo "\n";

function sum_helper($n) {
  $temp = 0;
  while ($n > 0) {
    $last_digit = (int)$n % 10;
    $temp += $last_digit;
    $n /= 10;
  }
  return $temp;
}

function sum_n_to_1_digit($n) {
  $ans = sum_helper($n);
  while ($ans > 9) {
    $ans = sum_helper($ans);
  }
  return $ans;
}

echo sum_n_to_1_digit(123456);

?>