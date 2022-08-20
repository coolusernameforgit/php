<?php

$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " any string";
echo "\nYour order is: $very_bad_unclear_name.";
echo "\n";

?>