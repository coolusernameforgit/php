<?php

  $answer = "";
  $answer .= "<ul>";
  foreach ($_SESSION as $key => $value)
    $answer .= "<li>" . $key . "=" . $value;
  $answer .= "</ul>";
  echo $answer;

?>