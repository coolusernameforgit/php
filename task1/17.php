<?php

function create_arr_of_symbol($n) {
  $arr = [];
  $symbol = "x";
  for ($i = 0; $i < $n; $i++) {
    $str = str_repeat($symbol, $i+1);
    $arr[$i] = $str;
  }
  return $arr;
}

foreach (create_arr_of_symbol(3) as &$val) {
  echo $val; echo " ";
}

echo "\n";

function arrayFill($val, $n) {
  $arr = [];
  for ($i = 0; $i < $n; $i++) {
    $arr[$i] = $val;
  }
  return $arr;
}

foreach (arrayFill('x', 4) as &$val) {
  echo $val; echo " ";
}

echo "\n";

function accumulate_2d_arr($arr_2d) {
  $ans = 0;
  foreach ($arr_2d as &$arr_1d) {
    foreach ($arr_1d as &$val) {
      $ans += $val;
    }
  }
  return $ans;
}
echo accumulate_2d_arr([[1, 2, 3], [4, 5], [6], [7]]);
echo "\n";

function create_2d_arr($n) {
  $arr = [];
  $counter = 1;
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      $arr[$i][$j] = $counter;
      $counter++;
    }
  }
  return $arr;
}

function print_2d_arr($arr_2d) {
  foreach ($arr_2d as &$arr_1d) {
    foreach ($arr_1d as &$val) {
      echo $val; echo " ";
    }
    echo "\n";
  }
}

print_2d_arr(create_2d_arr(3));

$arr = [2, 3, 5, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
echo "\n";

$user = [
"name" => "name",
"surname" => "surname",
"patronymic" => "patronymic"];
echo $user["name"]; echo " "; echo $user["surname"];
echo "\n";

$date = ['year' => 2022, 'month' => 8, 'day' => 20];
$year = $date['year']; $month = $date['month']; $day = $date['day'];
echo "$year-$month-$day\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr); echo " "; echo ($arr[0]); echo " "; echo $arr[count($arr)-2];

?>