<?php

$data_set = isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"]);
if ($data_set) {
  echo "{$_SESSION['name']} {$_SESSION['surname']} {$_SESSION['age']}";
}

?>