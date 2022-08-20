<?php

function accumulate($arr) {
  $ans = 0;
  foreach ($arr as &$val) {
    $ans += $val;
  }
  return $ans;
}

function create_arr($n) {
  $arr = [];
  for ($i = 0; $i < $n; $i++) {
    $arr[$i] = $i+1;
  }
  return $arr;
}

function print_arr(&$arr) {
  foreach ($arr as &$val) {
    echo $val; echo " ";
  }
  echo "\n";
}

function arr_sqrt(&$arr) {
  foreach ($arr as &$val) {
    $val = sqrt($val);
  }
}

function sum_str($str) {
  return 12+34+56+79+90;
}

$arr = create_arr(100);
$sum_arr = accumulate($arr);
$arr_size = count($arr);
$avg = $sum_arr / $arr_size;

echo "среднее арифметическое $avg\n";
echo "сумма элементов $sum_arr\n";

arr_sqrt($arr);

$arr = [
'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6,
'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12,
'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18,
's' => 19, 't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24,
'y' => 25, 'z' => 26];

$str = '1234567890';
echo sum_str($str);

?>